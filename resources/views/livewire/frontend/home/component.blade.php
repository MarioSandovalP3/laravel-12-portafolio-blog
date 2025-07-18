<div>
 <!-- Header -->
    <header>
        <div class="header-bg"></div>
        <div class="header-content">
            <h1 id="main-title">{{$user->name ?? 'Mi Sitio Web'}}</h1>
            <p class="tagline" id="tagline">{{$user->job_title ?? 'Eslogan'}}</p>
            <a href="#perfil" class="btn-style" id="cta-button">Conóceme</a>
        </div>
        <a href="#perfil" class="scroll-down"><i class="fas fa-chevron-down"></i></a>
    </header>

    <!-- Perfil -->
    <section id="perfil" class="section">
        <div class="container">
            <h2>Mi Perfil</h2>
            <div class="profile">
                <div class="profile-img">
                    <img src="{{ asset('storage/' .$user->imagen)}}" alt="{{$user->name ?? 'Mi Sitio Web'}}">
                </div>
                <div class="profile-text">
                    <h3>¡Hola! Soy {{$user->name}}</h3>
                    @foreach(preg_split("/\r\n|\n|\r/", trim($user->bio)) as $line)
                        @if(trim($line) !== '')
                            <p>{{ $line }}</p>
                        @endif
                    @endforeach
                    <a href="#experiencia" class="btn-style">Ver mi experiencia</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Educación -->
    <section id="educacion" class="section">
        <div class="container">
            <h2>Educación</h2>
            <div class="timeline mt-5">
                @foreach($user->Education as $education)
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3><i class="fa-solid fa-graduation-cap"></i> {{$education->title_obtained}}</h3>
                        <p><i class="fa-solid fa-building-columns"></i> {{$education->institution}}</p>
                        <p><i class="fa-solid fa-file"></i> {{$education->description}}</p>
                    </div>
                    <div class="timeline-date"><i class="fa-solid fa-calendar-check"></i> {{ \Carbon\Carbon::parse($education->date)->year }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Experiencia Laboral -->
    <section id="experiencia" class="section">
        <div class="container">
            <h2>Experiencia Laboral</h2>
            <div class="experience-grid mt-5">
                @foreach($user->WorkExperience as $workExperience)
                <div class="experience-card">
                    <div class="exp-header">
                        <h3>{{$workExperience->job}}</h3>
                        <p>{{$workExperience->name}} | {{ \Carbon\Carbon::parse($workExperience->from)->year }} - {{ \Carbon\Carbon::parse($workExperience->to)->year }}</p>
                    </div>
                    <div class="exp-body">
                        @foreach(preg_split("/\r\n|\n|\r/", trim($workExperience->description)) as $line)
                            @if(trim($line) !== '')
                                <p>{{ $line }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Habilidades -->
    <section id="habilidades" class="section">
        <div class="container">
            <h2>Habilidades</h2>
            <div class="skills-container mt-5">
                @foreach($user->Skill->groupBy('category') as $category => $skills)
                    <div class="skill-category mb-4">
                        <h3>{{ $category }}</h3>
                        @foreach($skills as $skill)
                            <div class="skill-item mb-2">
                                <div class="skill-info d-flex justify-content-between">
                                    <span>{{ $skill->ability }}</span>
                                    <span>{{ $skill->level }}%</span>
                                </div>
                                <div class="skill-bar" style="background-color: #eee; height: 8px; border-radius: 4px;">
                                    <div class="skill-progress" style="width: {{ $skill->level }}%; height: 8px; border-radius: 4px; background: linear-gradient(to right, #7b5aff, #fb62f6);"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Redes Sociales -->
    <section id="redes" class="section social-section">
        <div class="container">
            <h2>Conéctate Conmigo</h2>
            <p class="mt-5">Estoy siempre abierto a nuevas oportunidades y colaboraciones. ¡No dudes en contactarme!</p>
            
            <div class="social-links">
                @foreach($user->SocialNetwork as $socialNetwork)
                    <a href="{{$socialNetwork->url}}{{$socialNetwork->username}}" class="social-link {{strtolower($socialNetwork->name)}}">
                        <div class="social-icon">
                            <i class="fa-brands fa-{{strtolower($socialNetwork->name)}}"></i>
                        </div>
                        <span>{{$socialNetwork->name}}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

</div>