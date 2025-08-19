@extends('cms.parent')

@section('title' , 'Edit author')
@section('main-title' , 'Edit author')
@section('sub-title' , 'Edit author')


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
              <h3 class="card-title">Add New author</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">

                  <div class="row">

                   <div class="col-md-6">
                    <div class="form-group">
                      <label>City Name</label>
                      <select class="form-control select2" id="city_id" name="city_id"  style="width: 100%;">
                        @foreach ($cities as $city)
                        {{--  <option value="{{ $city->id }}">{{ $city->name }}</option>  --}}

                        <option @if ($city->id == $authors->user->city_id) selected @endif value="{{ $city->id }}">
                          {{ $city->name }}</option>

                        @endforeach

                      </select>
                    </div>
                        </div>

              <div class="col-md-6">

                <div class="form-group">
                  <label for="first_name">First Name author</label>
                  <input type="text" class="form-control" id="first_name" name="first_name"
                  value="{{ $authors->user->first_name }}" placeholder="Enter First Name of author">
                </div>
                </div>
            </div>
            <div class="row">

                 <div class="col-md-6">

                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" id="last_name" name="last_name"
                  value="{{ $authors->user->last_name }}" placeholder="Enter Last Name of author">
                </div>
                </div>


               <div class="col-md-6">

                <div class="form-group">
                  <label for="email"> Email</label>
                  <input type="email" class="form-control" id="email" name="email"
                  value="{{ $authors->email }}" placeholder="Enter Email of author">
                </div>
                </div>
            </div>
            <div class="row">


            <div class="col-md-6">

                <div class="form-group">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control" id="mobile" name="mobile"
                  value="{{ $authors->user->mobile }}" placeholder="Enter Mobile of author">
                </div>
                </div>

              </div>

                <div class="row">

               <div class="col-md-6">

                <div class="form-group">
                  <label for="date"> Date of Birth</label>
                  <input type="date" class="form-control" id="date" name="date"
                  value="{{ $authors->user->date }}" placeholder="Enter Date of Birth">
                </div>
                </div>

                 <div class="col-md-6">

                <div class="form-group">
                  <label for="image">Choose File</label>
                  <input type="file" class="form-control" id="image" name="image" placeholder="Chosse File">
                </div>
                </div>
              </div>


              {{--  <option selected> {{ $authors->user->status }} </option>  --}}


              <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-select form-select-sm"
                                        style="width: 100%;">
                                        <option selected> {{ $authors->user->gender }}</option>

                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                  <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-select form-select-sm"
                                        style="width: 100%;">
                                        <option selected> {{ $authors->user->status }}</option>

                                        <option value="active">Active</option>
                                        <option value="inactive">InActive</option>
                                    </select>
                                </div>

                </div>
            </div>


              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{ $authors->id }})" class="btn btn-primary">Update</button>

                <a href="{{ route('authors.index') }}" type="submit" class="btn btn-info">Go to Index</a>

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
    function performUpdate(id){
        let formData = new FormData();
        formData.append('first_name',document.getElementById('first_name').value);
        formData.append('last_name',document.getElementById('last_name').value);
        formData.append('mobile',document.getElementById('mobile').value);
        formData.append('date',document.getElementById('date').value);
        formData.append('email',document.getElementById('email').value);
        formData.append('city_id',document.getElementById('city_id').value);
       // formData.append('password',document.getElementById('password').value);
        formData.append('gender',document.getElementById('gender').value);
        formData.append('status',document.getElementById('status').value);
         formData.append('image',document.getElementById('image').files[0]);


        storeRoute('/cms/admin/authors-update/'+id , formData);

    }

</script>
@endsection
