<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\User; 
use App\student;
use App\staff;
use Illuminate\Support\Facades\Auth; 
use Validator;
//use Laravel\Passport\HasApiTokens;
use HasApiTokens;



class UserController extends Controller 
{
public $successStatus = 200;
/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 

    function getData(){
        $result =User::all();
        return(response()->json(array( "data" => $result)));
    }


    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $result= student::where('email',request('email'))->first();
            if(!$result){
                $result= staff::where('email',request('email'))->first();
            }
            if($result->status==0){
                return response()->json(['error'=>'Account deactivated. Contact your college authorities.'], 401); 
            }
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            if($user->email_verified_at==null){
                //return response()->json(['error'=>'Email not verified'], 401); 
                return response()->json(["data"=>$result,'success' => $success, "successCode"=>$this-> successStatus]); 
            }
            else{
            return response()->json(["data"=>$result,'success' => $success, $this-> successStatus]); 
            }
        } 
        else{ 
            return response()->json(['error'=>'Check your credentials'], 401); 
        } 
    }

    public function logout(){
        $user = Auth::user()->token();
        $user->revoke();
        return ["message"=>"Logged Out"]; // modify as per your need
    }
/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'email' => 'required|email', 
            'password' => 'required', 
        ]);
if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
$input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
return response()->json(['success'=>$success], $this-> successStatus); 
    }
/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 
}