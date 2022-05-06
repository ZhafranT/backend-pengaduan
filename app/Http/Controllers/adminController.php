<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class adminController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
            $updateToken = Admin::where('email', $request->email)
            ->update([
            'token' => $token
         ]);
         
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:30|unique:users',
            'firstName' => 'required|string|min:2|max:25',
            'lastName' => 'string|min:2|max:25',
            'alamat' => 'required|string|min:10',
            'noTelp' => 'required|string|min:10|max:12|starts_with:0',
            'gender' => 'required|in:pria,wanita',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = Admin::create([
            'email' => $request->get('email'),
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'alamat' => $request->get('alamat'),
            'noTelp' => $request->get('noTelp'),
            'gender' => $request->get('gender'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        $updateToken = Admin::where('email', $request->email)
        ->update([
            'token' => $token
         ]);

        return response()->json(compact('user'),201);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json(['token_expired'], 400);

        } catch (TokenInvalidException $e) {

            return response()->json(['token_invalid'], 400);

        } catch (JWTException $e) {

            return response()->json(['token_absent'], 400);

        }

        return response()->json(compact('user'));
    }
}
