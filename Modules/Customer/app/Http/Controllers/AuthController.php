<?php

namespace Modules\Customer\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Customer\Http\Requests\CustomerSigninRequest;
use Modules\Customer\Http\Requests\CustomerSignupRequest;
use Modules\Customer\Models\Customer;

class AuthController extends Controller
{
    protected function guard()
    {
        return Auth::guard('customer');
    }

    public function signingIn(CustomerSigninRequest $request)
    {
        $validated = $request->validated();
//dd($validated);
//        if (auth()->guard('customer')->attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
//            alert()->toast('You have been successfully logged in', 'success');
//            return redirect()->route('..');
//        } else {
//            alert()->toast('The email or password is incorrect', 'error');
//            return redirect()->back()->with(['error' => 'The email or password is incorrect']);
//        }
//
        if (auth()->guard('customer')->attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            return response()->json([
                'message' => 'You have been successfully logged in',
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'message' => 'The email or password is incorrect',
                'status' => 'error'
            ], 401);
        }
    }
    public function showSignUpForm(){
        dd('showSignUpForm');
    }
    public function signingUp(CustomerSignupRequest $request)
    {
//        dd('hello worled');
//        dd($request->all());
        $validated = $request->validated();
//        dd($validated);
        if (isset($validated['avatar'])) {
            $avatar = $validated['avatar'];
        }else{
            $avatar = null;
        }
        $customer =  Customer::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'phoneNumber' => $validated['phoneNumber'],
                'address' => $validated['address'],
                'postal_code' => $validated['postal_code'],
                'city_id' => $validated['city_id'],
                'avatar' => $avatar,
            ],
        );
        $data = Customer::with('city')->find($customer->id);
//        $this->guard()->login($Customer);
//        alert()->toast('You have been successfully registered', 'success');
        return response()->json([
            'message' => 'You have been successfully registered',
            'status' => 'success',
            'data' => $data
        ], 200);
    }
}
