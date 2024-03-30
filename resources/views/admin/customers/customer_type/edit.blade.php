@extends('admin.master');
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Customer</h4>
                <form action="{{ route('customertypes.update', $customerTypes->id) }}" method="post" class="form-inline">
                    @csrf
                    <div class="mb-3 row">
                        <div class="col-md-12">
                            <label for="customerTypeName" class="form-label">Customer Type</label>
                            <input id="customerTypeName" class="form-control" name="customertype_name" type="text" value="{{ $customerTypes->customertype_name }}">
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Update">
                    <a href="{{ route('customertypes.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
