@extends('cms.parent')

@section('title', 'Countries')
@section('main-title', 'Countries')
@section('sub-title', 'Manage Countries')

@section('styles')
<style>
    .card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }
    .table thead th {
        background-color: #007bff;
        color: white;
        text-align: center;
    }
    .table tbody tr:hover {
        background-color: #f8f9fa;
        transition: background-color 0.3s ease;
    }
    .action-btns .btn {
        margin: 2px;
        border-radius: 8px;
    }
    .modal-header {
        background: linear-gradient(135deg, #007bff, #00c6ff);
        color: white;
    }
    .modal-footer {
        background-color: #f8f9fa;
    }
</style>
@endsection

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title m-0"><i class="fas fa-globe"></i> Countries List</h3>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus-circle"></i> Add New Country
        </button>
    </div>

    <div class="card-body">
        <table class="table table-bordered text-center align-middle" id="countries-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Country Name</th>
                    <th>Code</th>
                    <th>Settings</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $country)
                <tr>
                    <td>{{ $country->id ?? '' }}</td>
                    <td>{{ $country->name ?? '' }}</td>
                    <td><span class="badge bg-primary p-2">{{ $country->code ?? '' }}</span></td>
                    <td class="action-btns">
                        <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('countries.show', $country->id) }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <button onclick="performDestroy({{ $country->id }},this)" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-plus"></i> Add New Country</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="modal-alert"></div>
                <form id="add-country-form">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Country Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Country Name">
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Enter Country Code">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function performDestroy(id, reference) {
    confirmDestroy('/cms/admin/countries/' + id, reference);
}

$(document).ready(function(){
    $("#add-country-form").on("submit", function(e){
        e.preventDefault();

        let formData = {
            name: $("#name").val(),
            code: $("#code").val(),
            _token: $("input[name=_token]").val()
        };

        $.ajax({
            url: "{{ route('countries.store') }}",
            method: "POST",
            data: formData,
            success: function(response){
                $("#modal-alert").html('<div class="alert alert-success">تمت الإضافة بنجاح، سيتم الرجوع تلقائيًا...</div>');

                $("#countries-table tbody").append(`
                    <tr>
                        <td>${response.id}</td>
                        <td>${response.name}</td>
                        <td><span class="badge bg-primary p-2">${response.code}</span></td>
                        <td class="action-btns">
                            <a href="/cms/admin/countries/${response.id}/edit" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <a href="/cms/admin/countries/${response.id}" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i> View</a>
                            <button onclick="performDestroy(${response.id},this)" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
                        </td>
                    </tr>
                `);

                $("#name").val('');
                $("#code").val('');

                setTimeout(function(){
                    $("#exampleModal").modal('hide');
                    history.back();
                }, 2000);
            },
            error: function(){
                $("#modal-alert").html('<div class="alert alert-danger">فشل في الإضافة، تحقق من البيانات</div>');
            }
        });
    });
});
</script>
@endsection
