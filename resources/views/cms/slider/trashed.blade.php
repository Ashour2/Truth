@extends('cms.parent')

@section('title' , 'Index Country')
@section('main-title' , 'Index Country')
@section('sub-title' , 'index country')


@section('styles')

@endsection


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <a href="{{ route('countries.index') }}" type="submit" class="btn btn-info">Got to Index</a>

                <a href="{{ route('countries-forceDeleteAll') }}" type="submit" class="btn btn-danger">Delete ALL</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Country Name</th>
                    <th>Country Code</th>
                    <th>Setting</th>

                  </tr>
                </thead>
                <tbody>

             
               
                    @forelse ($countries as $country )
                        
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{$country->country_name}}</td>
                        <td>{{$country->code}}</td>

                        <td>

                            <div class="btn-group">
                                <a href="{{ route('countries-restore' , $country->id  ) }}" type="button" class="btn btn-info">Restore</a>
                                {{--  <button type="button" onclick="performDestroy({{$country->id  }} , this)" class="btn btn-danger">Delete</button>  --}}
                                <a href="{{ route('countries-forceDelete' , $country->id  ) }}" type="button" class="btn btn-danger">Delete</a>
                              </div>


                        </td>

                      </tr>
                    @empty
                        <tr>
                            <td colspan="7" > No Defiend Countries  </td>
                        </tr>
                    @endforelse
             
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
     
          </div>
          <!-- /.card -->
          {{--  {{ $countries->links() }}  --}}
          <!-- /.card -->
          // reference
        </div>
     
      </div>
    
  
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('scripts')
    <script>
        function performDestroy(id , reference){
          confirmDestroy('/cms/admin/countries/' + id , reference) ;
        }
    </script>
@endsection
