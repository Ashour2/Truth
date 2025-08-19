@extends('cms.parent')

@section('title', 'Create author')
@section('main-title', 'Create author')
@section('sub-title', 'Add a new author to the system')

@section('styles')
@endsection

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">

        <div class="card shadow-lg border-0 rounded-3">
          <div class="card-header bg-primary text-white">
            <h3 class="card-title"><i class="fas fa-user-shield mr-2"></i> Add New author</h3>
          </div>

          <form>
            <div class="card-body">

              <div class="row g-3">
                <!-- City -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="city_id" class="form-label">City</label>
                    <select class="form-control select2" id="city_id" name="city_id">
                      @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- First Name -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
                  </div>
                </div>

                <!-- Last Name -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
                  </div>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                  </div>
                </div>

                <!-- Password -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                  </div>
                </div>

                <!-- Mobile -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile">
                  </div>
                </div>
                <!-- Address -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                  </div>
                </div>

                <!-- Date of Birth -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="date" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="date" name="date">
                  </div>
                </div>

                <!-- Image -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="image" class="form-label">Profile Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                  </div>
                </div>

                <!-- Gender -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" id="gender" class="form-select">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                </div>

                <!-- Status -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                      <option value="active">Active</option>
                      <option value="inactive">Inactive</option>
                    </select>
                  </div>
                </div>

                <!-- Roles (commented) -->
                {{--
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="role_id" class="form-label">Role</label>
                    <select class="form-control select2" id="role_id" name="role_id">
                      @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                --}}
              </div>

            </div>

            <div class="card-footer d-flex justify-content-between">
              <button type="button" onclick="performStore()" class="btn btn-primary px-4">
                <i class="fas fa-save mr-2"></i> Store
              </button>
              <a href="{{ route('authors.index') }}" class="btn btn-info px-4">
                <i class="fas fa-list mr-2"></i> Go to Index
              </a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>
  function performStore(){
    let formData = new FormData();
    formData.append('first_name', document.getElementById('first_name').value);
    formData.append('last_name', document.getElementById('last_name').value);
    formData.append('mobile', document.getElementById('mobile').value);
    formData.append('address', document.getElementById('address').value);
    formData.append('date', document.getElementById('date').value);
    formData.append('email', document.getElementById('email').value);
    formData.append('city_id', document.getElementById('city_id').value);
    formData.append('password', document.getElementById('password').value);
    formData.append('gender', document.getElementById('gender').value);
    formData.append('status', document.getElementById('status').value);
    if(document.getElementById('role_id')){
      formData.append('role_id', document.getElementById('role_id').value);
    }
    formData.append('image', document.getElementById('image').files[0]);

    store('/cms/admin/authors', formData);
  }
</script>
@endsection
