@section('category', 'active')
@extends('master.layout')


@section('content')
    <div class="row justify-content-between pt-3 pb-3">
        <div class="col-12 text-center">
            <h4>Delete Category</h4>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <form method="post" action="{{route('category.delete', $category->id)}}">
                    @csrf
                    @method('DELETE')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="note" class="form-label">Note</label>
                        <textarea class="form-control" id="note" name="note" style="height: 100px"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
