@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ str_limit($post->content, 200, '...') }}</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{ $post->created_at->format('d-M-Y') }} by
                        <a href="#">{{ $post->user->name }}</a>
                    </div>
                </div>
            @endforeach

            {{ $posts->render() }}
        </div>
    </div>
@endsection