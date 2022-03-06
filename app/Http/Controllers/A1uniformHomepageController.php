<?php

namespace App\Http\Controllers;

use App\Repository\HomepageRepos;
use App\Repository\UniformRepos;
use Illuminate\Http\Request;

class A1uniformHomepageController extends Controller
{
    public function homepage(){
        $categories = HomepageRepos::getAllCategories();
        $uniform = UniformRepos::getAllUniforms();
        return view('A1uniform.homepage',
        [
            'categories' => $categories,
            'uniform' => $uniform
        ]);
    }

    public function search(Request $request){
        $categories = HomepageRepos::getAllCategories();
        $search = (object)[
            'search' => $request->input('search'),
        ] ;

        $resultSearch = HomepageRepos::resultSearch($search);

        return view('A1uniform.homepage.search',
        [
            'categories' => $categories,
            'resultSearch' => $resultSearch

        ]);
    }

    public function detailUniform($uni_id){
        $uniform = UniformRepos::getUniformById($uni_id); //this is always an array of objects
        return view('A1uniform.homepage.detailUniform',
            [
                'uniform' => $uniform[0]//get the first element
            ]
        );
    }
}
