@include('layouts.app')
@include('layouts.nav')

@php
    dd($post);
@endphp

<h2>{{$post->title}}</h2>

<p>{{$post->content}}</p>
