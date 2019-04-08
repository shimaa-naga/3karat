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

    // by me
    public function  store(Request $request ){

        foreach(array_except($request->toArray() ,['_token' , 'submit']) as $key=> $req)
        {
/*
            $siteSettingUpdate = SiteSetting::where('namesetting' , $key)->get()[0];
            if($siteSettingUpdate->type != 3){
                $siteSettingUpdate->fill(['value' => $req])->save();
            }else{
                $fileName = uploadImage($req , '/public/website/slider/', '1600', '500');
                if($fileName){
                    $siteSettingUpdate->fill(['value' => $fileName])->save();
                }
            }
*/

/*
             DB::table('SiteSetting')
              ->where('namesetting' , $key)
              ->update(['value' => $req]);
            */

            if($key != 3){
                DB::table('SiteSetting')
                    ->where('namesetting' , $key)
                    ->update(['value' => $req]);
            }else{
                $fileName = uploadImage($req , '/public/website/slider/', '1600', '500');
                if($fileName){

                    DB::table('SiteSetting')
                        ->where('namesetting' , $key)
                        ->update(['value' => $fileName]);
                }
            }
       }

        return Redirect::back()->withFlashMessage('updated site settings successfully');
    }


//// course do it
//    public function store(Request $request , SiteSetting $siteSetting){
//
//        foreach(array_except($request->toArray() , ['_token' , 'submit']) as $key => $req){
//            $siteSettingUpdate = $siteSetting->where('namesetting' , $key)->get()[0];
//
//            if($siteSettingUpdate->type != 3){
//                $siteSettingUpdate->fill(['value' => $req])->save();
//            }else{
//
//                $fileName = uploadImage($req , '/public/website/slider/' , '1600' , '500' , $siteSettingUpdate->value);
//                if($fileName){
//                    $siteSettingUpdate->fill(['value' => $fileName])->save();
//                }
//            }
//        }
//
//        return Redirect::back()->withFlashMessage('Updated Successfully');
//    }
//







}
