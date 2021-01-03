<?php

namespace App\Http\Controllers\admin;
use App\user;
use App\dispute;
use App\documents;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    //
    public function user ()
    {
         $user =  user::all();
            return view ('admin.user')->with('user',$user);
    }
    public function dispute ()
    {     $dispute = dispute::all();
        return view ( 'admin.dispute')->with('dispute',$dispute);
    }
    public function map ()
    {
     return view ('admin.map');
}
public function banner ()
{
    return view ( 'admin.banner');
}
public function documents ()
{   $documents= documents::all();
    return view ( 'admin.documents')->with('documents',$documents);
}
public function adddocs ()
{
    return view ('admin.adddocs');
}

}
