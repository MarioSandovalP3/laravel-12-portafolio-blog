<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use App\Models\Post;
use App\Models\PostComment;
use Carbon\Carbon;

class Dashboard extends Component
{
    public $postsCount;
    public $recentPostsCount;
    public $commentsCount;
    public $viewsCount;
    public $projectsCount;
    public $skillsCount;
    
    public function mount()
    {
        $this->loadPortfolioStats();
        $this->loadBlogStats();
    }

    protected function loadPortfolioStats()
    {
        $this->postsCount = Post::count();
        $this->recentPostsCount = Post::where('created_at', '>', now()->subDays(30))->count();
        $this->commentsCount = PostComment::count();
    }

    protected function loadBlogStats()
    {
        // Datos para gráficos
        $this->prepareChartData();
    }

    protected function prepareChartData()
    {
        // Datos para gráfico de actividad (últimos 30 días)
        $dates = [];
        $postsData = [];
        $commentsData = [];
        for ($i = 30; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $dates[] = $date->format('M d');
            
            $postsData[] = Post::whereDate('created_at', $date)
                ->where('publication_status', 'Publicado')
                ->count();
            $commentsData[] = PostComment::whereDate('created_at', $date)->count();
        }

        // Datos para gráfico de posts populares (top 5)
        $popularPosts = Post::withCount(['PostComment' => function($query) {
                $query->where('status', 'approved');
            }])
            ->where('publication_status', 'Publicado')
            ->orderBy('post_comment_count', 'desc')
            ->take(5)
            ->get();

        $this->dates = $dates;
        $this->postsData = $postsData;
        $this->commentsData = $commentsData; 
        $this->popularPostsTitles = $popularPosts->pluck('title')->toArray();
        $this->popularPostsComments = $popularPosts->pluck('post_comment_count')->toArray();
    }

    public function render()
    {
        return view('livewire.backend.dashboard.dashboard', [
            'postsCount' => $this->postsCount,
            'commentsCount' => $this->commentsCount,
            'viewsCount' => $this->viewsCount,
            'projectsCount' => $this->projectsCount,
            'skillsCount' => $this->skillsCount,
            'dates' => $this->dates ?? [],
            'postsData' => $this->postsData ?? [],
            'commentsData' => $this->commentsData ?? [],
            'likesData' => $this->likesData ?? [],
            'popularPostsTitles' => $this->popularPostsTitles ?? [],
            'popularPostsViews' => $this->popularPostsViews ?? []
        ])
        ->extends('layouts.backend.app')
        ->section('content');
    }
}