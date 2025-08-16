@extends('cms.parent')

@section('title', 'Categories')
@section('main-title', 'Categories')
@section('sub-title', 'Manage Categories')

@section('styles')
<style>
    .card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .table thead th {
        background-color: #007bff;
        color: white;
        text-align: center;
    }

    .table tbody tr:hover {
        background-color: #f1f5f9;
        transition: background-color 0.3s ease;
    }

    .action-btns .btn {
        margin: 2px;
        border-radius: 8px;
    }

    .badge-status {
        font-size: 0.9rem;
        padding: 0.5em 0.8em;
    }
</style>
@endsection

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title m-0"><i class="fas fa-globe"></i> Categories List</h3>
        <a href="{{ route('categories.create') }}" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Add New Category
        </a>
    </div>

    <div class="card-body">
        <table class="table table-bordered text-center align-middle" id="categories-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $Category)
                <tr>
                    <td>{{ $Category->id }}</td>
                    <td>{{ $Category->name }}</td>
                    <td>
                        <span class="badge badge-status {{ $Category->status === 'active' ? 'bg-success' : 'bg-secondary' }}">
                            {{ ucfirst($Category->status) }}
                        </span>
                    </td>
                    <td>{{ $Category->description ?? '-' }}</td>
                    <td class="action-btns">
                        <a href="{{ route('categories.edit', $Category->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('categories.show', $Category->id) }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <button onclick="performDestroy({{ $Category->id }}, this)" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
function performDestroy(id, reference) {
    confirmDestroy('/cms/admin/categories/' + id, reference);
}
</script>
@endsection
