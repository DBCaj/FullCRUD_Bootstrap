<div>
  @extends('layouts.editForm')
  @section('edit-content')
  
  <div class="card">
    <div class="card-header">
      <h3 class="text-georgia">Update User Form</h3>
    </div>
    <div class="card-body">
      
      @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ Session::get('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      
      <form action="{{ route('user.edit.auth') }}" method="POST">
        @csrf
        <input type="hidden" name="userId" value="{{ $user->id }}">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" value="{{ $user->name }}" disabled>
        </div>
        <div class="form-group">
          <label for="firstname">Firstname: </label>
          <input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control" required autofocus>
          @error('firstname')
            <span style="color:red">{{ $message }}. e.g., John</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="middlename">Middlename: </label>
          <input type="text" name="middlename" value="{{ $user->middlename }}" class="form-control">
          @error('middlename')
            <span style="color:red">{{ $message }}. eg., Svartholm</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="lastname">Lastname: </label>
          <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control" required>
          @error('lastname')
            <span style="color:red">{{ $message }}. e.g., Doe</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="email" name="email" value="{{ $user->email }}" required class="form-control">
          @error('email')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="password">New Password: </label>
          <input type="text" name="password" class="form-control" placeholder="You can leave this empty">
          @error('password')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="password_confirmation">Confirm Password: </label>
          <input type="text" name="password_confirmation" placeholder="You can leave this empty" class="form-control">
          @error('password_confirmation')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="role">Role: </label>
          <select name="role" value="" class="form-control">
            <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
            @if($user->role == 'admin')
              <option value="user">User</option>
            @else
              <option value="admin">Admin</option>
            @endif
          </select>
          
          @error('role')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to update?')">
            Update
          </button>
        </div>
      </form>
    </div>
  </div>

  @stop  

</div>