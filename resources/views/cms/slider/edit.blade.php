@extends('cms.parent')

@section('title' , 'Edit slider')
@section('main-title' , 'Edit slider')
@section('sub-title' , 'Edit slider')


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
              <h3 class="card-title">Add slider</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">

                  <div class="row">


              <div class="col-md-6">

                <div class="form-group">
                  <label for="title">slider Title</label>
                  <input type="text" class="form-control" id="title" name="title"
                  value="{{ $sliders->title }}" placeholder="title of slider">
                </div>
                </div>
            </div>
            <div class="row">

                 <div class="col-md-6">

                <div class="form-group">
                  <label for="description">description</label>
                  <input type="text" class="form-control" id="description" name="description"
                  value="{{ $sliders->description }}" placeholder="description of slider">
                </div>
                </div>

            </div>


                <div class="row">

                 <div class="col-md-6">

                <div class="form-group">
                  <label for="image">Choose File</label>
                  <input type="file" class="form-control" id="image" name="image" placeholder="Chosse File">
                </div>
                </div>
              </div>


              {{--  <option selected> {{ $sliders->user->status }} </option>  --}}


            </div>


              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{ $sliders->id }})" class="btn btn-primary">Update</button>

                <a href="{{ route('sliders.index') }}" type="submit" class="btn btn-info">Go back</a>

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
        formData.append('description',document.getElementById('description').value);
        formData.append('title',document.getElementById('title').value);
         formData.append('image',document.getElementById('image').files[0]);


        storeRoute('/cms/admin/sliders-update/'+id , formData);

    }

</script>
@endsection
