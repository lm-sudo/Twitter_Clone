<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
    data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1">
            </span>{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('login') ? 'active' : '' }}" aria-current="page"
                            href="{{ 'login' }}">{{ trans('ideas.login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('register') ? 'active' : '' }}"
                            href="{{ 'register' }}">{{ trans('ideas.register') }}</a>
                    </li>
                @endguest
                @auth()
                    @if (Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="{{ Route::is('admin.dashboard') ? 'active' : '' }} nav-link"
                                href="{{ route('admin.dashboard') }}"> {{ trans('ideas.admin_dashboard') }} </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('profile') ? 'active' : '' }}"
                            href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action=" {{ route('logout') }}" method="POST">
                            @csrf
                                <button style="margin-top: 4px; margin-left: 8px;" class="btn btn-danger btn-sm" type="submit">{{ trans('ideas.logout') }}</button>
                        </form>
                    </li>
                @endauth()
            </ul>
        </div>
    </div>
</nav>
