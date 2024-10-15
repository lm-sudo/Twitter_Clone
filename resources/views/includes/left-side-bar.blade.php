<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="{{ (Route::is('dashboard')) ? 'text-white bg-primary rounded' : '' }} nav-link" href="{{ route('dashboard') }}">
                    <span>{{ trans('ideas.home') }}</span></a>
            </li>
            {{--
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>Explore</span></a>
            </li>
            --}}
            <li class="nav-item">
                <a class="{{ (Route::is('feed')) ? 'text-white bg-primary rounded' : '' }} nav-link" href="{{ route('feed') }}">
                    <span>{{ trans('ideas.feed') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="{{ (Route::is('terms')) ? 'text-white bg-primary rounded' : '' }} nav-link" href="{{ route('terms') }}">
                    <span>{{ trans('ideas.terms') }}</span></a>
            </li>
            {{--
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>Support</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>Settings</span></a>
            </li>
            --}}
        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <a class="btn btn-link btn-sm" href="{{ route('lang', 'en') }}">en</a>
        <a class="btn btn-link btn-sm" href="{{ route('lang', 'es') }}">es</a>
        <a class="btn btn-link btn-sm" href="{{ route('lang', 'fr') }}">fr</a>
    </div>
</div>