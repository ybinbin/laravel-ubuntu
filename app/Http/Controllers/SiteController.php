<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\lain;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        $name = '<span style="color:red">Jelly</font>';
        // return view('site.about')->with('name',$name);
        // return view('site.about')->with(
        //     ['name' => $name,
        //     'sex' => '男']
        //     );
        $data['name'] = 'Jelly';
        $data['sex'] = '男';
        // return view('site.about')->with($data);
        $name = 'Jelly';
        $sex = '男';
        $people = ['Bob', 'Jim', 'petter'];
        return view('site.about',compact('name','sex','people'));
    }

    public function contact()
    {
        return view('site.contact');
    }

}
