@extends('backend.layouts.admin')

@section('title', 'Level Settings')

@push('styles')
<style>
    .main-content {
        background-color: #101820;
        background-image:
            linear-gradient(rgba(0, 255, 247, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 255, 247, 0.05) 1px, transparent 1px);
        background-size: 40px 40px;
        position: relative;
    }
    .level-card {
        background-color: #181f2acc;
        border: 1px solid #00fff733;
        border-radius: 8px;
        padding: 25px;
        backdrop-filter: blur(5px);
        box-shadow: 0 4px 12px #00000033;
        color: #fff;
        position: relative;
    }
    .level-card::before, .level-card::after {
        content: '';
        position: absolute;
        width: 25px;
        height: 25px;
        border-color: #00fff7;
        border-style: solid;
    }
    .level-card::before {
        top: -1px;
        left: -1px;
        border-width: 2px 0 0 2px;
    }
    .level-card::after {
        bottom: -1px;
        right: -1px;
        border-width: 0 2px 2px 0;
    }
    .form-control {
        background-color: #101820;
        border: 1px solid #00fff7;
        color: #fff;
    }
    .form-control:focus {
        background-color: #101820;
        border-color: #00e0d5;
        box-shadow: 0 0 0 0.2rem rgba(0, 255, 247, 0.25);
        color: #fff;
    }
    .btn-update {
        background-color: #00fff7;
        border-color: #00fff7;
        color: #101820;
        font-weight: 600;
        padding: 8px 24px;
    }
    .btn-update:hover {
        background-color: #00e0d5;
        border-color: #00d0c5;
        color: #101820;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <p style="color:#00fff7;" class="mb-0">Dashboard / Earnings / Level Details</p>
            <h4 class="mt-2" style="color:#fff;">Level Details</h4>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="level-card">
                <h5 class="card-title mb-4" style="color:#fff;">Level Bonus Details</h5>
                <form>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @for ($i = 1; $i <= 21; $i++)
                            <div class="mb-3">
                                <label for="level{{ $i }}" class="form-label">Level{{ $i }}[%]</label>
                                <input type="text" class="form-control" id="level{{ $i }}">
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 