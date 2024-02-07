<?php

namespace Core\User\Controllers\API\V1\Auth;
use Validator;
use Illuminate\Http\Request;
use Core\User\Models\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Core\User\Requests\UserRequest as RequestUser;
use Illuminate\Http\Exceptions\HttpResponseException;



class AuthController extends Controller{
    
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
       
        ]);

        $user = UserAuth::create([
            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if($user->save()){
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->plainTextToken;

            return response()->json([
            'message' => 'Successfully created user!',
            'accessToken'=> $token,
            ],201);
        }
        else{
            return response()->json(['error'=>'Provide proper details']);
        }
    }


    public function login(Request $request)
    {

     $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (!auth()->guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['error'=>'Provide proper details']);
        }

        $tokenResult = auth()->guard('user-api')->user()->createToken('login-token')->plainTextToken;
        return response()->json([
            'accessToken' => $tokenResult
        ]);
   

  }
}
