<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class A1uniformCategoryController extends Controller
{
    public function index(){
        return view('A1uniform.index');
    }
    public function category_manager()
    {
        $categories = CategoryRepos::getAllCategories();

        return view('A1uniform.category.category_manager',
            [
                'categories' => $categories,
            ]);
    }

    public function showCategory($cat_id){
        $category = CategoryRepos::getCategoryById($cat_id);
        return view('A1uniform.category.showCategory',
            [
                'category' => $category[0]
            ]
        );
    }

    public function createCategory()
    {

        return view(
            'A1uniform.category.newCategory',
            ['category' => (object)[
                'cat_id' => '',
                'cat_name' => '',
                'cat_image' => '',
            ]]);

    }

    public function storeCategory(Request $request)
    {
        $this->formValidateCategory($request)->validate(); //shortcut
        $category = (object)[
            'cat_name' => $request->input('cat_name'),
            'cat_image' => $request->input('cat_image'),
        ];

        if($request->hasFile('cat_image')){
            $destination_path = 'public/images/category';
            $image = $request->file('cat_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('cat_image')->storeAs($destination_path, $image_name);

            $category->cat_image = $image_name;
        }

        $newCat = CategoryRepos::insertCategory($category);

        return redirect()
            ->action('A1uniformCategoryController@category_manager');
    }

    public function editCategory($cat_id)
    {
        $category = CategoryRepos::getCategoryById($cat_id); //this is always an array


        return view(
            'A1uniform.category.updateCategory',
            ['category' => $category[0]]);
    }

    public function updateCategory (Request $request, $cat_id)
    {
        if ($cat_id != $request->input('cat_id')) {
            //id in query string must match id in hidden input
            return redirect()->action('A1uniformCategoryController@category_manager');
        }

        $this->formValidateCategory($request)->validate();

        $category = (object)[
            'cat_id' => $request->input('cat_id'),
            'cat_name' => $request->input('cat_name'),
            'cat_image' => $request->input('cat_image'),
        ];

        if($request->hasFile('cat_image')){
            $destination_path = 'public/images/category';
            $image = $request->file('cat_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('cat_image')->storeAs($destination_path, $image_name);

            $category->cat_image = $image_name;
        }
        CategoryRepos::updateCategory($category);

        return redirect()->action('A1uniformCategoryController@category_manager');
    }

    public function confirmCategory ($cat_id){
        $category = CategoryRepos::getCategoryById($cat_id); //this is always an array

        return view('A1uniform.category.confirmCategory',
            [
                'category' => $category[0]
            ]
        );
    }

    public function destroyCategory (Request $request, $cat_id)
    {
        if ($request->input('cat_id') != $cat_id) {
            //id in query string must match id in hidden input
            return redirect()->action('A1uniformCategoryController@category_manager');
        }

        CategoryRepos::deleteCategory($cat_id);


        return redirect()->action('A1uniformCategoryController@category_manager');
    }

    private function formValidateCategory($request){
        return Validator::make(
            $request->all(),
            [
                'cat_name' => ['required', 'min:2'],
                'cat_image' => ['required']
            ]
        );
    }
}
