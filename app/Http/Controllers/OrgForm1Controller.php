<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrgForm1Controller extends Controller
{
    public function homeorg(){
        return view ('admin.home_org');
    }


    public function orgform1(){
        return view ('admin.OrgForm1');
    }

    public function orgform2(){
        return view ('admin.OrgForm2');
    }

    public function orgform3(){
        return view ('admin.OrgForm3');
    }

    public function orgform4(){
        return view ('admin.OrgForm4');
    }



}
