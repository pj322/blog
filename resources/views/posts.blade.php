@extends('layout')

@section('content')
    <!--Passare in qualche modo la raccolta dei posts -> trramite routes che invoca Post-->
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>">{{$post->title}}</a>
            </h1>

            <p>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <p>{{ $post->excerpt}}
            </p>
        </article>
    @endforeach
@endsection
