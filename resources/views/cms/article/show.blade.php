@extends('cms.parent')

@section('title' , 'Show Article')
@section('main-title' , 'Show Article ')
@section('sub-title' , 'Article')


@section('styles')


@endsection


@section('content')


<form>
    <div class="card-body">
        <div class="form-group">
            <label for="image">{{ $articles->title}}</label>
            <img
                src="{{ asset('storage/images/article/' . $articles->image) }}"
                value="{{ $articles->image }}" disabled width="100" height="100"
                alt="User Image">
        </div>
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
              <h3 class="card-title">({{ $articles->title}})</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">

                <div class="form-group">
                  <label for="short_description">short_description</label>
                  <input
                    style="width: 1000px; height: 120px;"
                  type="text" class="form-control" disabled id="short_description" name="short_description"
                  value="{{ $articles->short_description }}" placeholder="short_description of article">
                </div>

                <div class="form-group">
                  <label for="author_id">Author name</label>
                  <input type="text" class="form-control" disabled id="author_id" name="author_id"
                  value="{{ $articles->author->user->first_name.' '. $articles->author->user->last_name }}" placeholder="name of author">
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">

                <a href="{{ route('articles.index') }}" type="submit" class="btn btn-info"> <i class="fas fa-backward"></i>Go Back</a>

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
