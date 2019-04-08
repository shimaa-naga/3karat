@extends('admin.layouts.layout')

@section('title')

    Control In New Messages

    @endsection



    @section('header')


            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @endsection




    @section('content')



            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0px;">


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Control In New Messages

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="{{url('/adminpanel/contact')}}">All Messages</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">



                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Control In Messages Messages</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div id="example1" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 121px;">User Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 80px;">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 60px;">Created Time</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 90px;">State</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Type Of Message</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 54px;">Controll</th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($contact as $key => $contactinfo)
                                                <tr role="row" class="odd">
                                                    <td>{{$key + 1}}</td>
                                                    <td class="sorting_1">{{$contactinfo->contact_name}}</td>
                                                    <td> {{$contactinfo->contact_email}} </td>
                                                    <td>{{$contactinfo->created_at}}</td>
                                                    <td>{{($contactinfo->view) == 0 ? 'Not Read' : 'Read'}}</td>

                                                    @if($contactinfo->contact_type == 1)
                                                        <td>Like</td>

                                                    @elseif($contactinfo->contact_type == 2)
                                                        <td>Problem</td>

                                                    @elseif($contactinfo->contact_type == 3)
                                                        <td>Suggestion</td>

                                                    @else()
                                                        <td>Enquiry </td>

                                                    @endif

                                                    <td>
                                                        <a href="{{url('/adminpanel/contact/'.$contactinfo->id.'/edit')}}" class="btn btn-primary btn-sm" >
                                                            Read
                                                        </a>

                                                        <a href="{{url('/adminpanel/contact/'.$contactinfo->id.'/delete')}}" class="btn btn-danger btn-sm" >
                                                            Delete
                                                        </a>

                                                    </td>
                                                </tr>
                                            @endforeach



                                            </tbody>
                                            <tfoot>

                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 121px;">User Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 80px;">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 60px;">Created Time</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 54px;">State</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Type Of Message</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 54px;">Controll</th>
                                            </tr>

                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->





                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->






@endsection






@section('footer')




    <script  type="text/javascript">






        var lastIdx = null;

        $('#data thead th').each( function () {
            if($(this).index()  < 4 ){
                var classname = $(this).index() == 6  ?  'date' : 'dateslash';
                var title = $(this).html();
                $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" ����� '+title+'" />' );
            }else if($(this).index() == 4){
                $(this).html( '<select><option value="0"> New Message </option><option value="1"> Old Message </option></select>' );
            }
            else if($(this).index() == 5){
                $(this).html( '<select>'+
                        @foreach(contact() as $key => $value)
                        '<option  value="{{$key}}" > {{$value}} </option>' +
                        @endforeach
                        '</select>' );
            }


        } );

        var table = $('#data').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/adminpanel/contact/data') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'contact_name', name: 'contact_name'},
                {data: 'contact_email', name: 'contact_email'},
                {data: 'created_at', name: 'created_at'},
                {data: 'view', name: 'view'},
                {data: 'contact_type', name: 'contact_type'},

                {data: 'control', name: ''}
            ],
            "language": {
                "url": "{{ Request::root()  }}/admin/cus/Arabic.json"
            },
            "stateSave": false,
            "responsive": true,
            "order": [[0, 'desc']],
            "pagingType": "full_numbers",
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            iDisplayLength: 25,
            fixedHeader: true,

            "oTableTools": {
                "aButtons": [


                    {
                        "sExtends": "csv",
                        "sButtonText": "��� ����",
                        "sCharSet": "utf16le"
                    },
                    {
                        "sExtends": "copy",
                        "sButtonText": "��� ���������",
                    },
                    {
                        "sExtends": "print",
                        "sButtonText": "�����",
                        "mColumns": "visible",


                    }
                ],

                "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
            },

            "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
            ,initComplete: function ()
            {
                var r = $('#data tfoot tr');
                r.find('th').each(function(){
                    $(this).css('padding', 8);
                });
                $('#data thead').append(r);
                $('#search_0').css('text-align', 'center');
            }

        });

        table.columns().eq(0).each(function(colIdx) {
            $('input', table.column(colIdx).header()).on('keyup change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });




        });



        table.columns().eq(0).each(function(colIdx) {
            $('select', table.column(colIdx).header()).on('change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });

            $('select', table.column(colIdx).header()).on('click', function(e) {
                e.stopPropagation();
            });
        });


        $('#data tbody')
                .on( 'mouseover', 'td', function () {
                    var colIdx = table.cell(this).index().column;

                    if ( colIdx !== lastIdx ) {
                        $( table.cells().nodes() ).removeClass( 'highlight' );
                        $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                    }
                } )
                .on( 'mouseleave', function () {
                    $( table.cells().nodes() ).removeClass( 'highlight' );
                } );








    </script>


@endsection