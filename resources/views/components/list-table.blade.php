<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @extends('layouts.main')
  @section('list-table')
  
  @if(Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ Session::get('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  
  <h2 class="text-georgia">User List</h2>

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>    
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th colspan="2" class="text-center">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
              <a href="{{ route('user.edit', $user->id) }}">
                <x-edit-icon />
              </a>
            </td>
            <td>
              <a href="{{ route('user.delete', $user->id) }}" onclick="return confirm('Are you sure you want to delete?')">
                <x-delete-icon />
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
  {{ $users->links() }}
      
  @stop 
  
</body>
</html>