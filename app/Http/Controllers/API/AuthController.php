<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Commission;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Date;

class AuthController extends BaseController
{
    public function signin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $authUser = Auth::user(); 
            $success['token'] =  $authUser->createToken('MyAuthApp')->plainTextToken; 
            $success['name'] =  $authUser->name;
            $success['userType'] =  $authUser->userType;
   
            return $this->sendResponse($success, 'User signed in');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            //'confirm_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Error validation', $validator->errors());       
        }
        $input = $request->all();
        $input['userType'] = 0;
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
        $success['name'] =  $user->name;
      //  $success['email'] = $user->email;
        $success['userType'] =  0;
   
        return $this->sendResponse($success, 'User created successfully.');
        
    }

    public function commissions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'string',
            'com_name' => 'string',
            'com_age' => 'string',
            'com_gender' => 'string',
            'com_details' => 'string',
        ]);
        if($validator->fails()){
            return $this->sendError('Error validation', $validator->errors());
        }
        $input = $request->all();
       // $input['user_id'] = User::id();
        $input['com_status']= 0;
        $input['created_at'] = date('YYYY-MM-DD hh:mm:ss');
        $input['updated_at'] = date('YYYY-MM-DD hh:mm:ss');
        $commission = Commission::create($input);
        $success['com_name'] =$commission->com_name;
        $success['com_age'] =$commission->com_age;
        $success['com_gender'] =$commission->com_gender;
        $success['com_details'] =$commission->com_details;


        return $this->sendResponse($success, 'Commission created successfully.');
    }
   
}