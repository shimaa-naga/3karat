@extends('layouts.app')

@section('title')

     Buildings User {{$user->name}}

@endsection

@section('header')

    {!! Html::style('cus/buall.css') !!}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

@endsection

@section('content')


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



    <div class="container">




        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="{{url('/')}}" >Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/showAllBuildings')}}" > All Buildings </a></li>
                <li class="breadcrumb-item active"><a href="#" >  Buildings User {{$user->name}} </a></li>

            </ol>
        </nav>



        <div class="row">


            @include('website.bu.pages')


            <div class="col">
                <div class="row">

                    @include('website.bu.sharefile', ['buAll' => $bu])

                    <div class="text-center">

                        {{$bu->appends(Request::except('page'))->render()}}

                    </div>


                </div>
            </div>

        </div>
    </div>




@endsection

@section('footer')
    {{--function formatState (state) {--}}
    {{--if (!state.id) {--}}
    {{--return state.text;--}}
    {{--}--}}
    {{--var baseUrl = "/user/pages/images/flags";--}}
    {{--var $state = $(--}}
    {{--'<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'--}}
    {{--);--}}
    {{--return $state;--}}
    {{--};--}}

    {{--$(".js-example-templating").select2({--}}
    {{--templateSelection: formatState--}}
    {{--});--}}

@endsection