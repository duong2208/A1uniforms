{{--Hoang Thi Thuy Duong--}}
@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Are you sure to delete this Customer?</h1>
        </div>

        @include('A1uniform.customer.customerDetails')
        <form action="{{route('A1uniform.destroyCustomer', ['cus_id' => $customer->cus_id])}}" method="post">
            @csrf
            <input type="hidden" name="cus_id" value="{{$customer->cus_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('A1uniform.customer_manager')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
