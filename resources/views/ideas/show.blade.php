@extends('layout.layout')

@section('title', 'Idea')

@section('content')
<div class="row">
    <div class="col-3">
        @include('includes.left-side-bar')
    </div>
    <div class="col-6">
        @include('includes.success-message')
        <div class="mt-3">
            @include('ideas.includes.idea-card')
        </div>
    </div>
    <div class="col-3">
        @include('includes.search-bar')
        @include('includes.follow-box')
    </div>
</div>
@endsection