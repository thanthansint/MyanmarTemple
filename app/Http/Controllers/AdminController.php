<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function loginAdmin(Request $request) {
        $validatedData = $request->validate([
        'name' => 'required|max:50',
        'password' => 'required|min:8',
        'email' => 'required|email|unique:users'
    ]);

        error_log($request->name);
        $results = \App\Admin::where('name', $request->name)->where('email', $request->email)->where('password', $request->password)->get();
        if (sizeOf($results)>0) {
            return view('main');
        }else {
            return view('main');
        }
    }
    public function loginAdminView(Request $request) {
        return view('loginAdmin');
    }
}
