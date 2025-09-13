<?php

namespace App\Http\Controllers\Backend\Farhad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileSettingController extends Controller
{
    public function edit()
    {
        return view('backend.layouts.profile-setting.edit');
    }


}
