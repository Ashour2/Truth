@extends('cms.parent')

@section('title' , 'Index Permission')
@section('main-title' , 'Index Permission')
@section('sub-title' , 'index permission')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <a href="{{ route('permissions.create') }}" type="submit" class="btn btn-info">Add New permission</a>
                {{--  <a href="{{ route('countries-trashed') }}" type="submit" class="btn btn-danger">Trashed</a>
                <a href="{{ route('truncate') }}" type="submit" class="btn btn-danger">Delete All</a>  --}}

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Permission Name</th>
                    <th>Guard Name</th>

                    <th>Setting</th>

                  </tr>
                </thead>
                <tbody>

             
               
                    @forelse ($permissions as $permission )
                        
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{$permission->name}}</td>
                        <td><span class="badge bg-success"> {{$permission->guard_name}}</td>

                        <td>

                            <div class="btn-group">
                                <a href="{{ route('permissions.edit' , $permission->id  ) }}" type="button" class="btn btn-info">Edit</a>
                                <button type="button" onclick="performDestroy({{$permission->id  }} , this)" class="btn btn-danger">Delete</button>
                              </div>


                        </td>

                      </tr>
                    @empty
                        <tr>
                            <td colspan="7" > No Defiend permissions  </td>
                        </tr>
                    @endforelse
             
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
     
          </div>
          <!-- /.card -->
          {{ $permissions->links() }}
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
          confirmDestroy('/cms/admin/permissions/' + id , reference) ;
        }
    </script>
@endsection
