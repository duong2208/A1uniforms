<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ManualAuthController extends Controller
{
    public function ask(Request $request){
        return view('A1uniform.manualAuth.login');
    }

    public function signin(Request $request){
        $ad_user = $request->input('ad_user');
        $ad_pass = sha1($request->input('ad_pass'));

        $account = AdminRepos::getAllAdmins();

        $this->formValidateLogin($request)->validate(); //shortcut
        for($i = 0; $i < count($account); $i++) {
            if ($ad_user == $account[$i]->ad_user && $ad_pass == $account[$i]->ad_pass) {
                break;
            }
        }
        if ($i < count($account)) {
            Session::put('ad_user', $request->input('ad_user'));
            return redirect()->route('A1uniform.index');
        } else {
            return redirect()->route('auth.ask');
        }
//            Session::put('ad_user', $request->input('ad_user'));
//            return redirect()->route('A1uniform.index');
        }




    public function signout(){
        if (Session::has('ad_user')){
            Session::forget('ad_user');
        }
        return redirect()->action('ManualAuthController@ask');
    }

    private function formValidateLogin ($request){
        return Validator::make(
            $request->all(),
            [
                'ad_user' => ['required'],
                'ad_pass' => ['required', 'min:5'],
            ]
        );
    }
}
