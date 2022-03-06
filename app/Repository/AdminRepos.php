<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    //Nguyen Huu Tien Thuan
    public static function getAllAdmins(){
        $sql = 'select * ';
        $sql .= 'from admin ';
        $sql .= 'order by ad_id ';

        return DB::select($sql);
    }

    public static function getAdminById($ad_id){
        $sql = 'select * ';
        $sql .= 'from admin ';
        $sql .= 'where admin.ad_id = ? ';

        return DB::select($sql, [$ad_id]);
    }

    public static function updateAdmin($admin){
        $sql = 'update admin ';
        $sql .= 'set ad_fullname = ?, ad_phone = ?, ad_email = ? ';
        $sql .= 'where ad_id = ? ';

        DB::update($sql, [$admin->ad_fullname, $admin->ad_phone, $admin->ad_email, $admin->ad_id]);

    }
    //End Thuan


    //Hoang Thi Thuy Duong
    public static function deleteAdmin($ad_id){
        $sql = 'delete from admin ';
        $sql .= 'where ad_id = ? ';

        DB::delete($sql, [$ad_id]);
    }

    public static function loginAdmin($ad_user){
        $sql = 'select ad_user, ad_pass ';
        $sql .= 'where ad_user = ? ';

        DB::select($sql, [$ad_user]);
    }

    //End Duong
}
