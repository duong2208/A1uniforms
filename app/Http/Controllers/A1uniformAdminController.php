<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class A1uniformAdminController extends Controller
{
    public function index(){
        return view('A1uniform.index');
    }

    //Nguyen Huu Tien Thuan
    public function admin_manager(){
        $admins = AdminRepos::getAllAdmins();

        return view('A1uniform.admin.admin_manager',
            [
                'admins' => $admins
            ]);
    }
    //End Thuan

    //Hoang Thi Thuy Duong
    public function showAdmin($ad_id){
        $admin = AdminRepos::getAdminById($ad_id);
        return view('A1uniform.admin.showAdmin',
        [
            'admin' => $admin[0]
        ]
        );
    }
    //End Duong

    //Nguyen Huu Tien Thuan
    public function editAdmin($ad_id)
    {
        $admin = AdminRepos::getAdminByID($ad_id); //this is always an array
        return view('A1uniform.admin.updateAdmin',
            [
                'admin' => $admin[0]
            ]);
    }

    public function updateAdmin(Request $request, $ad_id)
    {
        $this->formValidateAdmin($request)->validate(); //shortcut
        if ($ad_id != $request->input('ad_id')) {
            //id in query string must match id in hidden input
            return redirect()->action('A1uniformAdminController@admin_manager');
        }

        $admin = (object)[
            'ad_id' => $request->input('ad_id'),
            'ad_user' => $request->input('ad_user'),
            'ad_pass' => $request->input('ad_pass'),
            'ad_fullname' => $request->input('ad_fullname'),
            'ad_phone' => $request->input('ad_phone'),
            'ad_email' => $request->input('ad_email'),
        ];
        AdminRepos::updateAdmin($admin);
        return redirect()->action('A1uniformAdminController@admin_manager');
    }
    //End Thuan

    //Hoang Thi Thuy Duong
    public function confirmAdmin($ad_id){
        $admin = AdminRepos::getAdminById($ad_id);
        return view('A1uniform.admin.confirmAdmin',
        [
            'admin' => $admin[0]
        ]);
    }

    public function destroyAdmin(Request $request, $ad_id){
        if ($request->input('ad_id') != $ad_id){
            return redirect()->action('A1uniformAdminController@admin_manager');
        }

        AdminRepos::deleteAdmin($ad_id);

        return redirect()->action('A1uniformAdminController@admin_manager');
    }


    private function formValidateAdmin ($request){
        return Validator::make(
            $request->all(),
            [
//                'ad_user' => ['required'],
                'ad_pass' => ['required', 'min:5'],
                'ad_fullname' => ['required', 'min:5'],
                'ad_phone' => ['required', 'starts_with:0', 'digits:11'],
                'ad_email' => ['required', 'email'],
            ],
            [
                //change validation message
                'ad_phone.starts_with' => 'Phone must start with 0.'
            ]
        );
    }

    //End Duong
}
