<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class siteSettingController extends Controller
{


    public function index(){
        $sitesetting = SiteSetting::all();
        return view('admin.sitesetting.index', compact('sitesetting'));
    }

    public function  store(Request $request ){

        foreach(array_except($request->toArray() ,['_token' , 'submit']) as $key=> $req)
        {


             DB::table('SiteSetting')
              ->where('namesetting' , $key)
              ->update(['value' => $req]);



           // echo $key.'|'.$req.'<br>';
           // $siteSettingUpdate = $siteSetting->where('namesetting' , $key)->get()[0];
           // $siteSettingUpdate->fill(['value' => $req])->save();

       }

        return Redirect::back()->withFlashMessage('updated site settings successfully');
    }


}
