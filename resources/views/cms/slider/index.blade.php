@extends('cms.parent')

@section('title' , 'Index Slider')
@section('main-title' , 'Index Slider')
@section('sub-title' , 'index slider')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <a href="{{ route('sliders.create') }}" type="submit" class="btn btn-info">Add New slider</a>
                {{--  <a href="{{ route('countries-trashed') }}" type="submit" class="btn btn-danger">Trashed</a>  --}}
                {{--  <a href="{{ route('truncate') }}" type="submit" class="btn btn-danger">Delete All</a>  --}}

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                     <th> Image</th>
                     <th>slider Title</th>
                     <th> Description</th>

                    <th>Setting</th>



                  </tr>
                </thead>
                <tbody>



                    @forelse ($sliders as $slider )

                    <tr>
                        <td>{{ $slider->id }}</td>
                         <td>
                          <img class="img-circle img-bordered-sm" src="{{asset('storage/images/slider/'.$slider->image)}}" width="50" height="50" alt="User Image">
                      </td>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->description}}</td>
                        {{--  <td><span class="badge bg-info">{{$slider->cities_count}}</td>  --}}

                        <td>


                            <div class="btn-group">
                                {{-- <a href="{{ route('sliders.edit' , $slider->id  ) }}" type="button" class="btn btn-info"><i class="fas fa-edit"></i></a> --}}
                                <button type="button" onclick="performDestroy({{$slider->id  }} , this)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                {{-- <a href="{{ route('sliders.show' , $slider->id  ) }}" type="button" class="btn btn-success"><i class="fas fa-eye"></i></a> --}}
                              </div>


                        </td>

                      </tr>
                    @empty
                        <tr>
                            <td colspan="7" > No Defiend Categories  </td>
                        </tr>
                    @endforelse

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->
          {{ $sliders->links() }}
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
          confirmDestroy('/cms/admin/sliders/' + id , reference) ;
        }
    </script>
@endsection
