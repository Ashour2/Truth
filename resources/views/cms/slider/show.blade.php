@extends('cms.parent')

@section('title' , 'Show Country')
@section('main-title' , 'Show Country')
@section('sub-title' , 'Show country')


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
              <h3 class="card-title">Add New Country</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
              <div class="row">

                <div class="form-group col-md-4">
                  <label for="country_name">Country Name</label>
                  <input type="text" class="form-control" disabled id="country_name" name="country_name"
                  value="{{ $countries->country_name }}" placeholder="Enter Name of Country">
                </div>
                <div class="form-group col-md-4 ">
                  <label for="code">Code</label>
                  <input type="text" class="form-control" disabled id="code" name="code" 
                  value="{{ $countries->code }}" placeholder="Enter Code of Country">
                </div>
             

                 </div>

               <div class="row">
              <div class="form-group col-md-12">
                {{--  <label>Tags:</label>  --}}
                @foreach ($countries->cities as $city)
                <input type="text" value="{{$city->name  ?? null}}"
                class="form-control-solid"  disabled />
                <span> </span>
                @endforeach
                </div>


    </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                
                <a href="{{ route('countries.index') }}" type="submit" class="btn btn-info">Go to Index</a>

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