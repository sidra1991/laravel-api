@include('layouts.app')
@include('layouts.nav')
<p>
    questa è la lista dei post visibile a tutti e non modificabile se non da un moderatore ( da aggiungere quando lo vedremo)
</p>
<ul>
    @foreach ($list as $post)

    <li> {{$post->title}} <a href="{{ route('show', $post->id) }}">guarda meglio</a></li>

    @endforeach

    <hr>
    @auth
        <a href="{{route('admin.post.create')}}">crea nuovo post</a>
    @endauth


</ul>
