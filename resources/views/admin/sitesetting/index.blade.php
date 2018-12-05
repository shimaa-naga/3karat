
@extends('admin.layouts.layout')

@section('title')

    Edit Site Setting

@endsection



@section('header')



@endsection




@section('content')

    <section class="content-header">
        <h1>
            Edit Site Setting

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="{{url('/adminpanel/sitesetting')}}">Edit Site Setting</a></li>

        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">



                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Site Setting</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">


                       {{--   {{test()}} --}}


                        <form action="{{url('/adminpanel/sitesetting')}}" method="post">
                            {{csrf_field()}}

                        @foreach($sitesetting as $setting)


                            <div class="text2{{ $errors->has('name') ? ' is-invalid' : '' }}">

                                <div class="col-lg-2">
                                    {{$setting->slug}}
                                </div>

                                <div class="col-md-10">

                                    @if($setting->type == 0)
                                    {!! Form::text($setting->namesetting , $setting->value ,['class' => 'form-control']) !!}
                                    @else
                                    {!! Form::textarea($setting->namesetting , $setting->value ,['class' => 'form-control']) !!}
                                    @endif

                                    @if ($errors->has($setting->namesetting))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first($setting->namesetting) }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                            <div class="clearfix">

                            </div>
                            <br>
                            <br>


                        @endforeach

                            <button class="btn btn-app"  name="submit" type="submit"  >
                                <i class="fa fa-save" > save site setting</i>

                            </button>

                        </form>





                    </div>

                </div>
            </div>
        </div>
    </section>





@endsection



