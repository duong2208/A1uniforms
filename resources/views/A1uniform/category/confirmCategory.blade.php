@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        </div>
        @include('A1uniform.category.categoryDetails')

        <form action="{{route('A1uniform.destroyCategory', ['cat_id' =>$category->cat_id])}}" method="post">
            @csrf
            <input type="hidden" name="cat_id" value="{{$category->cat_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('A1uniform.category_manager')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
