<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CompareController extends Controller
{    
    /**
     * show form
     *
     * @return void
     */
    public function compare() {
        $products = \App\Models\EnergyProduct::get();
        return view('compare',["products"=>$products]);
    }    
    /**
     * create a new form
     *
     * @param  mixed $id
     * @return void
     */
    public function create($id) {
        \App\Models\EnergyForm::create($_POST);
        return redirect('/compare');

    }
}
