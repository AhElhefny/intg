<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return response()->json(['data' => User::all()]);
    }

    public function store(Request $request){
        $user = User::create([
            'name' =>$request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return response()->json(['msg' => 'success','user'=>$user],200);
    }

    public function login(Request $request){
        if(Auth::attempt($request->all())){
            $token =auth()->user()->createToken('userToken')->plainTextToken;
            return response()->json([
                'msg' => 'success',
                'token' => $token,
                'user'=>auth()->user()
            ],200);
        }else
            return response()->json([
                'msg' => 'wrong data'
            ],404);
    }

    public function destroy(){
        \auth()->user()->tokens()->delete();
        return response()->json(['msg'=>'success logout'],200);
    }
}
