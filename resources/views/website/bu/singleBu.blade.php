@extends('layouts.app')

@section('title')


    {{$buInfo->bu_name}}

@endsection

@section('header')
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>

    <script src="https://maps.googleapis.com/maps/api/js"></script>

    {!! Html::style('cus/buall.css') !!}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <style>
        hr {
            border: 0;
            clear:both;
            display:block;
            width: 115%;
            color: #FFFF00;
            height: 1px;


        }


        #line {

            float: left;
            width: 731px;
            height: 10px;
            display:block;
        }



    </style>

@endsection

@section('content')


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->




    {{--
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->

    --}}


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



    <div class="container">




        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" >Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/showAllBuildings')}}" >All Buildings</a></li>
                <li class="breadcrumb-item"><a href="{{url('/singleBuilding/'.$buInfo->id)}}" >{{$buInfo->bu_name}}</a></li>

            </ol>
        </nav>




        <div class="row">


      @include('website.bu.pages')


            <div class="col">
                <div class="row">

                    <h1>
                        {{$buInfo->bu_name}}

                    </h1>

                    <div style="padding: 10px 0px 10px 350px ;">


                         <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <script type="text/javascript" url="{{url('/singleBuilding/'.$buInfo->id)}}" title="{{$buInfo->bu_name}}|{{getSetting('website name')}}" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c58adf35e9e410f"></script>


                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox_lqu3"></div>

                    </div>

                    <br />

                    <div id="line"><hr  /></div>
                    <br />


                    <div class="btn-group" role="group"  style="padding: 7px 0px 0px 0px ;">
                        <div>
                            <a class="btn btn-info " class="btn btn-info " {{-- class="btn btn-light" --}} href="{{url('/search?bu_square='.$buInfo->bu_square)}}"> Square: {{$buInfo->bu_square}} </a>


                            <a class="btn btn-info " href="{{url('/search?bu_price='.$buInfo->bu_price)}}">Price: {{$buInfo->bu_price}} </a>


                            <a class="btn btn-info " href="{{url('/search?bu_place='.$buInfo->bu_place)}}"> Region: {{bu_place()[$buInfo->bu_place]}} </a>


                            <a class="btn btn-info " href="{{url('/search?rooms='.$buInfo->rooms)}}"> No.of Rooms: {{$buInfo->rooms}} </a>


                            <a class="btn btn-info " href="{{url('/search?bu_rent='.$buInfo->bu_rent)}}"> Process Type: {{bu_rent()[$buInfo->bu_rent]}} </a>


                            <a class="btn btn-info " href="{{url('/search?bu_type='.$buInfo->bu_type)}}"> Type: {{bu_type()[$buInfo->bu_type]}} </a>

                        </div>


                    </div>

                    <div id="line"><hr /></div>

                    <br>

                    <img src="{{checkIfImageExist($buInfo->image)}}" class="img-responsive" >


                    <div id="line"><hr /></div>

                      <br>


                    <div  class="row" style="padding: 5px 5px 0px 10px ;">
                       <p>
                           {!! nl2br($buInfo->bu_long_des) !!}
                       </p>
                   </div>

                    <div id="line" style="padding: 0px 0px 30px 0px ;"><hr  /></div>




                    <div id="map"  style="width:100%;height:400px; padding: 5px 5px 5px 5px ;"></div>

                    <hr >

                    <div class="row" >
                        <h4 style="padding: 0px 0px 0px 30px ;">
                            Another Buildings May Interest You
                        </h4>
                        <hr>
                        @include('website.bu.sharefile' ,['buAll' => $same_rent])
                        @include('website.bu.sharefile' ,['buAll' => $same_type])
                    </div>


                    <script>
                        function initMap() {

                             var uluru = {lat: {{$buInfo->bu_latitude}}, lng: {{$buInfo->bu_longitude}}};
                            {{-- var uluru = {lat: 30.042238, lng: 31.241463}; --}}
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 4,
                                center: uluru
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map
                            });
                        }
                    </script>
                    <script async defer
                            src=
                            "https://maps.googleapis.com/maps/api/js?key=
                                    AIzaSyB2bXKNDezDf6YNVc-SauobynNHPo4RJb8&callback=initMap">
                    </script>


                </div>
{{--            <div class="row">
                    @include('website.bu.sharefile' ,['buAll' => $same_rent])
                </div> --}}

            </div>

        </div>

    </div>





@endsection

@section('footer')


    <script>
        function formatState (state) {
            if (!state.id) {
                return state.text;
            }
            var baseUrl = "/user/pages/images/flags";
            var $state = $(
                    '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
            );
            return $state;
        };

        $(".js-example-templating").select2({
            templateSelection: formatState
        });
    </script>

@endsection