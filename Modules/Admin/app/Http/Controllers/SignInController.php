<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Http\Requests\SignInRequest;

class SignInController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function showSignInForm()
    {
        return view('admin::layouts.auth.sign-in');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
    public function signingIn(SignInRequest $request)
    {
//        $validated = $request->validated();
//
////        if (auth()->guard('admin')->attempt(['email' => $validated['email'], 'password' =>$validated['password']])) {
////            alert()->toast('You have been successfully logged in', 'success');
////            return redirect()->route('admin.show.dashboard');
////        }
////        else {
////            alert()->toast('The email or administrative number or password is incorrect', 'error');
////            return redirect()->back()->with(['error' => 'The email or password is incorrect']);
////        }
//        if (auth()->guard('admin')->attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
//            return response()->json([
//                'message' => 'You have been successfully logged in',
//                'status' => 'success'
//            ]);
//        } else {
//            return response()->json([
//                'message' => 'The email or password is incorrect',
//                'status' => 'error'
//            ], 401);
//        }
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }

        $success = $this->respondWithToken($token);

        return $this->sendResponse($success, 'User login successfully.');
    }
    protected function respondWithToken($token)
    {
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ];
    }

}
