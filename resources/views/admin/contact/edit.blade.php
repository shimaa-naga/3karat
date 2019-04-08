


@extends('admin.layouts.layout')

@section('title')

    Edit Message
    {{$contact->contact_name}}

@endsection



@section('header')



@endsection




@section('content')

    <section class="content-header">
        <h1>
            Edit Message Data
            {{$contact->contact_name}}

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/adminpanel/contact')}}">All Messages </a></li>
            <li ><a href="{{url('/adminpanel/contact/create')}}">Add Message</a></li>
            <li class="active"><a href="{{url('/adminpanel/contact/'.$contact->id.'/edit')}}">Edit Message {{$contact->contact_name}}</a></li>

        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">



                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Message {{$contact->contact_name}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">






                        <form method="post" action="{{url('/adminpanel/contact/update/'.$contact->id)}}">
                            @csrf


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name :') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="contact_name" value="{{$contact->contact_name}}" autofocus>

                                    @if ($errors->has('contact_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail :') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('contact_email') ? ' is-invalid' : '' }}" name="contact_email" value="{{$contact->contact_email}}" >

                                    @if ($errors->has('contact_email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact_email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>






                            <div class="form-group row  {{ $errors->has('contact_type') ? ' is-invalid' : '' }} ">
                                <label for="admin" class="col-md-4 col-form-label text-md-right">{{ __('Message Type :') }}</label>

                                <div class="col-md-6"  >

                                    <select  id="name"   class="form-control{{ $errors->has('contact_type') ? ' is-invalid' : '' }}" name="contact_type"  required>
                                        <option  {{$contact->contact_type == '1' ? 'selected' : '' }}  value="1">Like</option>
                                        <option  {{$contact->contact_type == '2' ? 'selected' : '' }} value="2">Problem</option>
                                        <option  {{$contact->contact_type == '3' ? 'selected' : '' }} value="3">Suggestion</option>
                                        <option  {{$contact->contact_type == '4' ? 'selected' : '' }} value="4">Enquiry</option>
                                    </select>

                                    @if ($errors->has('contact_type'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Message :') }}</label>

                                <div class="col-md-6">
                                    <textarea id="name"  class="form-control{{ $errors->has('contact_message') ? ' is-invalid' : '' }}" name="contact_message"  required >{{ $contact->contact_message }}</textarea>
                                    @if ($errors->has('contact_message'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact_message') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            {{--<div class="form-group row  {{ $errors->has('contact_message') ? ' is-invalid' : '' }} ">--}}
                                {{--<label for="admin" class="col-md-4 col-form-label text-md-right">{{ __('Message ') }}</label>--}}

                                {{--<div class="col-md-6"  >--}}

                                    {{--{!! Form::textarea("contact_message" , null ,['class' => 'form-control']) !!}--}}

                                    {{--@if ($errors->has('contact_message'))--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('contact_message') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}





                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">

                                    {{--{{url('/adminpanel/contact')}}--}}

                                    <td>
                                        <a href="{{url('/adminpanel/contact')}}" class="btn btn-success  btn-light"> Back <span class="fa phpdebugbar-fa-arrow-circle-left" style="color: #FFFFFF"></span></a>

                                    </td>

                                    <td>
                                        {{--<a href="{{url('/adminpanel/contact/'.$contact->id.'/edit')}}" class="btn btn-primary btn-sm" >--}}
                                            {{--edit--}}
                                        {{--</a>--}}

                                        <a href="{{url('/adminpanel/contact/'.$contact->id.'/delete')}}" class="btn btn-danger btn-info" >
                                            Delete
                                        </a>

                                    </td>
                                    {{--<button type="submit" class="submit">--}}

                                        {{--{{ __('Update') }}--}}
                                    {{--</button>--}}
                                </div>
                            </div>
                        </form>




                    </div>

                </div>
            </div>
        </div>
    </section>




@endsection






@section('footer')





@endsection