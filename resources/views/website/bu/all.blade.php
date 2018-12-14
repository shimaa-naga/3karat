@extends('layouts.app')

@section('title')

    All Buildings

@endsection

@section('header')

    {!! Html::style('cus/buall.css') !!}

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
        <div class="row">




            <div class="col-12 col-sm-3">





                <div class="card bg-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase">Advanced Search</div>
                    <div class="card-body">

                        {!! Form::open(['url' => 'search' , 'method' => 'post']) !!}
                        <li class="list-group-item">
                            {!! Form::text("bu_price" , null ,['class' => 'form-control' , 'placeholder' => 'Building Price']) !!}
                        </li>
                        <li class="list-group-item">
                            {!! Form::select("bu_place" ,bu_place(), null ,['class' => 'form-control' , 'placeholder' => 'Building Place']) !!}
                        </li>
                        <li class="list-group-item">
                            {!! Form::select("rooms" ,roomnumber() , null ,['class' => 'form-control' , 'placeholder' => 'No.Rooms']) !!}
                        </li>
                        <li class="list-group-item">
                            {!! Form::select("bu_type" ,bu_type() , null ,['class' => 'form-control' , 'placeholder' => 'Type of Building']) !!}
                        </li>
                        <li class="list-group-item">
                            {!! Form::select("bu_rent" ,bu_rent() , null ,['class' => 'form-control' , 'placeholder' => 'Type of Process']) !!}
                        </li>
                        <li class="list-group-item">
                            {!! Form::text("bu_square" , null ,['class' => 'form-control' , 'placeholder' => 'Square']) !!}
                        </li>
                        <li class="list-group-item" >
                            {{-- {!! Form::submit("Search" , null ,['class' => 'banner_btn']) !!} --}}
                                    {{-- <input type="submit" value="Search" class="banner_btn"> --}}

                               <div style="padding: -2px 0px 0px 0px; margin-top: -25px;">
                                   <button type="submit" class="submit" >

                                       {{ __('Search') }}
                                   </button>

                               </div>
                        </li>
                        {!! Form::close() !!}

                    </div>
                </div>



            <div class="card bg-light mb-3">
              <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Select Building</div>
                 <ul class="list-group category_block">

  {{--
                        <!-- search form -->
                        <form action="#" method="get" class="sidebar-form" style="display:inline-block; padding: 5px 40px 5px 3px; ">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                         <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                         </button>
                                    </span>
                            </div>
                        </form>
                        <!-- /.search form -->

                        --}}



                        <li class="list-group-item"><a href="{{url('/showAllBuildings')}}"> All Buildings </a></li>
                        <li class="list-group-item"><a href="{{url('/ForRent')}}">Rent</a></li>
                        <li class="list-group-item"><a href="{{url('/Buy')}}"> Buy </a></li>
                        <li class="list-group-item"><a href="{{url('/type/0')}}"> Flat </a></li>
                        <li class="list-group-item"><a href="{{url('/type/1')}}"> Villa </a></li>
                        <li class="list-group-item"><a href="{{url('/type/2')}}"> Chalet </a></li>


                    </ul>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase">Last product</div>
                    <div class="card-body">
                        <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                        <h5 class="card-title">Product title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="bloc_left_price">99.00 $</p>
                    </div>
                </div>
            </div>
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