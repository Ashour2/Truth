@extends('cms.parent')

@section('title' , 'Index Role')
@section('main-title' , 'Index Role')
@section('sub-title' , 'index Role')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <a href="{{ route('roles.create') }}" type="submit" class="btn btn-info">Add New Role</a>
                {{--  <a href="{{ route('countries-trashed') }}" type="submit" class="btn btn-danger">Trashed</a>
                <a href="{{ route('truncate') }}" type="submit" class="btn btn-danger">Delete All</a>  --}}

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Role Name</th>
                    <th>Guard Name</th>
                    <th>Permissions</th>

                    <th>Setting</th>

                  </tr>
                </thead>
                <tbody>

             
               
                    @forelse ($roles as $role )
                        
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{$role->name}}</td>
                        <td><span class="badge bg-success"> {{$role->guard_name}}</td>

                          <td><a href="{{route('roles.permissions.index', $role->id)}}"
                            class="btn btn-info">({{$role->permissions_count}})
                            permissions/s</a> </td>
                        <td>

                        <td>

                            <div class="btn-group">
                                <a href="{{ route('roles.edit' , $role->id  ) }}" type="button" class="btn btn-info">Edit</a>
                                <button type="button" onclick="performDestroy({{$role->id  }} , this)" class="btn btn-danger">Delete</button>
                              </div>


                        </td>

                      </tr>
                    @empty
                        <tr>
                            <td colspan="7" > No Defiend Roles  </td>
                        </tr>
                    @endforelse
             
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
     
          </div>
          <!-- /.card -->
          {{ $roles->links() }}
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
          confirmDestroy('/cms/admin/roles/' + id , reference) ;
        }
    </script>
@endsection
