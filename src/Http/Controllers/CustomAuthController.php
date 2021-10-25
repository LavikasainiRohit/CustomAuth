<?php
namespace DevinGray\CustomAuth\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DevinGray\CustomAuth\Classes\CustomRegister;
use DevinGray\CustomAuth\Models\User;
use DevinGray\CustomAuth\Http\Requests\RegisterRequest;
use Auth;
use Hash;


class CustomAuthController extends Controller
{
    protected $customRegister;

    public function __construct(CustomRegister $customRegister)
    {
        $this->customRegister = $customRegister;
    }

    public function create()
    {
        return $this->customRegister->showRegisterView();
    }

    public function store(RegisterRequest $request)
    {
        return $this->customRegister->createNewUser($request);
    }
    public function login(){

        return view("custom-auth::login");

    }

    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }


     public function logout(Request $request)
     {
         if (Auth::check()) {
             Auth::logout();
         }
         return redirect('login')->withFlashMessage('Permission Denied!!! You do not have administrative access')->withFlashType('danger');
     }
}
