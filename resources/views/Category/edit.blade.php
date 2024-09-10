@section('category', 'active')
@extends('master.layout')


@section('content')
    <div class="row justify-content-between pt-3 pb-3">
        <div class="col-12 text-center">
            <h4>Edit Category</h4>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <form method="post" action="{{route('category.update', $category->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Old Image</label></br>
                        <img width="60px" src="{{asset($category->image)}}"> </br>
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="note" class="form-label">Note</label>
                        <textarea class="form-control" id="note" name="note" style="height: 100px">{{ $category->note }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
