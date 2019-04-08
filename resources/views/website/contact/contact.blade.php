@extends('layouts.app')

@section('title')

    Contact Us

@endsection



@section('header')

    {!! Html::style('cus/buall.css') !!}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



@endsection




    @section('content')



<div class="about">
    <div class="container">
        <section class="title-section">
            <h1 class="title-header">Contact Us</h1>
        </section>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="row contact_top">
            <div class="col-md-4 contact_details">
                <h5>Mailing Address:</h5>
                <div class="contact_address">{{nl2br(getSetting('address'))}}</div>
            </div>
            <div class="col-md-4 contact_details">
                <h5>Call Us:</h5>
                <div class="contact_address"> {{nl2br(getSetting('mobile'))}}<br>
                </div>
            </div>
            <div class="col-md-4 contact_details">
                <h5>Email Us:</h5>
                <div class="contact_mail"> {{nl2br(getSetting('email'))}}</div>
            </div>
        </div>
        <div class="contact_bottom">
            <h3>Contact Form</h3>
            <p>Mauris a vulputate lectus at blandit nisi. Donec eleifend vel felis vitae auctor aenean rhoncus sapien sollicitudin leo interdum.</p>


            <form method="post" action="{{url('/contact')}}">

                @csrf

                <div class="contact-to">
                    <input type="text" class="text" name="contact_name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                    <input type="text" class="text" name="contact_email" value="{{\Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->email : 'Email'}}"  style="margin-left: 10px">
                    {{-- <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left: 10px"> --}}

                </div>

                <div class="form-group" style="padding: 0px 380px 0px 0px">
                    {{-- <label class="text" for="subject"  > subject </label --}}
                    <select id="subject" name="contact_type"  class="form-control"  required="required">

                        @foreach(contact() as $key => $con)
                            <option value="{{$key}}" > {{$con}} </option>
                        @endforeach

                    </select>

                </div>

                <div class="text2">
                    <textarea value="Message:" name="contact_message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
                </div>
                <div> <button type="submit" class="submit"> Send Message </button> </div>
            </form>
        </div>
    </div>
</div>

    @endsection

@section('footer')


@endsection
