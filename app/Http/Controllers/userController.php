<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use DB;

class userController extends Controller
{
    public function login(Request $request)
    {
        config()->set( 'auth.defaults.guard', 'user' );
        \Config::set('jwt.user', 'App\User'); 
        \Config::set('auth.providers.users.model', \App\Models\User::class);

        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Email/Password yang anda masukan salah'], 400);
            }
            $updateToken = User::where('email', $request->email)
            ->update([
            'token' => $token
            ]);
            
            // sekarang ini feb user id ini taro di response juga feb
            $userdataid = User::select('id')
            ->where('email', '=', $request->email)
            ->get();
            
            return response()->json(compact('token','userdataid'));
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
    }

    public function register(Request $request)
    {
        try {
            //code...
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|max:30|unique:users',
                'nik' => 'required|string|size:16|unique:users',
                'namaLengkap' => 'required|string|min:2|max:30',
                'alamat' => 'required|string|min:10',
                'noTelp' => 'required|string|min:10|max:12|starts_with:0|unique:users',
                'gender' => 'required|in:pria,wanita',
                'password' => 'required|string|min:6',
            ]);

            if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
            }

            $user = User::create([
                'email' => $request->get('email'),
                'nik' => $request->get('nik'),
                'namaLengkap' => $request->get('namaLengkap'),
                'alamat' => $request->get('alamat'),
                'noTelp' => $request->get('noTelp'),
                'gender' => $request->get('gender'),
                'password' => Hash::make($request->get('password')),
            ]);

            // $token = JWTAuth::fromUser($user);

            // $updateToken = User::where('email', $request->email)
            // ->update([
            //     'token' => $token
            // ]);
            return response()->json(compact('user'),201);
        } catch (\Throwable $th) {
            //throw $th;
            echo $th;
            return response()->json("bad request",400);
        }

        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|string|email|max:30|unique:users',
        //     'nik' => 'required|string|size:16|unique:users',
        //     'namaLengkap' => 'required|string|min:2|max:30',
        //     'alamat' => 'required|string|min:10',
        //     'noTelp' => 'required|string|min:10|max:12|starts_with:0|unique:users',
        //     'gender' => 'required|in:pria,wanita',
        //     'password' => 'required|min:6|confirmed'
        // ]);

        // if($validator->fails()){
        //     return response()->json($validator->errors()->toJson(), 400);
        // }

        // $user = User::create([
        //     'email' => $request->get('email'),
        //     'nik' => $request->get('nik'),
        //     'namaLengkap' => $request->get('namaLengkap'),
        //     'alamat' => $request->get('alamat'),
        //     'noTelp' => $request->get('noTelp'),
        //     'gender' => $request->get('gender'),
        //     'password' => Hash::make($request->get('password')),
        // ]);

        // $token = JWTAuth::fromUser($user);

        // $updateToken = User::where('email', $request->email)
        // ->update([
        //     'token' => $token
        //  ]);

        // return response()->json(compact('user'),201);
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
