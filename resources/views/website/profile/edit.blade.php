

@extends('layouts.app')

@section('title')

    Edit Personal Information to User {{$user->name}}

@endsection

@section('header')

    {!! Html::style('cus/buall.css') !!}

    <style>
        .text-md-right {
            text-align: left!important;
        }
    </style>
@endsection

@section('content')



    <div class="container">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" > Home </a></li>
                <li class="breadcrumb-item active"><a href="{{url('/user/editProfile')}}" > Edit Personal Information to User {{$user->name}}</a></li>



            </ol>
        </nav>


        <div class="row">


            @include('website.bu.pages')


            <div class="col">

                <div class="text-center" style="padding: 30px 0px 30px 0px ;  background-color: #ffffff;">

                    <form method="post" action="{{url('/user/editProfile')}}">
                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left" style="padding:5px 0px 0px 120px;">{{ __('Name : ') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left" style="padding:5px 0px 0px 120px;">{{ __('E-Mail Address :') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$user->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-4 col-form-label text-md-left" style="padding:20px 0px 20px 150px;">
                                <button type="submit" class="submit">

                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>



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