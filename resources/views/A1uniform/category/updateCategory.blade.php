@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Update category</h1>
        </div>


        @include('partials.errors')

        <form action="{{route('A1uniform.updateCategory', ['cat_id' => old('cat_id')?? $category->cat_id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('A1uniform.category.categoryFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
