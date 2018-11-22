<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AddUserRequestAdmin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;


class UsersController extends Controller
{

    public function index(){

        $user = User::all();
        return view('admin.user.index',compact('user'));
        //return view('layouts.test');
    }


    public function create(){

        return view('admin.user.add');

    }

    /*
    protected function store(AddUserRequestAdmin $request ,$admin=0)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'admin' => $admin,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/adminpanel/users')->withFlashMessage('added user successfully');
    }
    */


    public function store(Request $request ,$admin=0)
    {

       $rules =  [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
            return redirect()->back()->withErrors($validator);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'admin' => $admin,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/adminpanel/users')->withFlashMessage('added user successfully');
    }



    // functions edit & update using for fetch user show it data and update it and store data in data base

    public function edit($id){

       $user= User::find($id);

        return view('admin.user.edit', compact('user'));
    }


    public function update(Request $request , $id  ,$admin=0){

        $user = User::find($id);
        $rules =  [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],

        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
            return redirect()->back()->withErrors($validator);


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->admin = $request->input('admin');
        $user->save();
        //Session::flush('success','this user updated successfully');
       // return redirect()->route('users.show',$user->id);
        return redirect('/adminpanel/users');
    }

    public function updatePassword(Request $request){

      $user = User::find($request->user_id);
        $user->password =bcrypt($request->input('password'));
        $user->save();

        return Redirect::back()->withFlashMessage('updated password successfully');


        //dd($user);
        //return Redirect::back();
    }


public function destroy($id){

    if($id != 1){

        $user =User::find($id)->delete();
        return redirect('/adminpanel/users')->withFlashMessage('deleted user successfully');
    }

    return redirect('/adminpanel/users')->withFlashMessage('Can’t delete user No.1');

}

    public function anyData(User $user)
    {

        $users = $user->all();

        return DataTables::of($users)

            ->editColumn('bu_name', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id . '/edit').'">'.$model->bu_name.'</a>';
            })
            ->editColumn('admin', function ($model) {
                return $model->admin == 0 ? '<span class="badge badge-info">' . 'ÚÖæ' . '</span>' : '<span class="badge badge-warning">' . 'ãÏíÑ ÇáãæŞÚ' . '</span>';
            })


            ->editColumn('bu_type', function ($model) {
                return '<a href="'.url('/adminpanel/bu/' . $model->id).'"> <span class="btn btn-danger btn-circle"> <i class="fa fa-link"></i> </span> </a>';
            })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/bu/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';

                $all .= '<a href="' . url('/adminpanel/bu/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';

                return $all;
            })
            ->make(true);

    }

}
