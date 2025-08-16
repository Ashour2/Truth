@extends('cms.parent')

@section('title', 'Create City')
@section('main-title', 'Create City')
@section('sub-title', 'create City')

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
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Country Name</label>
                                            <select class="form-control select2" id="country_id" name="country_id"
                                                style="width: 100%;">
                                                @if ($countries->count() != 0)
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option disabled selected style="color: red; font-weight: bold;">
                                                        ⚠ لا توجد أي دولة
                                                    </option>

                                                @endif
                                            </select>

                                            @if ($countries->count() == 0)
                                                <div class="mt-2">
                                                    <a href="{{ route('countries.create') }}" class="btn btn-primary">
                                                        <i class="fas fa-plus"></i> إضافة دولة جديدة
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">City Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter Name of City">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="street">Street</label>
                                            <input type="text" class="form-control" id="street" name="street"
                                                placeholder="Enter Street of City">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                                    <a href="{{ route('cities.index') }}" class="btn btn-info">Go to Index</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('js/crud.js') }}"></script>

    <script>
        function performStore() {
            let formData = new FormData();
            formData.append('name', document.getElementById('name').value);
            formData.append('street', document.getElementById('street').value);
            formData.append('country_id', document.getElementById('country_id').value);

            store('/cms/admin/cities', formData);
        }
    </script>
@endsection
