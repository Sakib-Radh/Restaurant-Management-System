<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
//     function getData(Request $req)
//     {
// //       $req->validate([
// // 'username'=>'required | max:10' ,
// // 'userpassword'=>'required | min:5'
//
// ]);
//       return $req->input();
//
//     }

function getData(Request $req)
{
  $member=new Member;
  $member->name=$req->name;
    $member->password=$req->password;
      //$member->name=$req->name;
      $member->save();


}




}
