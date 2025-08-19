@extends('cms.parent')

@section('title', 'Index Article')
@section('main-title', 'Index Article')
@section('sub-title', 'index article')


@section('styles')

@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{--  <a href="{{ route('createArticle' , $id) }}" type="submit" class="btn btn-info">Add New Article</a>  --}}
                            {{--  <a href="{{ route('countries-trashed') }}" type="submit" class="btn btn-danger">Trashed</a>
                <a href="{{ route('truncate') }}" type="submit" class="btn btn-danger">Delete All</a>  --}}

                {{-- search --}}
                            <div>
                                <form action="{{ route('articles.index') }}" method="GET" class="ml-auto">
                                    <div class="input-group">
                                        <input type="text" name="title"
                                            @if (request()->title) value={{ request()->title }} @endif
                                            class="form-control" placeholder="Search about Title">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div>
                                <form action="{{ route('articles.index') }}" method="GET" class="ml-auto">
                                    <div class="input-group">
                                        <input type="text" name="short_description"
                                            @if (request()->short_description) value={{ request()->short_description }} @endif
                                            class="form-control" placeholder="Search about short_description">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div style="color: red">
                                <a href="{{ route('articles.index') }}" type="button" class="btn btn-danger">
                                    <i class="fas fa-stop">..</i>Stop search
                                </a>
                            </div>
                            {{-- search --}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th> Title</th>
                                        <th>Image</th>
                                        {{--  <th>Country Name</th>  --}}

                                        <th>Setting</th>

                                    </tr>
                                </thead>
                                <tbody>



                                    @forelse ($articles as $article)
                                        <tr>
                                            <td>{{ $article->id }}</td>
                                            <td>{{ $article->title }}</td>
                                            <td>
                                                {{-- class="img-circle img-bordered-sm" --}}
                                                <img src="{{ asset('storage/images/article/' . $article->image) }}"
                                                    width="50" height="50" alt="User Image">
                                            </td>
                                            {{--  <td><span class="badge bg-success"> {{$article->country->country_name}} </span></td>  --}}

                                            <td>

                                                <div class="btn-group">
                                                    {{-- {{ route('articles.edit' , $article->id  ) }} --}}
                                                    <a href="{{ route('articles.edit', $article->id) }}" type="button"
                                                        class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                    <button type="button"
                                                        onclick="performDestroy({{ $article->id }} , this)"
                                                        class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                                                    <a href="{{ route('articles.show', $article->id) }}" type="button"
                                                        class="btn btn-success"><i class="fas fa-eye"></i></a>
                                                </div>


                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7"> No Defiend Articles </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                    {{ $articles->links() }}
                    <!-- /.card -->
                </div>

            </div>


            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection


@section('scripts')
    <script>
        function performDestroy(id, reference) {
            confirmDestroy('/cms/admin/articles/' + id, reference);
        }
    </script>
@endsection
