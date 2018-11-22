
@extends('admin.layouts.layout')

@section('title')

    Add Building

    @endsection



@section('header')



@endsection




@section('content')

    <section class="content-header">
        <h1>
            Add New Building

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/adminpanel/bu')}}">{{--Control In Buildings--}}All Buildings</a></li>
            <li class="active"><a href="{{url('/adminpanel/bu/create')}}">Add New Building</a></li>

        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">



                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add New Building</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">


                        {{--

                        <form method="POST" action="{{ url('/adminpanel/bu') }}">

                        @include('admin.bu.form')

                        </form>

                        --}}


                        {!! Form::open(['url' => '/adminpanel/bu' , 'method' => 'post' ]) !!}
                             @include('admin.bu.form')

                        {!! Form::close()  !!}




                     </div>

                </div>
            </div>
        </div>
    </section>





@endsection






@section('footer')





@endsection