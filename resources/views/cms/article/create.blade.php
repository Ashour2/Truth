@extends('cms.parent')

@section('title', 'Create Article')
@section('main-title', 'Create Article')
@section('sub-title', 'Create Article')

@section('styles')
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Article</h3>
                        </div>

                        <!-- form start -->
                    <form id="articleForm">
    <div class="card-body">

        {{-- Row: Category & Author --}}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control select2" id="category_id" name="category_id" style="width: 100%;">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="author_id">Author</label>
                    <select class="form-control select2" id="author_id" name="author_id" style="width: 100%;">
                        <option value="">Select Author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->user->first_name ?? "null"}}-{{ $author->user->last_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        {{-- Row: Title & Image --}}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Article Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Article Title">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Choose Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
            </div>
        </div>

        {{-- Row: Short Description --}}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <input type="text" class="form-control" id="short_description" name="short_description" placeholder="Enter Short Description">
                </div>
            </div>
        </div>

        {{-- Row: Full Description --}}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="full_description">Full Description</label>
                    <textarea class="form-control" id="full_description" name="full_description" rows="5" placeholder="Enter Full Description"></textarea>
                </div>
            </div>
        </div>

    </div>

    {{-- Card Footer: Buttons --}}
    <div class="card-footer d-flex justify-content-between">
        <button type="button" onclick="performStore()" class="btn btn-success">
            <i class="fas fa-save"></i> Store
        </button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Index
        </a>
    </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function performStore() {
            let formData = new FormData();
            formData.append('title', document.getElementById('title').value);
            formData.append('image', document.getElementById('image').files[0]);
            formData.append('short_description', document.getElementById('short_description').value);
            formData.append('full_description', document.getElementById('full_description').value);
            formData.append('category_id', document.getElementById('category_id').value);
            formData.append('author_id', document.getElementById('author_id').value);

            store('/cms/admin/articles', formData);
        }
    </script>
@endsection
