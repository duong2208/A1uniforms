<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class HomepageRepos
{
    public static function getAllCategories(){
        $sql = 'select * ';
        $sql .= 'from category ';
        $sql .= 'order by cat_id ';

        return DB::select($sql);
    }

    public static function resultSearch($search){
        $name = '%'.$search->search.'%';
        $sql = 'select * ';
        $sql .= 'from uniform ';
        $sql .= 'where uni_name like ? ';

        return DB::select ($sql, [$name]);
    }
}
