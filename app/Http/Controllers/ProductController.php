<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends Controller
{
    /**
     * get all producs
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getAll() {
        $prod = \App\Models\EnergyProduct::get();
        return view('prods',["prods"=>$prod,"createnew"=>isset($_GET["new"])]);
    }
    /**
     * get a product
     *
     * @param  mixed $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function get($id) {
        $prod = \App\Models\EnergyProduct::where('id',$id)->firstOrFail();
        return view('prod',["prod"=>$prod]);

    }
    /**
     * edit a product
     *
     * @param  mixed $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id) {
        $user = \App\Models\EnergyProduct::where('id',$id)->firstOrFail();
        $user->delete();
        return redirect("/prods");
    }
    /**
     * creates a new product
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create() {
        \App\Models\EnergyProduct::create($_POST);
        return redirect('/prods');
    }
}
