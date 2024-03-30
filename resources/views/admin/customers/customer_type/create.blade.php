@extends('admin.master');
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Customer</h4>
                <form action="{{ route('customertypes.store') }}" method="post" class="form-inline">
                    @csrf
                    <div class="mb-3 row">
                        <div class="col-md-12">
                            <label for="customertype_name" class="form-label">Customer Type</label>
                            <input id="customertype_name" class="form-control" name="customertype_name" type="text">
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Save">
                    <a href="{{ route('customertypes.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
