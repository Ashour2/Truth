@extends('cms.parent')

@section('title', 'Index author')
@section('main-title', 'Index author')
@section('sub-title', 'index author')


@section('styles')

@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            @can('Create author')
                                <a href="{{ route('authors.create') }}" type="submit" class="btn btn-info">Add New author</a>
                            @endcan
                            {{--  <a href="{{ route('countries-trashed') }}" type="submit" class="btn btn-danger">Trashed</a>
                <a href="{{ route('truncate') }}" type="submit" class="btn btn-danger">Delete All</a>  --}}

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        {{-- <th>ID</th> --}}
                                        <th>Image</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th> Email</th>
                                        <th> Address</th>
                                        <th> Articles</th>
                                        <th> Gender</th>
                                        <th> Status</th>
                                        <th> City Name</th>

                                        <th>Setting</th>

                                    </tr>
                                </thead>

                                <tbody>



                                    @forelse ($authors as $author)
                                        @if ($author->user)
                                            <tr>
                                                {{-- <td>{{ $author->id }}</td> --}}
                                                <td>
                                                    <a href="{{ route('authors.show', $author->id) }}">
                                                        @if ($author->user)
                                                            <img class="img-circle img-bordered-sm"
                                                                src="{{ asset('storage/images/author/' . $author->user->image) }}"
                                                                width="50" height="50" alt="User Image">
                                                        @else
                                                            {{-- Display a placeholder image if no user is associated --}}
                                                            <img class="img-circle img-bordered-sm"
                                                                src="{{ asset('cms/dist/img/default-user.jpg') }}"
                                                                width="50" height="50" alt="Placeholder Image">
                                                        @endif
                                                    </a>
                                                </td>
                                                <td>{{ $author->user->first_name ?? '' }}</td>
                                                <td>{{ $author->user->last_name ?? '' }}</td>
                                                <td>{{ $author->email }}</td>
                                                <td>{{ $author->user->address ?? 'null' }}</td>
                                                <td><a href="{{ route('indexArticle', ['id' => $author->id]) }}"
                                                        class="btn btn-info">({{ $author->articles_count }})
                                                        article/s</a> </td>
                                                {{-- <td><span class="badge bg-success"> {{$author->user->gender  ?? ""}} </span></td> --}}
                                                <td>
                                                    @if ($author->user->gender == 'male')
                                                        <span class="badge bg-info"> {{ $author->user->gender ?? '' }}
                                                        </span>
                                                    @else
                                                        <span class="badge bg-pink"> {{ $author->user->gender ?? '' }}
                                                        </span>
                                                    @endif
                                                </td>

                                                {{-- <td><span class="badge bg-success"> {{$author->user->status  ?? ""}} </span></td> --}}
                                                <td>
                                                    @if ($author->user->status == 'active')
                                                        <span class="badge bg-success"> {{ $author->user->status ?? '' }}
                                                        </span>
                                                    @else
                                                        <span class="badge bg-danger"> {{ $author->user->status ?? '' }}
                                                        </span>
                                                    @endif
                                                </td>
                                                <td><span class="badge bg-yellow"> {{ $author->user->city->name ?? '' }}
                                                    </span>
                                                </td>

                                                {{-- <td>


                                                    <div class="btn-group">
                                                        @can('Update author')
                                                            <a href="{{ route('authors.edit', $author->id) }}" type="button"
                                                                class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                        @endcan
                                                        @can('Delete author')
                                                            <button type="button"
                                                                onclick="performDestroy({{ $author->id }} , this)"
                                                                class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                        @endcan
                                                        @can('Show author')
                                                            <a href="{{ route('authors.show', $author->id) }}" type="button"
                                                                class="btn btn-success"><i class="fas fa-eye"></i></a>
                                                        @endcan
                                                    </div>


                                                </td> --}}
                                                <td class="action-btns">
                                                    <a href="{{ route('authors.edit', $author->id) }}"
                                                        class="btn btn-info btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="{{ route('authors.show', $author->id) }}"
                                                        class="btn btn-secondary btn-sm">
                                                        <i class="fas fa-eye"></i> View
                                                    </a>
                                                    <button onclick="performDestroy({{ $author->id }},this)"
                                                        class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i> Delete
                                                    </button>
                                                </td>


                                            </tr>
                                        @endif
                                    @empty
                                        <tr>
                                            <td colspan="7"> No Defiend author </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                    {{-- {{ $authors->links() }} --}}
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
            confirmDestroy('/cms/admin/authors/' + id, reference);
        }
    </script>
@endsection
