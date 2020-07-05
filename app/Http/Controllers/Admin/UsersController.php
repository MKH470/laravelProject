<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('showAdminCp1');
    }
    public  function showAdminCp(){
        return "welcome in the CP";
    }
    public  function showAdminCp1(){
        return "welcome in the CP1";
    }
    public  function showAdminCp2(){
        return "welcome in the CP2";
    }
}
