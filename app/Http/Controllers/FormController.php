<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FormController extends Controller
{
    /**
     * get all forms
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getAll() {
        $forms = \App\Models\EnergyForm::get();
        return view('forms',["forms"=>$forms]);
    }
    /**
     * get a form
     *
     * @param  mixed $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function get($id) {
        $form = \App\Models\EnergyForm::where('id',$id)->firstOrFail();
        return view('form',["form"=>$form]);

    }
    /**
     * edit a form
     *
     * @param  mixed $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit($id) {
        $form = \App\Models\EnergyForm::where('id',$id)->firstOrFail();
        $form->energy_id = $_POST['energy_id'];
        $form->iban = $_POST['iban'];
        $form->email = $_POST['email'];
        $form->voornaam = $_POST['voornaam'];
        $form->achternaam = $_POST['achternaam'];
        $form->plaats = $_POST['plaats'];
        $form->postcode = $_POST['postcode'];
        $form->telnr = $_POST['telnr'];
        $form->straat = $_POST['straat'];
        $form->verbruik_g = $_POST['verbruik_g'];
        $form->verbruik_e = $_POST['verbruik_e'];
        $form->save();
        return redirect("/form/$id");
    }
    /**
     * delete a form
     *
     * @param  mixed $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id) {
        $user = \App\Models\EnergyForm::where('id',$id)->firstOrFail();
        $user->delete();
        return redirect("/forms");
    }
}
