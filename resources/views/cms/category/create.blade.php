@extends('cms.parent')

@section('title', 'Create Category')
@section('main-title', 'Create Category')
@section('sub-title', 'Add New Category')

@section('styles')
<style>
    .card { border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); }
    .form-label { font-weight: 500; }
    .alert-message { margin-bottom: 15px; }
</style>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add New Category</h3>
                    </div>

                    <div class="card-body">

                        <!-- Alert Messages -->
                        <div id="alert-message"></div>

                        <form id="category-form">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="status" class="form-label">Status</label>
                                    <select id="status" name="status" class="form-select">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter category description" style="resize:none;"></textarea>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-start gap-2">
                                <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                                <a href="{{ route('categories.index') }}" class="btn btn-info">Go to Index</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
function performStore(){
    let formData = new FormData(document.getElementById('category-form'));

    axios.post('/cms/admin/categories', formData)
        .then(function(response){
            // رسالة نجاح داخل الصفحة
            let alertBox = `<div class="alert alert-success alert-dismissible fade show alert-message" role="alert">
                                Category added successfully!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
            document.getElementById('alert-message').innerHTML = alertBox;

            // إعادة تعيين الفورم بعد ثانيتين
            setTimeout(() => {
                document.getElementById('category-form').reset();
                document.getElementById('alert-message').innerHTML = '';
            }, 2000);

        })
        .catch(function(error){
            let errors = error.response?.data?.errors;
            let errorMsg = 'Failed to add category, check inputs!';
            if(errors){
                errorMsg = Object.values(errors).flat().join(' | ');
            }

            let alertBox = `<div class="alert alert-danger alert-dismissible fade show alert-message" role="alert">
                                ${errorMsg}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
            document.getElementById('alert-message').innerHTML = alertBox;
        });
}
</script>
@endsection
