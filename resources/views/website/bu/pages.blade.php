<div class="col-12 col-sm-3">



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
        <div class="card-header bg-primary text-white text-uppercase">Advanced Search</div>
        <div class="card-body">

            {!! Form::open(['url' => 'search' , 'method' => 'get']) !!}
            <li class="list-group-item">
                {!! Form::text("bu_price_from" , null ,['class' => 'form-control' , 'placeholder' => 'Building Price From']) !!}
            </li>
            <li class="list-group-item">
                {!! Form::text("bu_price_to" , null ,['class' => 'form-control' , 'placeholder' => 'Building Price To']) !!}
            </li>
            <li class="list-group-item">
                {!! Form::select("bu_place" ,bu_place(), null ,['class' => 'form-control js-example-templating' , 'placeholder' => 'Building Place']) !!}
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
        <div class="card-header bg-success text-white text-uppercase">Last product</div>
        <div class="card-body">
            <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
            <h5 class="card-title">Product title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="bloc_left_price">99.00 $</p>
        </div>
    </div>
</div>