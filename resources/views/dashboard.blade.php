@extends('layout.layout')

@section('title','Dashboard')

@section('content')
<div class="row">
    <div class="col-3">
        @include('includes.left-side-bar')
    </div>
    <div class="col-6">
        @include('includes.success-message')
        @include('ideas.includes.submit-idea')        
        <hr>

        @forelse ($ideas as $idea)
            <div class="mt-3">
                @include('ideas.includes.idea-card')
            </div>
        @empty
            <p class="text-center m-3">{{ trans('ideas.no_results_found') }}</p>
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