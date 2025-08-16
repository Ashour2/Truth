@extends('cms.parent')

@section('title', 'Show City')
@section('main-title', 'Show City')
@section('sub-title', 'Show City')


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
                            <h3 class="card-title">Add New City</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">City Name</label>
                                    <input type="text" class="form-control" disabled id="name" name="name"
                                        value="{{ $cities->name }}" placeholder="Name of City">
                                </div>
                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input type="text" class="form-control" disabled id="street" name="street"
                                        value="{{ $cities->street }}" placeholder="street of City">
                                </div>

                                    <div class="form-group">
                                        <label for="country_id">Country</label>
                                        <input type="text" class="form-control" disabled id="country_id"
                                            name="country_id" value="{{ $cities->country->name ?? '' }}"{{-- be carefull --}}

                                            placeholder="Country">
                                    </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">

                                <a href="{{ route('cities.index') }}" type="submit" class="btn btn-info">Go Back</a>

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
