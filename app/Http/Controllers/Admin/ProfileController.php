<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function add()
    {
        return view('admin.profile.create');
    }

    public function create()
    {
        return view('admin/profile/create');
    }

    public function edit($id)
    {
        return view('admin.profile.edit');
    }

    public function update(Request $request, $id)
    {
        return view('admin/profile/create');
    }

  
}
