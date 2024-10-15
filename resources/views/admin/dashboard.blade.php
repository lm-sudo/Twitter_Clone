@extends('layout.layout')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('admin.includes.left-side-bar')
        </div>
        <div class="col-9">
            <h1>{{ trans('ideas.admin_dashboard') }}</h1>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    @include('includes.widget', [
                        'title' => __('ideas.total_users'),
                        'icon' => 'fas fa-users',
                        'data' => $totalUsers,
                    ])
                </div>
                <div class="col-sm-6 col-md-4">
                    @include('includes.widget', [
                        'title' => __('ideas.total_ideas'),
                        'icon' => 'fas fa-lightbulb',
                        'data' => $totalIdeas,
                    ])
                </div>
                <div class="col-sm-6 col-md-4">
                    @include('includes.widget', [
                        'title' => __('ideas.total_comments'),
                        'icon' => 'fas fa-comment',
                        'data' => $totalComments,
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
