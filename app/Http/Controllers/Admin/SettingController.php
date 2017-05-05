<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return view('admin.setting.index')->with('setting', $setting);
    }

    public function store(Request $request)
    {
        $setting = Setting::find(1);
        $setting->address = $request->address;
        $setting->zipcode = $request->zipcode;
        $setting->email = $request->email;
        $setting->{'RSIN-number'} = $request->{'RSIN-number'};
        $setting->{'KvK-number'} = $request->{'KvK-number'};
        $setting->{'SBI-code'} = $request->{'SBI-code'};
        $setting->save();
	    return redirect('beheer/setting');
    }
}
