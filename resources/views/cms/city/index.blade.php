@extends('cms.parent')

@section('title', 'city')
@section('main-title', 'city')
@section('sub-title', 'city')

@section('styles')
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>street</th>
                        <th>country</th>
                        <th>setting</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($cities->count() > 0)
                        @foreach ($cities as $city)
                            <tr>
                                <td>{{ $city->id ?? '' }}</td>
                                <td>{{ $city->name ?? '' }}</td>
                                <td>{{ $city->street ?? '' }}</td>
                                <td><span class="badge bg-success">{{ $city->country->name ?? '' }}</span></td>
                                <td>
                                    <a href="{{ route('cities.edit', $city->id) }}" type="button" class="btn btn-info">
                                        <i class="fas fa-edit">تعديل</i>
                                    </a>
                                    <a href="{{ route('cities.show', $city->id) }}" type="button" class="btn btn-info">
                                        <i class="fas fa-edit">عرض</i>
                                    </a>
                                    <button onclick="performDestroy({{ $city->id }}, this)" type="button"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash-alt">حذف</i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                <a href="{{ route('cities.create') }}" class="btn btn-primary mb-3">
                                <i class="fas fa-plus"></i> إضافة مدينة جديدة
                            </a>لا يوجد أي مدينة بعد هل تريد انشاء مدينة جديدة ؟؟
                            </td>


                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function performDestroy(id, reference) {
            confirmDestroy('/cms/admin/cities/' + id, reference);
        }
    </script>
@endsection
