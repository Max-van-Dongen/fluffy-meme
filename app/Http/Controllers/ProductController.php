<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends Controller
{    
    /**
     * getAll producs
     *
     * @return void
     */
    public function getAll() {
        $prod = \App\Models\EnergyProduct::get();
        return view('prods',["prods"=>$prod,"createnew"=>isset($_GET["new"])]);
    }    
    /**
     * get a product
     *
     * @param  mixed $id
     * @return void
     */
    public function get($id) {
        $prod = \App\Models\EnergyProduct::where('id',$id)->firstOrFail();
        return view('prod',["prod"=>$prod]);

    }    
    /**
     * edit a product
     *
     * @param  mixed $id
     * @return void
     */
    public function edit($id) {
        $user = \App\Models\EnergyProduct::where('id',$id)->firstOrFail();
        $user->naam = $_POST['name'];
        $user->save();
        return redirect("/prod/$id");
    }    
    /**
     * deletes a product
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id) {
        $user = \App\Models\EnergyProduct::where('id',$id)->firstOrFail();
        $user->delete();
        return redirect("/prods");
    }    
    /**
     * creates a new product
     *
     * @return void
     */
    public function create() {
        \App\Models\EnergyProduct::create($_POST);
        return redirect('/prods');
    }
}
