<?php

namespace App\Http\Controllers;

use App\Bu;
use App\Http\Requests\BuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
//use Datatables;

class BuController extends Controller
{
    public function index()
    {
        $bus = Bu::all();
        return view('admin.bu.index',compact('bus'));
    }


    public function create()
    {
        return view('admin.bu.add');
    }


    public function store(BuRequest $buRequest , Bu $bu)
    {

        $user = Auth::user();

        $data =[
            'bu_name'       => $buRequest->bu_name,
            'bu_price'      => $buRequest->bu_price,
            'rooms'         => $buRequest->rooms,
            'bu_rent'       => $buRequest->bu_rent,
            'bu_square'     => $buRequest->bu_square,
            'bu_type'       => $buRequest->bu_type,
            'bu_small_des'  => $buRequest->bu_small_des,
            'bu_meta'       => $buRequest->bu_meta,
            'bu_longitude'  => $buRequest->bu_longitude,
            'bu_latitude'   => $buRequest->bu_latitude,
            'bu_long_des'   => $buRequest->bu_long_des,
            'bu_status'     => $buRequest->bu_status,
            'user_id'       => $user->id,
        ];

       // dd($data);
        $bu->create($data);
        return Redirect('/adminpanel/bu')->withFlashMessage('Building Added Successfully') ;
    }

    public function edit($id)
    {

        $bu = Bu::find($id);
        return view('admin.bu.edit',compact('bu'));
    }



   /*
    public function update($id , BuRequest $request)
    {
        $buUpdate = Bu::find($id);



        $buUpdate->fill($request->all())->save();
        //dd($buUpdate);
        return Redirect::back()->withFlashMessage('Updated Building Successfully');
    }
    */


    public function update($id , Request $request)
    {
        $buUpdate = Bu::find($id);

        $rules =[
            'bu_name'       => 'required|min:5|max:100',
            'bu_price'      => 'required',
            'rooms'         => 'required',
            'bu_rent'       => 'required',
            'bu_square'     => 'required|min:2|max:10',
            'bu_type'       => 'required',
            'bu_small_des'  => 'required|min:5|max:160',
            'bu_meta'       => 'required|min:5|max:200',
            'bu_longitude'  => 'required',
            'bu_latitude'   => 'required',
            'bu_long_des'   => 'required|min:5',
            'bu_status'     => 'required',

        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
            return redirect()->back()->withErrors($validator);


        $buUpdate->bu_name = $request->input('bu_name');
        $buUpdate->bu_price = $request->input('bu_price');
        $buUpdate->rooms = $request->input('rooms');
        $buUpdate->bu_rent = $request->input('bu_rent');
        $buUpdate->bu_square = $request->input('bu_square');
        $buUpdate->bu_type = $request->input('bu_type');
        $buUpdate->bu_small_des = $request->input('bu_small_des');
        $buUpdate->bu_meta = $request->input('bu_meta');
        $buUpdate->bu_longitude = $request->input('bu_longitude');
        $buUpdate->bu_latitude = $request->input('bu_latitude');
        $buUpdate->bu_long_des = $request->input('bu_long_des');
        $buUpdate->bu_status = $request->input('bu_status');


        $buUpdate->save();

       // return redirect('/adminpanel/bu');

        //$buUpdate->fill($request->all())->save();
        //dd($buUpdate);
        return Redirect::back()->withFlashMessage('Updated Building Successfully');
    }


    public function destroy($id)
    {
        Bu::find($id)->delete();

        return Redirect::back()->withFlashMessage('Deleted Building Successfully');
    }


    public function showAllEnableBuildings()
    {
        $buAll = Bu::where('bu_status', 1)->orderby('id', 'desc')->paginate(15);
        return view('website.bu.all' , compact('buAll'));
    }


    public function ForRent()
    {
        $buAll = Bu::where('bu_status', 1)->where('bu_rent' , 0)->orderby('id', 'desc')->paginate(15);
        return view('website.bu.all' , compact('buAll'));
    }

    public function ForBuy ()
    {
        $buAll = Bu::where('bu_status', 1)->where('bu_rent' , 1)->orderby('id', 'desc')->paginate(15);
        return view('website.bu.all' , compact('buAll'));
    }

    public function showByType($type)
    {
        if(in_array($type , [0,1,2])){

            $buAll = Bu::where('bu_status', 1)->where('bu_type' , $type)->orderby('id', 'desc')->paginate(15);
            return view('website.bu.all' , compact('buAll'));
        }
        else{
            return Redirect::back();
        }

    }


    public function search(Request $request)
    {

       // $min = $request->bu_price_from == '' ? 50000 : $request->bu_price_from ;
       // $max = $request->bu_price_to == '' ? 24000000 : $request->bu_price_to;


       $requestAll = array_except($request->toArray() , ['submit', '_token' , 'page']);

        $query =DB::table('bu')->select('*');
        $array = [] ;
        $count = count($requestAll);
        $i = 0 ;

        foreach($requestAll as $key => $req){
            $i++ ;
            if($req != ''){

                if($key == 'bu_price_from' && $request->bu_price_to == '') {

                    $query->where('bu_price' ,'>=', $req);
                }
                elseif($key == 'bu_price_to' && $request->bu_price_from == ''){

                    $query->where('bu_price' ,'<=', $req);
                }
                else{

                    if($key != 'bu_price_from' && $key != 'bu_price_to'){

                        $query->where($key , $req);
                    }
                }

                $array[$key] = $req ;

            }elseif($count == $i && $request->bu_price_to != '' && $request->bu_price_from != ''){

                $query->whereBetween('bu_price',[$request->bu_price_from , $request->bu_price_to]);
                $array[$key] = $req ;
            }
        }

        $buAll = $query->paginate(15);

        return view('website.bu.all' , compact('buAll' , 'array'));

        /*
        $buAll = Bu::where('bu_status', 1)
            ->where('bu_price' , $request->bu_price)
            ->orWhere('bu_place' , $request->bu_place)
            ->orWhere('rooms' , $request->rooms)
            ->orWhere('bu_rent' , $request->bu_rent)
            ->orWhere('bu_type' , $request->bu_type)
            ->orWhere('bu_square' , $request->bu_square)
            ->orderby('id', 'desc')
            ->paginate(15);


        return view('website.bu.all' , compact('buAll'));
        */

    }


    public function showSingleBuilding($id)
    {
       // dd($id);
       $buInfo = Bu::findOrFail($id);
        // dd($buInfo->toArray());
        $same_rent = Bu::where('bu_rent' , $buInfo->bu_rent)->orderBy(DB::raw('RAND()'))->take(3)->get();
        $same_type = Bu::where('bu_rent' , $buInfo->bu_type)->orderBy(DB::raw('RAND()'))->take(3)->get();
        return view('website.bu.singleBu' , compact('buInfo' , 'same_rent' , 'same_type'));
    }


    

    public function anyData(Bu $bu)
    {

        $bus = $bu->all();

        return DataTables::of($bus)

            ->editColumn('bu_name', function ($model) {
                return '<a href="'.url('/adminpanel/bu/' . $model->id . '/edit').'">'.$model->bu_name.'</a>';
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
