@include('layouts.app')
@include('layouts.nav')
<p>
    questa è la lista dei post visibile a tutti e non modificabile se non da un moderatore ( da aggiungere quando lo vedremo)
</p>
<ul>
    @foreach ($list as $post)

<<<<<<< HEAD
<<<<<<< HEAD
    <li> {{$post->title}} <a href="{{ route('ppg.show', $post->id) }}">guarda meglio</a></li>
=======
    <li> {{$post->title}} <a href="{{ route('show', $post->id) }}">guarda meglio</a></li>
>>>>>>> parent of 742e310 (lo show non funziona ho provato di tutto)
=======
    <li> {{$post->title}} <a href="{{ route('show', $post->id) }}">guarda meglio</a></li>
>>>>>>> parent of 742e310 (lo show non funziona ho provato di tutto)

    @endforeach
</ul>
