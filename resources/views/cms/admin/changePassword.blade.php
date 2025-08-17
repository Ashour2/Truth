@extends('cms.parent')

@section('title' , 'change password')
@section('main-title' , 'change password')
@section('sub-title' , 'change password')


@section('styles')


@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">change password</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">
                <div class="row">

                <div class="col-md-6">

                <div class="form-group">
                  <label for="password"> current password </label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter current_password ">
                </div>
            </div>

            <div class="col-md-6">

                <div class="form-group">
                  <label for="new_password"> new password </label>
                  <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter new_password ">
                </div>
            </div>
            </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                          <label for="new_password_confirmation"> confirm_password</label>
                          <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="Enter confirm_password ">
                        </div>
                    </div>
                </div>
            </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="updatePassword()" class="btn btn-primary">ChangePassword</button>
              </div>
            </form>
          </div>
          <!-- /.card -->


          <!-- /.card -->

        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection

@section('scripts')

<script>
    function updatePassword(){
        let formData = new FormData();
        formData.append('password',document.getElementById('password').value);
        formData.append('new_password',document.getElementById('new_password').value);
        formData.append('new_password_confirmation',document.getElementById('new_password_confirmation').value);

        store('/cms/admin/updatePassword' , formData);

    }

</script>
@endsection
