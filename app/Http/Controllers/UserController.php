<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{
    /**
     * get all users
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getAll() {
        $users = \App\Models\User::get();
        return view('users',["users"=>$users,"createnew"=>isset($_GET["new"])]);
    }
    /**
     * get a user
     *
     * @param  mixed $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function get($id) {
        $user = \App\Models\User::where('id',$id)->firstOrFail();
        return view('user',["user"=>$user]);

    }
    /**
     * edit a user
     *
     * @param  mixed $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id) {
        $duplicateCheck = \App\Models\User::where('email',$_POST['email'])->first();
        if ($duplicateCheck) return redirect("/user/$id?dupem=1");
        $user = \App\Models\User::where('id',$id)->firstOrFail();
        $user->name = $_POST['name'];
        $user->role = $_POST['role'];
        $user->email = $_POST['email'];
        $user->save();
        return redirect("/user/$id");
    }
    /**
     * delete a user
     *
     * @param  mixed $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function delete($id) {
        $user = \App\Models\User::where('id',$id)->firstOrFail();
        $user->delete();
        return redirect("/users");
    }
    /**
     * create a new user
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create() {
        $duplicateCheck = \App\Models\User::where('email',$_POST['email'])->first();
        if ($duplicateCheck) return redirect("/users?dupem=1");
        $_POST["password"] = "yes";
        \App\Models\user::create($_POST);
        return redirect('/users');
    }
}
