@extends('news.parent')

@section('title' , 'NEWS DETAILEs')

@section('styles')

@endsection


@section('content')



    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">{{ $articles->title }}

      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('view.index') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">news deatiles</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="{{asset('storage/images/article/'.$articles->image)}}" alt="">

          <hr>

          <!-- Date/Time -->
          <p>Posted on {{ $articles->created_at }} -- Written BY: {{ $articles->author->user->first_name }}</p>

          <hr>

          <!-- Post Content -->
          <p class="lead">{{ $articles->short_description }}</p>

          <p>{{ $articles->full_description }}</p>

          {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p> --}}




          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form  >
                <div class="form-group">
                  <textarea class="form-control"
                  id="name"  name="name"  rows="3"></textarea>

                </div>
                <button type="button" onclick="PerformComment()"
                  class="btn btn-primary">Submit-Comment</button>
              </form>
            </div>
          </div>


          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">All-comments </h5>
              @foreach ($comments as $comment)
                      <li class="nav-item">
                    <a class="nav-link" href="#">{{ $comment->name }}</a>
                </li>
                @endforeach
            </div>
          </div>

          <!-- Comment with nested comments -->
          {{-- <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div> --}}

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">{{ $articles->title }}</h5>
            <div class="card-body">
              {{ $articles->short_description }}
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection


@section('scripts')
<script src="{{ asset('news/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('news/js/contact_me.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/crud.js') }}"></script>
<script>
    function PerformComment(){
      let formData = new FormData();
        formData.append('name',document.getElementById('name').value);

        store('/home/comments' , formData);
    }
    </script>
@endsection
