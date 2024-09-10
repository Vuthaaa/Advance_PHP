@section('category', 'active')
@extends('master.layout')


@section('content')

<style>
/* Overall Page */
body {
    background-color: #f8f9fa;
    margin: 0;
    font-family: Arial, sans-serif;
}

.row {
    margin-bottom: 20px;
}

/* Button Styles */
.btn-outline-primary {
    border-color: #007bff;
    color: #007bff;
    transition: all 0.3s ease;
}

.btn-outline-primary:hover {
    background-color: #007bff;
    color: #fff;
}

.btn-outline-danger {
    border-color: #dc3545;
    color: #dc3545;
    transition: all 0.3s ease;
}

.btn-outline-danger:hover {
    background-color: #dc3545;
    color: #fff;
}

.btn-sm.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    transition: background-color 0.3s ease, transform 0.3s ease;
    width: 100px;
}

.btn-sm.btn-primary:hover {
    background-color: #0056b3;
    transform: scale(1.05);
}

.btn-sm.btn-primary i {
    font-size: 1.2rem;
}

.btn-sm.btn-primary span {
    font-size: 0.9rem;
}



/* Table Styles */
.table {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.table th, .table td {
    vertical-align: middle;
    padding: 12px 15px;
    text-align: left;
}

.table thead th {
    background-color: #007bff;
    color: #fff;
    font-weight: bold;
}

.table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

.table tbody tr:hover {
    background-color: #e9ecef;
}

/* Responsive Table */
@media (max-width: 767px) {
    .table thead {
        display: none;
    }

    .table, .table tbody, .table tr, .table td {
        display: block;
        width: 100%;
    }

    .table tr {
        margin-bottom: 15px;
    }

    .table td {
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    .table td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 45%;
        padding-left: 10px;
        font-weight: bold;
        white-space: nowrap;
        text-transform: uppercase;
    }
}

/* Add button alignment */
.text-end {
    text-align: end;
}

/* Image Placeholder */
.table img {
    width: 100px;
    height: auto;
    object-fit: cover;
    border-radius: 4px;
}

/* Heading Styles */
h2 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
}

</style>

    <div class="row justify-content-between pt-3 pb-3">
        <div class="col-4">
            <h2>Category Page</h2>
        </div>
        
        <div class="col-2 text-end">
            <a href="{{url('/category/add')}}" type="button" class="btn btn-sm btn-primary">
                <i class="bi bi-cloud-plus"></i>
                Add
            </a>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">note</th>
            <th scope="col" class="text-center" width="200px">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <th scope="row">
                    {{ $categories->perPage() * ($categories->currentPage() - 1) + $loop->iteration }}
                </th>
                <td>{{ $category->name }}</td>
                <td>
                    <img height="50px" src="{{asset($category->image)}}">
                </td>
                <td>{{ $category->note }}</td>
                <td class="text-center">
                        <a href="{{route('category.edit' , $category->id)}}" type="button" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-pencil"></i>
                            Edit
                        </a>

                    <a href="{{route('category.show' , $category->id)}}" type="button" class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection