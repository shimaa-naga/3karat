<?php
/**
 * Created by PhpStorm.
 * User: misr computer
 * Date: 20/11/2018
 * Time: 01:28 �
 */

namespace App\Help;


class helper
{






    function getSetting($settingname = 'sitename'){

        return \App\SiteSetting::where('namesetting' , $settingname)->get()[0]->value;
    }

    function bu_type(){

        $array = [
            '���',
            '����',
            '�����',

        ];

        return $array;
    }



    function bu_rent(){

        $array = [
            '�����',
            '�����',


        ];

        return $array;
    }

    function bu_status(){

        $array = [
            '����',
            '��� ����',


        ];

        return $array;
    }
}