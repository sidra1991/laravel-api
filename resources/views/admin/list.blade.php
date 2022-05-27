@include('layouts.app')
@include('layouts.nav')



qui è visibile la lista privata dei post scritti dal utente, cliccandoci sopra si entra nello show, da qui l'utente puo gestire l'edit e il delete dei suoi post
<hr>

<ol>
    @foreach ($myPost as $post)
        <li>
            {{$post->title}}
            <a href="{{route('show', $post->id )}}">vedi</a>
            ---
            <a href="{{route('admin.post.edit', $post->id )}}">modifica</a>
            ---
            <form action="{{route('admin.post.destroy', $post->id)}}" method="post" >
                @method('DELETE')
                @csrf
                <input type="submit" value="elimina" >
            </form>

        </li>
    @endforeach

    <a href="{{route('admin.post.create')}}">crea nuovo post</a>
</ol>
