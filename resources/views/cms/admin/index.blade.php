@extends('cms.parent')

@section('title', 'Index Admin')
@section('main-title', 'Index Admin')
@section('sub-title', 'index Admin')


@section('styles')

@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            @can('Create Admin')
                                <a href="{{ route('admins.create') }}" type="submit" class="btn btn-info">Add New Admin</a>
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
                                        <th> Gender</th>
                                        <th> Status</th>
                                        <th> City Name</th>

                                        <th>Setting</th>

                                    </tr>
                                </thead>

                                <tbody>



                                    @forelse ($admins as $admin)
                                        @if ($admin->user)
                                            <tr>
                                                {{-- <td>{{ $admin->id }}</td> --}}
                                                <td>
                                                    <a href="{{ route('admins.show', $admin->id) }}">
                                                        @if ($admin->user)
                                                            <img class="img-circle img-bordered-sm"
                                                                src="{{ asset('storage/images/admin/' . $admin->user->image) }}"
                                                                width="50" height="50" alt="User Image">
                                                        @else
                                                            {{-- Display a placeholder image if no user is associated --}}
                                                            <img class="img-circle img-bordered-sm"
                                                                src="{{ asset('cms/dist/img/default-user.jpg') }}"
                                                                width="50" height="50" alt="Placeholder Image">
                                                        @endif
                                                    </a>
                                                </td>
                                                <td>{{ $admin->user->first_name ?? '' }}</td>
                                                <td>{{ $admin->user->last_name ?? '' }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>{{ $admin->user->address ?? 'null' }}</td>

                                                {{-- <td><span class="badge bg-success"> {{$admin->user->gender  ?? ""}} </span></td> --}}
                                                <td>
                                                    @if ($admin->user->gender == 'male')
                                                        <span class="badge bg-info"> {{ $admin->user->gender ?? '' }}
                                                        </span>
                                                    @else
                                                        <span class="badge bg-pink"> {{ $admin->user->gender ?? '' }}
                                                        </span>
                                                    @endif
                                                </td>

                                                {{-- <td><span class="badge bg-success"> {{$admin->user->status  ?? ""}} </span></td> --}}
                                                <td>
                                                    @if ($admin->user->status == 'active')
                                                        <span class="badge bg-success"> {{ $admin->user->status ?? '' }}
                                                        </span>
                                                    @else
                                                        <span class="badge bg-danger"> {{ $admin->user->status ?? '' }}
                                                        </span>
                                                    @endif
                                                </td>
                                                <td><span class="badge bg-yellow"> {{ $admin->user->city->name ?? '' }}
                                                    </span>
                                                </td>

                                                {{-- <td>


                                                    <div class="btn-group">
                                                        @can('Update Admin')
                                                            <a href="{{ route('admins.edit', $admin->id) }}" type="button"
                                                                class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                        @endcan
                                                        @can('Delete Admin')
                                                            <button type="button"
                                                                onclick="performDestroy({{ $admin->id }} , this)"
                                                                class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                        @endcan
                                                        @can('Show Admin')
                                                            <a href="{{ route('admins.show', $admin->id) }}" type="button"
                                                                class="btn btn-success"><i class="fas fa-eye"></i></a>
                                                        @endcan
                                                    </div>


                                                </td> --}}
                                                <td class="action-btns">
                                                    @can('Edit Admin')
                                                    <a href="{{ route('admins.edit', $admin->id) }}"
                                                        class="btn btn-info btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    @endcan
                                                    <a href="{{ route('admins.show', $admin->id) }}"
                                                        class="btn btn-secondary btn-sm">
                                                        <i class="fas fa-eye"></i> View
                                                    </a>
                                                    @can('Delete Admin')
                                                    <button onclick="performDestroy({{ $admin->id }},this)"
                                                        class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i> Delete
                                                    </button>
                                                    @endcan
                                                </td>


                                            </tr>
                                        @endif
                                    @empty
                                        <tr>
                                            <td colspan="7"> No Defiend Admin </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                    {{-- {{ $admins->links() }} --}}
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
            confirmDestroy('/cms/admin/admins/' + id, reference);
        }
    </script>
@endsection
