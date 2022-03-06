<?php

namespace App\Http\Controllers;

use App\Repository\UniformRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class A1uniformUniformController extends Controller
{
    public function index(){
        return view('A1uniform.index');
    }
    public function uniform_manager()
    {
        $uniforms = UniformRepos::getAllUniforms();
        return view('A1uniform.uniform.uniform_manager',
            [
                'uniforms' => $uniforms
            ]);
    }

    public function showUniform($uni_id)
    {

        $uniform = UniformRepos::getUniformById($uni_id); //this is always an array of objects
        return view('A1uniform.uniform.showUniform',
            [
                'uniform' => $uniform[0] //get the first element
            ]
        );
    }


    public function createUniform()
    {
        return view(
            'A1uniform.uniform.newUniform',
            ['uniform' => (object)[
                'uni_id' => '',
                'uni_name' => '',
                'uni_image' => '',
                'cat_id' => '',
                'uni_material' => '',
                'uni_size' => '',
                'uni_price' => '',
                'uni_description' => '',
            ]]);
    }

    public function storeUniform (Request $request)
    {
        $this->formValidateUniform($request)->validate(); //shortcut

        $uniform = (object)[
            'uni_id' => $request->input('uni_id'),
            'uni_name' => $request->input('uni_name'),
            'uni_image' => $request->input('uni_image'),
            'cat_id' => $request->input('cat_id'),
            'uni_material' => $request->input('uni_material'),
            'uni_size' => $request->input('uni_size'),
            'uni_price' => $request->input('uni_price'),
            'uni_description' => $request->input('uni_description'),

        ];

        if($request->hasFile('uni_image')){
            $destination_path = 'public/images/uniform';
            $image = $request->file('uni_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('uni_image')->storeAs($destination_path, $image_name);

            $uniform->uni_image = $image_name;
        }

        $newUni = UniformRepos::insertUniform($uniform);

        return redirect()
            ->action('A1uniformUniformController@uniform_manager');
    }
    public function editUniform($uni_id)
    {
        $uniform = UniformRepos::getUniformById($uni_id); //this is always an array


        return view(
            'A1uniform.uniform.updateUniform',
            ['uniform' => $uniform[0]]);
    }

    public function updateUniform(Request $request, $uni_id)
    {
        if ($uni_id != $request->input('uni_id')) {
            //id in query string must match id in hidden input
            return redirect()->action('A1uniformUniformController@uniform_manager');
        }

        $this->formValidateUniform($request)->validate(); //shortcut

        $uniform = (object)[
            'uni_id' => $request->input('uni_id'),
            'uni_name' => $request->input('uni_name'),
            'uni_image' => $request->input('uni_image'),
            'cat_id' => $request->input('cat_id'),
            'uni_material' => $request->input('uni_material'),
            'uni_size' => $request->input('uni_size'),
            'uni_price' => $request->input('uni_price'),
            'uni_description' => $request->input('uni_description'),

        ];

        if($request->hasFile('uni_image')){
            $destination_path = 'public/images/uniform';
            $image = $request->file('uni_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('uni_image')->storeAs($destination_path, $image_name);

            $uniform->uni_image = $image_name;
        }
        UniformRepos::updateUniform($uniform);

        return redirect()->action('A1uniformUniformController@uniform_manager');
    }




    public function confirmUniform($uni_id){
        $uniform = UniformRepos::getUniformById($uni_id); //this is always an array

        return view('A1uniform.uniform.confirmUniform',
            [
                'uniform' => $uniform[0]
            ]
        );
    }

    public function destroyUniform(Request $request, $uni_id)
    {
        if ($request->input('uni_id') != $uni_id) {
            //id in query string must match id in hidden input
            return redirect()->action('A1uniformUniformController@uniform_manager');
        }

        UniformRepos::deleteUniform($uni_id);


        return redirect()->action('A1uniformUniformController@uniform_manager');
    }

    public function detailUniform($uni_id)
    {

        $uniform = UniformRepos::getUniformById($uni_id); //this is always an array of objects
        return view('A1uniform.homepage.detailUniform',
            [
                'uniform' => $uniform[0] //get the first element
            ]
        );
    }

    private function formValidateUniform($request)
    {
        return Validator::make(
            $request->all(),
            [
                'uni_name' => ['required', 'min:5'],
                'uni_material' => ['required', 'min:2'],
                'uni_price' => ['required', 'numeric']

            ]
        );
    }
}
