
<style>
    .text-md-left,.col-md-4,.col-form-label {
        text-align: left!important;
        padding: 0px 0px 0px 50px;
    }
</style>

{{--
<form method="POST" action="{{ route('register') }}">
--}}
    @csrf

    <div class="form-group row">

       <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Building Name :') }}</label>


        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('bu_name') ? ' is-invalid' : '' }}" name="bu_name" value="{{ old('bu_name') }}" required autofocus>

            @if ($errors->has('bu_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bu_name') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('No.Rooms :') }}</label>

        <div class="col-md-6">
            {{--<input id="name" type="text" class="form-control{{ $errors->has('rooms') ? ' is-invalid' : '' }}" name="rooms" value="{{ old('rooms') }}" required>--}}
            {{--{!! Form::select("rooms" ,roomnumber() , null ,['class' => 'form-control']) !!}--}}

            <select  id="name" class="form-control{{ $errors->has('rooms') ? ' is-invalid' : '' }}" name="rooms"   required >
                @foreach (roomnumber() as $key => $value)
                    <option {{old('rooms','rooms')==$key? 'selected':''}}  value="{{$key}}">{{$value}}</option>

                @endforeach
            </select>

            @if ($errors->has('rooms'))
                <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('rooms') }}</strong>
                    </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Price :') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('bu_price') ? ' is-invalid' : '' }}" name="bu_price" value="{{ old('bu_price') }}" required>

            @if ($errors->has('bu_price'))
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('bu_price') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Type of Rent :') }}</label>

        <div class="col-md-6">
            {{--    {!! Form::select("rent" , bu_rent() , null ,['class' => 'form-control']) !!}    --}}
           {{-- <input id="name" type="name" class="form-control{{ $errors->has('bu_rent') ? ' is-invalid' : '' }}" name="bu_rent" value="{{ old('bu_rent') }}" required> --}}

            <select  id="name"   class="form-control{{ $errors->has('bu_rent') ? ' is-invalid' : '' }}" name="bu_rent"  required>
                <option {{old('bu_rent','bu_rent')=="1"? 'selected':''}}  value="1">Ownership</option>
                <option {{old('bu_rent','bu_rent')=="0"? 'selected':''}} value="0">Rent</option>
            </select>


        @if ($errors->has('bu_rent'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bu_rent') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Building Area :') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('bu_square') ? ' is-invalid' : '' }}" name="bu_square" value="{{ old('bu_square') }}" required>

            @if ($errors->has('bu_square'))
                <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('bu_square') }}</strong>
                    </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Type Of Building :') }}</label>

        <div class="col-md-6">

            {{--    {!! Form::select("bu_type" , bu_type() , null ,['class' => 'form-control']) !!}    --}}

            <select  id="name" class="form-control{{ $errors->has('bu_type') ? ' is-invalid' : '' }}" name="bu_type"   required >
                <option {{old('bu_type','bu_type')=="0"? 'selected':''}}  value="0">Flat</option>
                <option {{old('bu_type','bu_type')=="1"? 'selected':''}} value="1">Villa</option>
                <option {{old('bu_type','bu_type')=="2"? 'selected':''}} value="2">Chalet</option>
            </select>

            @if ($errors->has('bu_type'))
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('bu_type') }}</strong>
                    </span>
            @endif
         </div>
    </div>



   @if(!isset($user))

       <div class="form-group row">
           <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Status Of Building :') }}</label>

           <div class="col-md-6">

               {{--    {!! Form::select("bu_status" , bu_status() , null ,['class' => 'form-control']) !!}    --}}


               <select  id="name" class="form-control{{ $errors->has('bu_status') ? ' is-invalid' : '' }}" name="bu_status"  required>
                   <option {{old('bu_status','bu_status')=="1"? 'selected':''}}  value="1">Enabled</option>
                   <option {{old('bu_status','bu_status')=="0"? 'selected':''}} value="0">Disabled</option>
               </select>
               @if ($errors->has('bu_status'))
                   <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('bu_status') }}</strong>
                </span>
               @endif
           </div>
       </div>

   @endif


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Place :') }}</label>

        <div class="col-md-6">

                <select  id="name" name="bu_place"  class="form-control{{ $errors->has('bu_place') ? ' is-invalid' : '' }}"  value="{{ old('bu_place') }}" required>
                    @foreach (bu_place() as $key => $value)
                        <option {{old('bu_place','bu_place')==$key? 'selected':''}}  value="{{$key}}">{{$value}}</option>

                    @endforeach
                    </select>
                {{--
                {!! Form::select("bu_place" ,bu_place() ,null,['class' => "form-control select2 {{ $errors->has('bu_place') ? ' is-invalid' : '' }}",'value' => "{{ old('bu_place') }}" ]) !!}
                --}}


            @if ($errors->has('bu_place'))
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('bu_place') }}</strong>
                    </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Image for Building :') }}</label>

        <div class="col-md-6">

            @if(isset($bu))
                @if($bu->image != '')
                    <img src="{{ Request::root().'/website/bu_images/'.$bu->image}}" value="{{ old('image') }}" width="100" style="padding: 0px 0px 5px 0px ;">

                @endif
            @endif


            {!! Form::file("image" ,null,['class' => "form-control{{ $errors->has('image') ? ' is-invalid' : '' }}",'value' => "{{ old('image') }}" ]) !!}

            @if ($errors->has('image'))
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Tag Words :') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('bu_meta') ? ' is-invalid' : '' }}" name="bu_meta" value="{{ old('bu_meta') }}" required>

            @if ($errors->has('bu_meta'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bu_meta') }}</strong>
                </span>
            @endif
        </div>
    </div>



    @if(!isset($user))
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Description of Structure for search Engines :') }}</label>

            <div class="col-md-6">
               {{-- <input id="name" type="text" class="form-control{{ $errors->has('bu_small_des') ? ' is-invalid' : '' }}" name="bu_small_des" value="{{ old('bu_small_des') }}" required> --}}

                <textarea id="name" type="text" class="form-control{{ $errors->has('bu_small_des') ? ' is-invalid' : '' }}" name="bu_small_des"  required >

                </textarea>
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

    @endif



    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Longitude of Building :') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('bu_longitude') ? ' is-invalid' : '' }}" name="bu_longitude" value="{{ old('bu_longitude') }}" required>

            @if ($errors->has('bu_longitude'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bu_longitude') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Latitude of Building :') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('bu_latitude') ? ' is-invalid' : '' }}" name="bu_latitude" value="{{ old('bu_latitude') }}" required>

            @if ($errors->has('bu_latitude'))
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('bu_latitude') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left" style=" padding: 0px 0px 0px 50px; ">{{ __('Long description of the building :') }}</label>

        <div class="col-md-6">
             <textarea id="name" type="text" class="form-control{{ $errors->has('bu_long_des') ? ' is-invalid' : '' }}" name="bu_long_des" value="{{ old('bu_long_des') }}" required >
{{ old('bu_long_des') }}
            </textarea>
            @if ($errors->has('bu_long_des'))
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('bu_long_des') }}</strong>
                </span>
            @endif
        </div>
    </div>



    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4" >
            <button type="submit" class="submit">

                {{ __('Add Building') }}
            </button>
        </div>
    </div>
</form>