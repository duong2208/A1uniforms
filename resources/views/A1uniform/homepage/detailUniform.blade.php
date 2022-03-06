@extends('masters.homepageMaster')
@section('main')

<div class="container">
    <div class="card">
        <div class="container-fluid">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active"><img src="{{asset('storage/images/uniform/' .$uniform->uni_image)}}" alt=""> </div>
                    </div>
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{ $uniform->uni_name }}</h3>
                    <h5 class="description">Description: <p class="product-description"> {{ $uniform->uni_description}}</p></h5>
                    <h4 class="price">current price: <span>{{ $uniform->uni_price}}$</span></h4>
                    <h5 class="sizes">sizes:
                        <span class="size" data-toggle="tooltip" title="size">{{$uniform->uni_size }}</span>
                    </h5>
                    <h5 class="material">Material: <span>{{$uniform->uni_material }}</span> </h5>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="container">--}}
{{--    <div class="col-lg-8 border p-3 main-section bg-white">--}}
{{--        <div class="row hedding m-0 pl-3 pt-0 pb-3">--}}
{{--            Product Detail--}}
{{--        </div>--}}
{{--        <div class="row m-0">--}}
{{--            <div class="col-lg-4 left-side-product-box pb-3">--}}
{{--                <img src="{{asset('storage/images/uniform/' .$uniform->uni_image)}}" class="border p-3">--}}
{{--            </div>--}}
{{--            <div class="col-lg-8">--}}
{{--                <div class="right-side-pro-detail border p-3 m-0">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <p class="m-0 p-0">{{ $uniform->uni_name }}</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <p class="m-0 p-0 price-pro">{{$uniform->uni_size }}</p>--}}
{{--                            <hr class="p-0 m-0">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12 pt-2">--}}
{{--                            <h5>Product Detail</h5>--}}
{{--                            <span>{{ $uniform->uni_description}}</span>--}}
{{--                            <hr class="m-0 pt-2 mt-2">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <p class="material-section"><strong>Material: </strong><span>{{$uniform->uni_material }}</span></p>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <h6>Quantity :</h6>--}}
{{--                            <input type="number" class="form-control text-center w-100" value="1">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12 mt-3">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 pb-2">--}}
{{--                                    <a href="#" class="btn btn-danger w-100">Add To Cart</a>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <a href="#" class="btn btn-success w-100">Shop Now</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}

@endsection
