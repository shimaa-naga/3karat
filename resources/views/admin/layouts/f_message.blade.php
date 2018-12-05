


@if(Session::has('flash_message'))

    <script>

        //swal({title:"{{Session::get('flash_message')}}" , text:"this message will display after 2 seconds" , timer:2000, showConfirmButton:false});



        swal({
            //position: 'absolute',
            position: 'top-end',
            type: 'success',
            title: '{{Session::get('flash_message')}}',
            showConfirmButton: false,
            text:"this message will display after 5 seconds",
            timer: 5000
        })
    </script>


@endif