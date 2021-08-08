<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function checkLogin(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required|min:3'
        ]);

        $user_data = array(
            'name'          => $request->get('name'),
            'password'      => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('main/successLogin');
        }else{
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function insertProduct(Request $request){
        // $this->validate($request,[
        //     'name'      => 'required',
        //     'note'  => 'required'
        // ]);


            $name = $request->get('name') ?: $this->faker->name();
            $note = $request->get('note') ?: Str::random(50);
            $hash = Str::random(16);

        $insert = DB::table('products')
            ->insert(array(
                'category_id' => \rand(1,10),
                'name' => $name,
                'note' => $note,
                'unique_hash' => $hash
            ));


        if($insert){
            return $this->successLogin();
        }

    }

    function successLogin(){

        $Categories = DB::table('categories')
        ->join('products', 'categories.id', '=', 'products.category_id')
        ->select('categories.name AS Cname', 'products.*')
        ->get();

        return view('successLogin')->with(array('list' => $Categories));

    }

    //new product
    function addProduct(){
        return view('newProduct');
    }


    //
}
