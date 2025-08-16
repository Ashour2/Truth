@extends('cms.parent')

@section('title', 'Create Country')
@section('main-title', 'Create Country')
@section('sub-title', 'Create Country')


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
                            <h3 class="card-title">دولة جدبدة</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">

                                <div class="row">



                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="name">الاسم الدولة(مطلوب)</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="ادخل الاسم لدولة">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="code">الكود الدولة(مطلوب)</label>
                                            <input type="text" class="form-control" id="code" name="code"
                                                placeholder="ادخل كود الاول">
                                        </div>
                                    </div>
                                    </div>
                                    </div>


                            <!-- /.card-body -->

                            <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                                {{-- {{ route('admins.index')}} --}}
                                <a href="{{ route('countries.index') }}" type="submit" class="btn btn-info">عرض حميع الدول</a>

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

<script src="{{ asset('js/crud.js') }}"></script>



<script>
    function performStore(){
        let formData = new FormData();
        formData.append('name',document.getElementById('name').value);
        formData.append('code',document.getElementById('code').value);

        store('/cms/admin/countries' , formData);

    }

</script>
@endsection
