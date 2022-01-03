<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Support\Facades\Hash;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
            $this->validateLogin($request);
     
            $this->updateLogin($request);

            if (Auth::attempt(['email' => $request->email,'password' => $request->password,])){
    

                return redirect('/kardex');
    
            }
        
            return back()->withErrors(['password'=>'Datos no validos']);

                //return redirect('reporte');
    
            
            //return view('auth.login',compact('login '));
          

    }
    protected function validateLogin(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);
    }
    
    protected function updateLogin(Request $request){
    
        
        $usuario = User::find(4);
        
       // $usuario->password = Hash::make('password');
    
        
       // $usuario->save();
    }

    public function logout (Request $request, Redirector $redirect){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $redirect->to('/login')->with('status','Has cerrado sesión');
    }
}

