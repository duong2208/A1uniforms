@extends('masters.homepageMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Uniform</h1>
        </div>
        <div class="row">
        @foreach($resultSearch as $re)

{{--                <div class="col-sm-3">--}}
{{--                    <div class="single-item">--}}
{{--                        <div class="single-item-header">--}}
{{--                            <a--}}
{{--                                href="{{route('A1uniform.detailUniform', ['uni_id' => $re->uni_id])}}"--}}
{{--                            >--}}
{{--                                <img src="{{asset('storage/images/uniform/' .$re->uni_image)}}" alt=""--}}
{{--                                     style="max-width:200px; max-height: 250px" class="img-fluid">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="single-item-body">--}}
{{--                            <p class="single-item-title">{{$re->uni_name}}</p>--}}
{{--                            <p class="single-item-price" style="font-size: 18px"></p>--}}

{{--                        </div>--}}
{{--                        <div class="single-item-caption">--}}
{{--                            <a class="add-to-cart pull-left" href=""><i class="fa-solid fa-cart-plus"></i></a>--}}
{{--                            <a class="beta-btn primary"--}}
{{--                               href="{{route('A1uniform.detailUniform', ['uni_id' => $re->uni_id])}}"--}}
{{--                            >Detail--}}
{{--                            <i class="fa fa-chevron-right"></i></a>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-9">{{ $re->uni_name }}</div>--}}

{{--                <div class="col-sm-3">Image</div>--}}
{{--                <div class="col-sm-9"><img style="width: 100px; height:100px" src="{{asset('storage/images/uniform/' .$re->uni_image)}}" alt=""></div>--}}

                <head>
                    <style>
                        .card {
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                            max-width: 300px;
                            margin: auto;
                            text-align: center;
                            font-family: arial;
                        }

                        .price {
                            color: grey;
                            font-size: 22px;
                        }

                        .card button {
                            border: none;
                            outline: 0;
                            padding: 12px;
                            color: white;
                            background-color: #000;
                            text-align: center;
                            cursor: pointer;
                            width: 100%;
                            font-size: 18px;
                        }

                        .card button:hover {
                            opacity: 0.7;
                        }
                    </style>
                </head>
                <body>

                <h2 style="text-align:center">Product Card</h2>

                <div class="card">
                    <img src="{{asset('storage/images/uniform/' .$re->uni_image)}}" alt="Denim Jeans" style="width:100%">
                    <h5>{{ $re->uni_name }}</h5>
                    <p class="price">{{ $re->uni_price }}$</p>
                    <p><button>Add to Cart</button></p>
                </div>

                </body>
        @endforeach
    </div>
{{--        @include('A1uniform.uniform.uniformDetails')--}}
{{--        <a type="button" href="{{route('A1uniform.uniform_manager')}}" class="btn btn-info">&lt;&lt;&nbsp;Uniform Manager</a>--}}
    </div>
@endsection
