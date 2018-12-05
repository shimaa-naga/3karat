
@if(count($buAll) > 0)


    @foreach($buAll as $key => $bu)

        @if($key % 3 == 0 && $key != 0)
            <div class="clearfix"></div>

        @endif

    <div class="col-12 col-md-6 col-lg-4"  style="margin-bottom: 1em;" >
        <div class="card">
            <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><a href="product.html" title="View Product">{{$bu->bu_name}}</a></h4>
                <p class="card-text">{{str_limit($bu->bu_small_des , 70)}}</p>
                <div class="row">
                    <div class="col">
                        <p class="btn btn-danger btn-block">{{$bu->bu_price}}</p>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-success btn-block">{{-- Add to cart --}} details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach
@else

    <div class="alert alert-danger" style="width: 820px; ">
        Not Found Any Building Now
    </div>

@endif

