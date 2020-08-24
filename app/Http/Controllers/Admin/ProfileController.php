<?php
// カリキュラム課題の再提出です

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //以下に課題を追記しています
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function create()
    {
        // return view('layouts.profile');
        return view('admin.profile.create');
    }
    
    
    // public function update()
    // {
        // return redirect('admin/profile/edit');
    // }
}
