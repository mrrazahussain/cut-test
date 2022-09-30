<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(Request $request)
    {
        // return $request->all();
        $user = User::where('email', $request->email)->first();
        //    dd( Hash::make($request->password), $user->password);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }

             $token = $user->createToken('my-app-token')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token,
            ];

             return response($response, 201);
    }

    function adduser(Request $request){
      $users = new User;
      $users->fname=$request->fname;
      $users->lname=$request->lname;
      $users->photo=$request->photo;
      $users->email=$request->email;
      $users->mobile=$request->mobile;
      $users->laborcontract=$request->laborcontract;
      $users->emiratesid=$request->emiratesid;
      $users->passport=$request->passport;
      $users->password=Hash::make($request->password);
      $users->address=$request->password;
      $users->role=$request->role;
      $users->save();
    }

}
