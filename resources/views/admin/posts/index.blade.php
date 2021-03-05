@extends('layouts.admin')
@section('content')
<h1>View Posts</h1>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Cat ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created On</th>
            <th>Updated On</th>
        </tr>
    </thead>
    <tbody>
        @if ($posts)
          @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><img height="50" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/750x300' }}" alt="picture"></td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->category ? $post->category->name : 'Uncategorized' }}</td>
                 <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->created_at->format('F d, Y') }}</td>
                <td>{{ $post->updated_at->format('F d, Y') }}</td>
            </tr>
          @endforeach 
        @endif
    </tbody>
</table>
    
@endsection