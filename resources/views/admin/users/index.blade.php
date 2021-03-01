@extends('layouts.admin')

@section('content')
<h1>Users</h1>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
        <th>Joined On</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
        @if ($users)
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td><img height="50" src="{{ $user->photo ? $user->photo->file : '/images/no_img.jpg' }}" alt=""></td>
            <td><a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role->name }}</td>
            <td>{{ $user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
            <td>{{ $user->created_at->format('F d, Y') }}</td>
            <td>{{ $user->updated_at->format('F d, Y') }}</td>
          </tr>
            
        @endforeach
            
        @endif
      
      
    </tbody>
  </table>
</div>

</body>
</html>

    
@endsection