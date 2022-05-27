@include('layouts.app')
@include('layouts.nav')


<div>
    <form action="{{ route('admin.post.update',$post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div >
            <label for="title" >'Title'</label>
            <input type="text"  id="title" name="title" value="{{ $post->title}}">
        </div>

        <div >
            <label for="content">'Content'</label>
            <textarea id="content"  name="content">{{$post->content}}</textarea>
        </div>
        <button>Save</button>
    </form>
</div>
