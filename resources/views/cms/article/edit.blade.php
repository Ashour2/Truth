@extends('cms.parent')

@section('title', 'Edit Article')
@section('main-title', 'Edit Article')
@section('sub-title', 'Edit Article')

@section('styles')
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Article</h3>
            </div>

            <form>
              <div class="card-body">
                <!-- Category -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control select2" id="category_id" name="category_id" style="width: 100%;">
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}" @if($category->id == $articles->category_id) selected @endif>
                            {{ $category->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <!-- Author -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Author</label>
                      <select class="form-control select2" id="author_id" name="author_id" style="width: 100%;">
                        @foreach ($authors as $author)
                          <option value="{{ $author->id }}" @if($author->id == $articles->author_id) selected @endif>
                            {{ $author->User->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <!-- Title & Image -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="title">Article Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ $articles->title }}" placeholder="Enter Article Title">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="image">Choose Image</label>
                      <input type="file" class="form-control" id="image" name="image">
                    </div>
                  </div>
                </div>

                <!-- Short Description -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="short_description">Short Description</label>
                      <input type="text" class="form-control" id="short_description" name="short_description" value="{{ $articles->short_description }}">
                    </div>
                  </div>
                </div>

                <!-- Full Description -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="full_description">Full Description</label>
                      <textarea class="form-control" id="full_description" name="full_description" rows="4">{{ $articles->full_description }}</textarea>
                    </div>
                  </div>
                </div>

              </div>

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{ $articles->id }})" class="btn btn-primary">Update</button>
                <a href="{{ route('articles.index') }}" class="btn btn-info">Go to Index</a>
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
function performUpdate(id){
    let formData = new FormData();
    formData.append('title', document.getElementById('title').value);
    formData.append('image', document.getElementById('image').files[0]);
    formData.append('short_description', document.getElementById('short_description').value);
    formData.append('full_description', document.getElementById('full_description').value);
    formData.append('category_id', document.getElementById('category_id').value);
    formData.append('author_id', document.getElementById('author_id').value);

    storeRoute('/cms/admin/articles-update/' + id, formData);
}
</script>
@endsection
