<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class ProgramController extends Controller
{
    //
    function getData(){
        return [
            'Name' => 'Leo',
            'Surname' => 'Gabriel',
            'Email' => 'gtinashe21@gmail.com',
            'Phone Number' => '0772450254'
        ];
    }

    function saveData(Request $request){
        $member = new Member();
        $member->name=$request->name;
        $member->phone=$request->phone;
        $member->email=$request->email;
        $member->save();
        return [
            'status'=> 200,
            'message'=>'Data has been successfully saved!!!!!!!!!'
        ];
        

    }
}
