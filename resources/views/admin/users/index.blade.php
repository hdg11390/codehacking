@extends('layouts.admin')

@section('content')

    @if (Session::has('delete_user'))
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        {{ session('delete_user') }}
      </div>

    @elseif (Session::has('create_user'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        {{ session('create_user') }}
      </div>

    @elseif (Session::has('update_user'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        {{ session('update_user') }}
      </div>

    @endif

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