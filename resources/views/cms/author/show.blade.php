@extends('cms.parent')

@section('title' , 'Show Author')
@section('main-title' , 'Show Author Profile ')
@section('sub-title' , 'Author Profile')


@section('styles')


@endsection


@section('content')


<form>
    <div class="card-body">
        <div class="form-group">
            <label for="image">{{ $authors->user->first_name.' '.$authors->user->last_name }}</label>
            <img
                src="{{ asset('storage/images/author/' . $authors->user->image) }}"
                value="{{ $authors->user->image }}" disabled width="100" height="100"
                alt="User Image">
        </div>
        {{-- <div>
            <h6> To Add new Article Click Here 👉
            <a href="{{route('indexArticle',['id'=>$authors->id])}}"
            class="btn btn-info">({{ $authors->articles_count }})
            article/s</a></h6></div> --}}
        {{-- class="img-circle img-bordered-sm" --}}

    </div>
    <!-- /.card-body -->

  </form>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">


              <h3 class="card-title">author({{ $authors->user->first_name.' '.$authors->user->last_name }})Profile</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="first_name">first Name</label>
                  <input type="text" class="form-control" disabled id="first_name" name="first_name"
                  value="{{ $authors->user->first_name }}" placeholder="f-Name of author">
                </div>
                <div class="form-group">
                  <label for="last_name">last_name</label>
                  <input type="text" class="form-control" disabled id="last_name" name="last_name"
                  value="{{ $authors->user->last_name }}" placeholder="last_name of author">
                </div>

                <div class="form-group">
                  <label for="city_id">city name</label>
                  <input type="text" class="form-control" disabled id="city_id" name="city_id"
                  value="{{ $authors->user->city->name }}" placeholder="name of city">
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">

                <a href="{{ route('authors.index') }}" type="submit" class="btn btn-info"> <i class="fas fa-backward"></i>  Go Back</a>

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

@endsection
