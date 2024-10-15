<div class="card mt-3">
    <div class="card-header pb-0 border-0">
        <h5 class="">{{ trans('ideas.top_users') }}</h5>
    </div>
    <div class="card-body">
        @foreach ($topUsers as $user)
            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="{{ route('users.show', $user->id) }}"><img style="width:50px;"
                            class="avatar-img rounded-circle" src="{{ $user->getImageURL() }}" alt=""></a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
                    <p class="mb-0 small text-truncate">{{ $user->email }}</p>
                </div>
                @auth
                    @if (Auth::user()->follows($user))
                        <form method="POST" action="{{ route('users.unfollow', $user->id) }}" class="ms-auto">
                            @csrf
                            @method('post')
                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"
                                onclick="this.closest('form').submit();return false;"><i class="fa-solid fa-minus">
                                </i></a>
                        </form>
                    @else
                        <form method="POST" action="{{ route('users.follow', $user->id) }}" class="ms-auto">
                            @csrf
                            @method('post')
                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"
                                onclick="this.closest('form').submit();return false;"><i class="fa-solid fa-plus">
                                </i></a>
                        </form>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
</div>
