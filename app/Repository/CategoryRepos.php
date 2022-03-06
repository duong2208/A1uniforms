<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CategoryRepos
{
    public static function getAllCategories () {
        $sql = 'select * ';
        $sql .= 'from category ';
        $sql .= 'order by cat_id ';

        return DB::select ($sql);
    }

    public static function getCategoryById ($cat_id){
        $sql = 'select * ';
        $sql .= 'from category ';
        $sql .= 'where cat_id = ? ';

        return DB::select($sql, [$cat_id]);
    }

    public static function insertCategory ($category){
        $sql = 'insert into category ';
        $sql .= '(cat_name, cat_image) ';
        $sql .= 'values (?, ?) ';

        $result =  DB::insert($sql, [$category->cat_name, $category->cat_image]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function updateCategory ($category){
        $sql = 'update category ';
        $sql .= 'set cat_name = ?, cat_image = ? ';
        $sql .= 'where cat_id = ? ';

        DB::update($sql, [$category->cat_name, $category->cat_image, $category->cat_id]);

    }

    public static function deleteCategory($cat_id){
        $sql = 'delete from category ';
        $sql .= 'where cat_id = ? ';

        DB::delete($sql, [$cat_id]);
    }
}
