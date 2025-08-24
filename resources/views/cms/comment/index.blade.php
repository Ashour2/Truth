@extends('cms.parent')

@section('title' , 'Index Comment')
@section('main-title' , 'Index Comment')
@section('sub-title' , 'index Comment')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                {{--  <a href="{{ route('countries-trashed') }}" type="submit" class="btn btn-danger">Trashed</a>  --}}
                {{--  <a href="{{ route('truncate') }}" type="submit" class="btn btn-danger">Delete All</a>  --}}

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>comment</th>


                    <th>Setting</th>



                  </tr>
                </thead>
                <tbody>



                    @forelse ($comments as $comment )

                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{$comment->name}}</td>

                        <td>

                            <div class="btn-group">
                                <button type="button" onclick="performDestroy({{$comment->id  }} , this)" class="btn btn-danger">Delete</button>
                              </div>


                        </td>

                      </tr>
                    @empty
                        <tr>
                            <td colspan="7" > No Defiend comments  </td>
                        </tr>
                    @endforelse

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->
          {{ $comments->links() }}
          <!-- /.card -->
        </div>

      </div>


      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('scripts')
    <script>
        function performDestroy(id , reference){
          confirmDestroy('/cms/admin/comments/' + id , reference) ;
        }
    </script>
@endsection
