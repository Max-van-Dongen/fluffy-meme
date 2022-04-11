<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CompareController extends Controller
{
    /**
     * show energy compare form
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function compare() {
        $products = \App\Models\EnergyProduct::get();
        return view('compare',["products"=>$products]);
    }
    /**
     * create a new form entry in the database
     *
     * @param  mixed $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create($id) {
        \App\Models\EnergyForm::create($_POST);
        return redirect('/compare');

    }
}
