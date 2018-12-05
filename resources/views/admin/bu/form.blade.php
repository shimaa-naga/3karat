

{{--
<form method="POST" action="{{ route('register') }}">
--}}
    @csrf

    <div class="form-group row">

       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Building Name :') }}</label>


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
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('No.Rooms :') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('rooms') ? ' is-invalid' : '' }}" name="rooms" value="{{ old('rooms') }}" required>

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
            <input id="name" type="text" class="form-control{{ $errors->has('bu_price') ? ' is-invalid' : '' }}" name="bu_price" value="{{ old('bu_price') }}" required>

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

            <select  id="name" name="bu_rent"  class="form-control{{ $errors->has('bu_rent') ? ' is-invalid' : '' }}" name="bu_rent" value="{{ old('bu_rent') }}" required>
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
            <input id="name" type="text" class="form-control{{ $errors->has('bu_square') ? ' is-invalid' : '' }}" name="bu_square" value="{{ old('bu_square') }}" required>

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

            <select  id="name" class="form-control{{ $errors->has('bu_type') ? ' is-invalid' : '' }}" name="bu_type" value="{{ old('bu_type') }}" required>
                <option value="1">Flat</option>
                <option value="2">Villa</option>
                <option value="3">Chalet</option>

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

            {{--    {!! Form::select("bu_status" , bu_status() , null ,['class' => 'form-control']) !!}    --}}

            <select  id="name" class="form-control{{ $errors->has('bu_status') ? ' is-invalid' : '' }}" name="bu_status" value="{{ old('bu_status') }}" required>
                <option value="1">Enabled</option>
                <option value="0">Disabled</option>
            </select>

            @if ($errors->has('bu_status'))
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('bu_status') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tag Words :') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('bu_meta') ? ' is-invalid' : '' }}" name="bu_meta" value="{{ old('bu_meta') }}" required>

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

            <textarea id="name" type="text" class="form-control{{ $errors->has('bu_small_des') ? ' is-invalid' : '' }}" name="bu_small_des" value="{{ old('bu_small_des') }}" required >

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

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Longitude of Building :') }}</label>

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
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Latitude of Building :') }}</label>

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
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Long description of the building :') }}</label>

        <div class="col-md-6">
             <textarea id="name" type="text" class="form-control{{ $errors->has('bu_long_des') ? ' is-invalid' : '' }}" name="bu_long_des" value="{{ old('bu_long_des') }}" required >

            </textarea>
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

                {{ __('Add Building') }}
            </button>
        </div>
    </div>
</form>