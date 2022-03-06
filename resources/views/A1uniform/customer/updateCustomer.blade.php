@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Update An Existing Customer</h1>
        </div>


        @include('partials.errors')

        <form action="{{route('A1uniform.updateCustomer', ['cus_id' => old('cus_id')?? $customer->cus_id])}}" method="post">
            @csrf
            @include('A1uniform.customer.customerFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
