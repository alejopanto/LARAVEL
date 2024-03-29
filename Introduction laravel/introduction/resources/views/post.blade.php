@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">

                    @if ($post->image)
                        <h3>Imagen</h3>
                        <img src="{{ $post->get_image }}" class="card-img-top">
                    @endif
                    <hr>
                    @if($post->iframe)
                        <h3>Contenido Embebido</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! $post->iframe !!}
                        </div>
                    @endif

                    <h5 class="card-title"> {{ $post->title }} </h5>
                    <p class="card-test"> 
                        {{ $post->body }} 
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
