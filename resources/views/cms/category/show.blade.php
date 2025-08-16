@extends('cms.parent')

@section('title', 'Show Category')
@section('main-title', 'Category Details')
@section('sub-title', 'Category Details')

@section('styles')
    <style>
        .card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: none;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            padding: 1.5rem;
            border-bottom: none;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .card-body {
            padding: 2.5rem;
        }

        .form-group label {
            font-weight: 600;
            color: #555;
            margin-bottom: 0.5rem;
        }

        .form-control[disabled] {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            cursor: not-allowed;
            color: #495057;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            box-shadow: inset 0 1px 2px rgba(0,0,0,.075);
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #5a6268;
        }

        .input-group-text {
            background-color: #e9ecef;
            border-right: none;
        }
    </style>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-eye"></i> Category Information
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="name">Category Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                        </div>
                                        <input type="text" class="form-control" disabled id="name" name="name"
                                            value="{{ $categories->name }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="status">Status</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
                                        </div>
                                        <input type="text" class="form-control" disabled id="status" name="status"
                                            value="{{ ucfirst($categories->status) }}">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="description">Description</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-info-circle"></i></span>
                                        </div>
                                        <input type="text" class="form-control" disabled id="description" name="description"
                                            value="{{ $categories->description ?? '-' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <a href="{{ route('categories.index') }}" class="btn btn-back">
                                <i class="fas fa-arrow-left"></i> Go to Index
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
