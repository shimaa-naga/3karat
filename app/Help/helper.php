<?php
/**
 * Created by PhpStorm.
 * User: misr computer
 * Date: 20/11/2018
 * Time: 01:28 ã
 */

namespace App\Help;


class helper
{






    function getSetting($settingname = 'sitename'){

        return \App\SiteSetting::where('namesetting' , $settingname)->get()[0]->value;
    }

    function bu_type(){

        $array = [
            'ÔŞÉ',
            'İíáÇ',
            'ÔÇáíÉ',

        ];

        return $array;
    }



    function bu_rent(){

        $array = [
            'Êãáíß',
            'ÅíÌÇÑ',


        ];

        return $array;
    }

    function bu_status(){

        $array = [
            'ãİÚá',
            'ÛíÑ ãİÚá',


        ];

        return $array;
    }
}