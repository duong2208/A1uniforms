<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class UniformRepos
{
    public static function getAllUniforms(){
        $sql = 'select * ';
        $sql .= 'from uniform ';
        $sql .= 'order by uni_id ';

        return DB::select ($sql);
    }

    public static function getUniformById($uni_id){
        $sql = 'select * ';
        $sql .= 'from uniform ';
        $sql .= 'where uni_id = ? ';

        return DB::select($sql, [$uni_id]);
    }


    public static function updateUniform($uniform){
        $sql = 'update uniform ';
        $sql .= 'set uni_name = ?, uni_image = ?, cat_id = ?, uni_material = ?, uni_size = ?, uni_price = ?, uni_description = ? ';
        $sql .= 'where uni_id = ? ';

        DB::update($sql, [$uniform->uni_name, $uniform->uni_image, $uniform->cat_id, $uniform->uni_material, $uniform->uni_size, $uniform->uni_price, $uniform->uni_description, $uniform->uni_id]);
    }

    public static function insertUniform($uniform){
        $sql = 'insert into uniform ';
        $sql .= '(uni_name, uni_image, cat_id, uni_material, uni_size, uni_price, uni_description) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$uniform->uni_name, $uniform->uni_image, $uniform->cat_id, $uniform->uni_material, $uniform->uni_size, $uniform->uni_price, $uniform->uni_description]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function deleteUniform($uni_id){
        $sql = 'delete from uniform ';
        $sql .= 'where uni_id = ? ';

        DB::delete($sql, [$uni_id]);
    }
}
