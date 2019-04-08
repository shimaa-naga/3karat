@extends('layouts.app')

@section('title')

    All Buildings

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

                @if(isset($array))

                    @if(!empty($array))

                        @foreach($array as $key => $value)

                            <li class="breadcrumb-item"><a href="{{url('/search?'.$key.'='.$value)}}" > {{searchNameField()[$key]}} ->

                                    @if($key == 'bu_type')

                                        {{bu_type()[$value]}}
                                    @elseif($key == 'bu_rent')

                                        {{bu_rent()[$value]}}
                                    @elseif($key == 'bu_place')

                                        {{bu_place()[$value]}}

                                    @else
                                    {{$value}} </a></li>

                                    @endif
                        @endforeach

                    @endif
                @endif

            </ol>
        </nav>




        <div class="row">


            @include('website.bu.pages')


            <div class="col">
                <div class="row">

                    @include('website.bu.sharefile')

                    <div class="text-center">

                        {{$buAll->appends(Request::except('page'))->render()}}

                    </div>


                    {{--

                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    --}}

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