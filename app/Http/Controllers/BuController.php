<?php

namespace App\Http\Controllers;

use App\Bu;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BuController extends Controller
{
    public function index()
    {
        return view('admin.bu.index');
    }


    public function create()
    {
        return view('admin.bu.add');
    }


    public function store()
    {
        return view('admin.bu.index');
    }






    public function anyData(Bu $bu)
    {

        $bus = $bu->all();

        return DataTables::of($bus)

            ->editColumn('bu_name', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id . '/edit').'">'.$model->bu_name.'</a>';
            })



            ->editColumn('bu_status', function ($model) {
                return $model->bu_status == 0 ? '<span class="badge badge-info">' . 'лэб ункс' . '</span>' : '<span class="badge badge-warning">' . 'ункс' . '</span>';
            })


            ->editColumn('bu_type', function ($model) {

                $type = bu_type();

                return ' <span class="btn btn-danger btn-circle">'.$type[$model->bu_type] .'</span>';
            })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                if($model->id != 1){
                    $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                }
                return $all;
            })
            ->make(true);

    }
}
