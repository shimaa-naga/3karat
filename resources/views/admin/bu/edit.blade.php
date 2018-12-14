


@extends('admin.layouts.layout')

@section('title')

    Edit Building
    {{$bu->bu_name}}

@endsection



@section('header')

{!! Html::style('cus/css/select2.min.css') !!}


@endsection




@section('content')

    <section class="content-header">
        <h1>
            Edit Building Data
            {{$bu->bu_name}}

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/adminpanel/bu')}}">All Buildings</a></li>
            <li ><a href="{{url('/adminpanel/bu/create')}}">Add Building</a></li>
            <li class="active"><a href="{{url('/adminpanel/bu/'.$bu->id.'/edit')}}">Edit Building {{$bu->name}}</a></li>

        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">



                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Building {{$bu->bu_name}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">





                        <form  method="post"  action="{{url('/adminpanel/bu/'.$bu->id)}}">
                            @csrf
                            {{--  {{method_field('PATCH')}}--}}


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('bu_name') ? ' is-invalid' : '' }}" name="bu_name" value="{{ $bu->bu_name }}" required autofocus>

                                    @if ($errors->has('bu_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bu_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>






                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('No.Rooms :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('rooms') ? ' is-invalid' : '' }}" name="rooms" value="{{ $bu->rooms }}" required>

                                @if ($errors->has('rooms'))
                                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('rooms') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Price :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('bu_price') ? ' is-invalid' : '' }}" name="bu_price" value="{{ $bu->bu_price }}" required>

                                @if ($errors->has('bu_price'))
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('bu_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type of Rent :') }}</label>

                            <div class="col-md-6">
                                {{--    {!! Form::select("rent" , bu_rent() , null ,['class' => 'form-control']) !!}    --}}
                                {{-- <input id="name" type="name" class="form-control{{ $errors->has('bu_rent') ? ' is-invalid' : '' }}" name="bu_rent" value="{{ old('bu_rent') }}" required> --}}

                                <select  id="name"   class="form-control{{ $errors->has('bu_rent') ? ' is-invalid' : '' }}" name="bu_rent" value="{{ $bu->bu_rent }}" required>


                                    {{--  <option value="{{ $bu->bu_rent}}" selected="selected" >{{ $bu->bu_rent}}</option> --}}

                                    <option value="1">Ownership</option>
                                    <option value="0">Rent</option>
                                </select>

                                @if ($errors->has('bu_rent'))
                                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bu_rent') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Building Area :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('bu_square') ? ' is-invalid' : '' }}" name="bu_square" value="{{ $bu->bu_square }}" required>

                                @if ($errors->has('bu_square'))
                                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('bu_square') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type Of Building :') }}</label>

                            <div class="col-md-6">

                                {{--    {!! Form::select("bu_type" , bu_type() , null ,['class' => 'form-control']) !!}    --}}

                                <select  id="name" class="form-control{{ $errors->has('bu_type') ? ' is-invalid' : '' }}" name="bu_type" value="{{ $bu->bu_type }}"  required >

                                        {{-- <option value="{{ $bu->bu_type}}" selected="selected" >{{ $bu->bu_type}}</option> --}}


                                    <option value="0" name="bu_type" >Flat</option>
                                    <option value="1" name="bu_type" >Villa</option>
                                    <option value="2" name="bu_type" >Chalet</option>

                                </select>

                                @if ($errors->has('bu_type'))
                                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('bu_type') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Status Of Building :') }}</label>

                            <div class="col-md-6">

                               {{-- {!! Form::select('bu_status' , ['1'=>'Enabled','0'=>'Disabled' ] , null ,['class' => 'form-control']) !!} --}}

                                {{--    {!! Form::select("bu_status" , bu_status() , null ,['class' => 'form-control']) !!}    --}}

                                <select  id="name" class="form-control{{ $errors->has('bu_status') ? ' is-invalid' : '' }}" name="bu_status" value="{{ $bu->bu_status }}" required>


                                    {{-- <option value="{{ $bu->bu_status}}" selected="selected" >{{ $bu->bu_status}}</option> --}}

                                    <option value="1" name="bu_status">Enabled</option>
                                    <option value="0" name="bu_status">Disabled</option>
                                </select>

                                @if ($errors->has('bu_status'))
                                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('bu_status') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>



                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Place :') }}</label>

                                <div class="col-md-6">
                                    {{--             <select  id="name" name="bu_place"  class="form-control{{ $errors->has('bu_place') ? ' is-invalid' : '' }}" name="bu_place" value="{{ old('bu_place') }}" required>
                         --}}

                                    {!! Form::select("bu_place" ,bu_place() ,null,['class' => "form-control {{ $errors->has('bu_place') ? ' is-invalid' : '' }}",'value' => "{{ old('bu_place') }}" ]) !!}



                                    @if ($errors->has('bu_place'))
                                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('bu_place') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tag Words :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('bu_meta') ? ' is-invalid' : '' }}" name="bu_meta" value="{{ $bu->bu_meta }}" required>

                                @if ($errors->has('bu_meta'))
                                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bu_meta') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description of Structure for search Engines :') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="name" type="text" class="form-control{{ $errors->has('bu_small_des') ? ' is-invalid' : '' }}" name="bu_small_des" value="{{ old('bu_small_des') }}" required> --}}

                                <textarea id="name" type="text" class="form-control{{ $errors->has('bu_small_des') ? ' is-invalid' : '' }}" name="bu_small_des" required >{{ $bu->bu_small_des }}</textarea>
                                @if ($errors->has('bu_small_des'))
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('bu_small_des') }}</strong>
                                    </span>
                                @endif

                                <br>
                                {{-- <div class="alert alert-warning"> --}}

                                <div class="alert alert-warning alert-dismissible fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Warning!</strong> You can't enter more than 160 characters according to Google's criteria.
                                </div>
                                {{--
                                <div class="alert alert-warning">
                                    You can not enter more than 160 characters according to Google's criteria
                                </div>

                                --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Longitude of Building :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('bu_longitude') ? ' is-invalid' : '' }}" name="bu_longitude" value="{{ $bu->bu_longitude }}" required>

                                @if ($errors->has('bu_longitude'))
                                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bu_longitude') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Latitude of Building :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('bu_latitude') ? ' is-invalid' : '' }}" name="bu_latitude" value="{{ $bu->bu_latitude }}" required>

                                @if ($errors->has('bu_latitude'))
                                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('bu_latitude') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Long description of the building :') }}</label>

                            <div class="col-md-6">
                            <textarea id="name" type="text" class="form-control{{ $errors->has('bu_long_des') ? ' is-invalid' : '' }}" name="bu_long_des"  required >{{ $bu->bu_long_des }}</textarea>
                                @if ($errors->has('bu_long_des'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bu_long_des') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>








                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="submit">

                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>










                      {{--  <form method="POST" action="{{ url('adminpanel/users') }}">


                        {!! Form::model($bu , ['route' => ['adminpanel/users/edit' ,$bu->id] , 'method' => 'PATCH'])  !!}
                            @include('admin.user.form')
                        {!! Form::close() !!}

                          </form> --}}



                    </div>

                </div>
            </div>
        </div>
    </section>






{{--

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">



                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Change User Password {{$bu->name}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        {!! Form::open(['url'=>'/adminpanel/user/changepassword', 'method'=>'post']) !!}
                        <input type="hidden" value="{{$bu->id}}" name="user_id">




                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="submit">

                                    {{ __('Change Password') }}
                                </button>


                                @if($bu->id != 1)
                                    <a href="{{url('/adminpanel/users/'.$bu->id.'/delete')}}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i> delete user</a>
                                @endif


                            </div>
                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

--}}










@endsection






@section('footer')


    {!! Html::script('cus/js/select2.min.js') !!}



    <script type="text/javascript" >

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

        $(".select2").select2({
            templateSelection: formatState
        });


    </script>

@endsection