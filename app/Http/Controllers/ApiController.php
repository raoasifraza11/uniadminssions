<?php

namespace App\Http\Controllers;

use App\User;

class ApiController extends Controller
{
    //
    public function getSubscribersList(){
        $users = User::all()->where('role_id', 3);

        $results = array();


        foreach ($users as $user){
            $results[] = [ 'No.' => $user->id,'email' => $user->email];
        }


        // die if not found
        if(empty($results)){
            return die("Subscibers users not Found!");

        }

        return response()->json($results);
    }

    public function getSubscribersListFilter($id){
        $user = User::all()->where('role_id', 3)->find($id);

        // die if not found
        if(!isset($user)){
           return die("Subsciber Not Found!");

        }

        // generate json
        $result = ['email' => $user->email];

        return response()->json($result);
    }
}
