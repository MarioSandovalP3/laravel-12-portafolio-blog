<?php

namespace App\Livewire\Frontend;
use App\Models\Post;
use App\Models\PostTag;
use Livewire\Component;
use App\Models\User;
use App\Models\PostCategory;


class BlogPost extends Component
{
    public int $postId;
    #[Session(key: 'liked-post-{postId}')]
    public bool $liked = false;
    public $slug;
    public $tags = []; // Tags seleccionados
    public $tags_all = [];
    public $post_instan;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->tags = []; 
        $post = Post::where('slug', $slug)->firstOrFail();
        $this->postId = $post->id;
        
    }

    public function render()
    {
        // Verifica si el post existe por su slug
        if (Post::where("slug", $this->slug)->exists()) {
            // Obtiene el post directamente sin usar caché
            $post = Post::join("post_categories as c", "c.id", "posts.post_category_id")
                ->select("posts.*", "c.name as category", "c.slug as slug_cat")
                ->where("posts.slug", $this->slug)
                ->first();

            $this->post_instan = $post;
            
                
            // Verificar si ya se ha registrado la vista (usando una cookie o IP)
            if (!session()->has('viewed_post_' . $post->id)) {
                // Incrementar el contador de vistas
                $post->increment('views_count');
                
                // Marcar que el post ha sido visto en esta sesión
                session(['viewed_post_' . $post->id => true]);
            }
            
            // Obtiene las publicaciones relacionadas directamente sin usar caché
            $posts = Post::where("post_category_id", $post->post_category_id)
                ->join("post_categories as c", "c.id", "posts.post_category_id")
                ->select("posts.*", "c.name as category", "c.slug as cat_slug")
                ->where("posts.publication_status", "=", "Publicado")
                ->whereNotIn("posts.id", [$post->id])
                ->orderBy("id", "desc")
                ->limit(6)
                ->get();
                
            
            // Cargar los tags asociados al post
            $this->tags = $post->PostTag->pluck('name', 'slug')->toArray(); // Supone que la relación se llama 'tags'
            $this->tags_all = PostTag::inRandomOrder()->limit(50)->get();

            return view("livewire.frontend.blog.post", [
                "post" => $post,
                "posts" => $posts,
            ])
                ->extends("layouts.frontend.app")
                ->section("content");
        } else {
            return redirect("posts")->with("status", "Url no existe!!");
        }
    }

    public function like()
    {
        if (! $this->liked) {
            Post::find($this->postId)->increment('likes_count');
            $this->liked = true;
        }
    }

    function formatLikes(int $n, int $precision = 1): string
    {
        if ($n < 1000) {
            return (string) $n;
        }

        $units = ['', 'K', 'M', 'B', 'T'];
        $power = floor(log($n, 1000));
        $value = $n / (1000 ** $power);

        return round($value, $precision) . $units[$power];
    }


}

