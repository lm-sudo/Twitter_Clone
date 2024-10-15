@extends('layout.layout')

@section('title', 'Edit Profile')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('includes.left-side-bar')
        </div>
        <div class="col-6">
            @include('includes.success-message')
            <div class="mt-3">
                @include('users.includes.user-edit-card')
            </div>
            <hr>
            @forelse ($ideas as $idea)
                <div class="mt-3">
                    @include('ideas.includes.idea-card')
                </div>
            @empty
                <p class="text-center m-3">No results found.</p>
            @endforelse

            <div class="mt-3">
                {{ $ideas->withQueryString()->links() }}
            </div>
        </div>
        <div class="col-3">
            @include('includes.search-bar')
            @include('includes.follow-box')
        </div>
    </div>
@endsection
