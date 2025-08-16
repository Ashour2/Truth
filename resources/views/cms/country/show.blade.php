@extends('cms.parent')

@section('title', 'Show Country')
@section('main-title', 'Show Country')
@section('sub-title', 'Country Details')

@section('styles')
<style>
    .country-card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .country-header {
        background: linear-gradient(135deg, #007bff, #00c6ff);
        color: white;
        padding: 20px;
        font-size: 1.4rem;
        font-weight: bold;
    }
    .city-badge {
        margin: 5px;
        font-size: 0.9rem;
    }
</style>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card country-card">
                <div class="country-header">
                    <i class="fas fa-flag"></i> {{ $countries->name }}
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="text-muted"><i class="fas fa-id-card"></i> Country ID</h6>
                        <p class="h5">{{ $countries->id }}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted"><i class="fas fa-flag-usa"></i> Country Name</h6>
                        <p class="h5">{{ $countries->name }}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted"><i class="fas fa-code"></i> Country Code</h6>
                        <span class="badge bg-primary p-2">{{ $countries->code }}</span>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-muted"><i class="fas fa-city"></i> Cities</h6>
                        @if($countries->cities->count() > 0)
                            @foreach ($countries->cities as $city)
                                <span class="badge bg-info city-badge">{{ $city->name }}</span>
                            @endforeach
                        @else
                            <p class="text-muted">No cities available for this country.</p>
                        @endif
                    </div>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('countries.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@endsection
