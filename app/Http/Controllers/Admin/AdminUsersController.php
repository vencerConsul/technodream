<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }

    public function index(){
        return view('admin.pages.users.index');
    }

    public function ShowAddUser(){
        return view('admin.pages.users.add');
    }

    public function StoreUser(Request $request){
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'gender' => 'required|in:Male,Female',
            'role' => 'required|in:Admin,HR,Employee',
            'position' => 'required'
            
        ]);
    }
}
