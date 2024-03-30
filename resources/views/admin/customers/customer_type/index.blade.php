@extends('admin.master');
@section('content')

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Customer Type Table</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Customer Type lists</h6>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <a href="{{ route('customertypes.create') }}" class="btn btn-primary">New
                            Customer Type</a>
                    </div>
                    <div class="input-group" style="width: 300px;">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <span class="mx-1"></span>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Search</button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customerTypes as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->customertype_name }}</td>
                                    <td>
                                        <form action="{{ route('customertypes.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('customertypes.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this customer type?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
