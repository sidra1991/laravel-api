@include('layouts.app')
@include('layouts.nav')


<div>
    <form action="{{ route('admin.post.store') }}" method="post">
        @csrf
        <div >
            <label for="title" >'Title'</label>
            <input type="text"  id="title" name="title" value="{{ old('title') }}">
        </div>

        <div >
            <label for="content">'Content'</label>
            <textarea id="content"  name="content">{{ old('content') }}</textarea>
        </div>
        <button>Save</button>
    </form>
</div>
