@extends('layouts.app')


@section('title')

    welcome to visitors
@endsection


@section('header')
    {{--
        <style>
            .banner{
                background: url("{{checkIfImageExist(getSetting('main_slider') , '/public/website/slider/' , '/website/slider/')}}") no-repeat center;
                min-height: 500px;
                width: 100%;
                -webkit-background-size: 100%;
                -moz-background-size: 100%;
                -o-background-size: 100%;
                background-size: 100%;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                padding-bottom: 100px;
            }
        </style>
        --}}



    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('main/css/reset.css')}}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{asset('main/css/style.css')}}">  <!-- Resource style -->
    <script src="{{asset('main/js/modernizr.js')}}"></script> <!-- Modernizr -->





@endsection

@section('content')



    <div class="banner text-center" style="padding: 0px 0px 0px 0px; ">
        <div class="container" >
            <div class="banner-info" >


                <h1>Welcome in The first Buildings site in the Middle East {{-- {{getSetting()}}--}} </h1>


                <p>

                {!! Form::open(['url' => 'search' , 'method' => 'get']) !!}
                <div class="row" style="padding:10px 50px 0px 0px ;">
                    <div class="col-lg-3">
                        {!! Form::text("bu_price_from" , null ,['class' => 'form-control' , 'placeholder' => 'Building Price From']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Form::text("bu_price_to" , null ,['class' => 'form-control' , 'placeholder' => 'Building Price To']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Form::select("rooms" ,roomnumber() , null ,['class' => 'form-control' , 'placeholder' => 'No.Rooms']) !!}                        </div>
                    <div class="col-lg-3">
                        {!! Form::select("bu_type" ,bu_type() , null ,['class' => 'form-control' , 'placeholder' => 'Type of Building']) !!}
                    </div>




                </div>
                <br>
                <div class="row" style="padding:10px 50px 0px 0px ;">

                    <div class="col-lg-3">
                        {!! Form::select("bu_rent" ,bu_rent() , null ,['class' => 'form-control' , 'placeholder' => 'Type of Process']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Form::text("bu_square" , null ,['class' => 'form-control' , 'placeholder' => 'Square']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Form::select("bu_place" ,bu_place(), null ,['class' => 'form-control js-example-templating' , 'placeholder' => 'Building Place']) !!}
                    </div>
                    <div class="col-lg-3" >
                        {!! Form::submit("Search" , ['class' => 'btn btn-secondary' , 'style' => 'width:80% ']) !!}
                        {{-- <button type="submit" class="submit" >

                            {{ __('Search') }}
                        </button>--}}

                    </div>

                </div>


                {!! Form::close() !!}

            </div>



            </p>


            <a class="banner_btn" href="{{url('/showAllBuildings')}}"> More</a>
            <a class="banner_btn" href="{{url('/user/create/building')}}"> Add Building</a>
        </div>
    </div>

    <div class="main">


        <ul class="cd-items cd-container">

            @foreach(\App\Bu::where('bu_status' , 1)->get() as $bu)
                <li class="cd-item {{-- box effect8 --}}"  >
                    <img src="{{checkIfImageExist($bu->image , '/public/website/thumb/' , '/website/thumb/')}}" alt="{{$bu->name}}" title="{{$bu->name}}" {{-- alt="Item Preview" --}}>
                    <a href="#0" data-id="{{$bu->id}}" class="cd-trigger" title="{{$bu->name}}">Quick View</a>
                </li> <!-- cd-item -->
            @endforeach
        </ul> <!-- cd-items -->

        <div class="cd-quick-view">
            <div class="cd-slider-wrapper">
                <ul class="cd-slider">
                    <li><img src="{{asset('main/img/item-3.jpg')}}"  class="imagebox" alt="image"></li>
                </ul> <!-- cd-slider -->


            </div> <!-- cd-slider-wrapper -->

            <div class="cd-item-info">
                <h2 class="titlebox"></h2>
                <p class="disbox"></p>

                <ul class="cd-item-action">
                    <li><a class="add-to-cart pricebox" href="">Add to cart</a></li>
                    <li><a  class="morebox" href="#0">Read more</a></li>
                </ul> <!-- cd-item-action -->
            </div> <!-- cd-item-info -->
            <a href="#0" class="cd-close">Close</a>
        </div> <!-- cd-quick-view -->

    </div>



@endsection

@section('footer')
    {{-- <script src="{{Request::root()}}/main/js/jquery-2.1.1.js"></script> --}}
    <script src="{{asset('main/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('main/js/velocity.min.js')}}"></script>
    <script src="{{asset('main/js/main.js')}}"></script> <!-- Resource jQuery -->


    <script>
        function urlHome(){

            return '{{Request::root()}}';
        }

        function noImageUrl(){

            return '{{getSetting('no_image')}}';
        }


    </script>
    <script src="{{asset('main/js/main.js')}}"></script> <!-- Resource jQuery -->
@endsection