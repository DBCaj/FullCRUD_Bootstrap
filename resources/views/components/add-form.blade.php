<div>
  <div class="card">
    <div class="card-header">
      <h3 class="text-georgia">Add User Form</h3>
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
      
      <form action="{{ route('user.add.auth') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="firstname">Firstname: </label>
          <input type="text" name="firstname" value="{{ old('firstname') }}" class="form-control" required autofocus>
          @error('firstname')
            <span style="color:red">{{ $message }}. e.g., John</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="middlename">Middlename: </label>
          <input type="text" name="middlename" value="{{ old('name') }}" class="form-control">
          @error('middlename')
            <span style="color:red">{{ $message }}. eg., Svartholm</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="lastname">lastname: </label>
          <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" required autofocus>
          @error('lastname')
            <span style="color:red">{{ $message }}. e.g., Doe</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="email" name="email" value="{{ old('email') }}" required class="form-control">
          @error('email')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="password">Password: </label>
          <input type="password" name="password" class="form-control" required>
          @error('password')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="password_confirmation">Confirm Password: </label>
          <input type="password" name="password_confirmation" class="form-control" required>
          @error('password_confirmation')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="role">Role: </label>
            <select name="role" value="" class="form-control">
              <option value="user" selected>
                User
              </option>
              <option value="admin">
                Admin
              </option>
            </select>
          @error('role')
            <span style="color:red">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <button type="reset" class="btn btn-danger" onclick="return confirm('Are you sure you want to clear all fields?')">Clear</button>
          <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to submit?')">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>