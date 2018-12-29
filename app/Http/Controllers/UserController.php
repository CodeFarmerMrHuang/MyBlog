<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    static public function index()
    {
//        $response = $_REQUEST;
//        dump($response);
//        $users = \App\Models\User::all()->toArray();
//        dd($users);
        $api = file_get_contents('http://info.sporttery.cn/interface/interface_mixed.php?action=fb_list&pke=&_=1545379978000');
        $api = iconv("gb2312", "utf-8//IGNORE",$api);
        $p1 = explode('var data=', $api);
        $p2 = explode(';getData();', $p1[1]);
        dd(json_decode($p2[0]));
    }
}
