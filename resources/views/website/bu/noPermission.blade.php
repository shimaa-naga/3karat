

@extends('layouts.app')

@section('title')

    This building is awaiting management approval

@endsection

@section('header')

    {!! Html::style('cus/buall.css') !!}


@endsection

@section('content')



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

                   <div class="alert alert-danger">
                        <b>

                            The building {{$buInfo->bu_name}} is in our possession but is awaiting approval by the administration,
                            The building is posted in a maximum period of 24 hours
                        </b>
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