<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function login()
    {
    	return view("content.login");
    }

    public function signin(Request $req)
    {
        if (Auth::attempt(["name" => $req->name, "password" => $req->password])) {
            return redirect()->intended("/dashboard");
        }

        return redirect("/login");
    }

    public function users()
    {
    	$data["data_users"] = User::get();

    	return view("content.users.data_users", $data);
    }

    public function simpan_data_users(Request $req)
    {
    	User::create([
    		"name" => $req->name,
    		"email" => $req->email,
    		"password" => bcrypt($req->password),
    		"role" => $req->role
    	]);

    	return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/login");
    }
}
