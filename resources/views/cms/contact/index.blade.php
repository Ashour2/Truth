@extends('cms.parent')

@section('title' , 'Index Contact')
@section('main-title' , 'Index Contact')
@section('sub-title' , 'index Contact')


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
                    <th>Full Name</th>
                    <th> Mobile</th>
                    <th> Email</th>
                    <th> Message</th>

                    <th>Setting</th>
                    


                  </tr>
                </thead>
                <tbody>

             
               
                    @forelse ($contacts as $contact )
                        
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->message}}</td>

                        <td>

                            <div class="btn-group">
                                <button type="button" onclick="performDestroy({{$contact->id  }} , this)" class="btn btn-danger">Delete</button>
                              </div>


                        </td>

                      </tr>
                    @empty
                        <tr>
                            <td colspan="7" > No Defiend Contacts  </td>
                        </tr>
                    @endforelse
             
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
     
          </div>
          <!-- /.card -->
          {{ $contacts->links() }}
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
          confirmDestroy('/cms/admin/contacts/' + id , reference) ;
        }
    </script>
@endsection
