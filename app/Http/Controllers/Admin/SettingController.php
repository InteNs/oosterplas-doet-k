<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSetting;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return view('admin.setting.index')->with('setting', $setting);
    }

    public function update(StoreSetting $request)
    {
        $setting = Setting::find(1);
        $setting->update([
            'address' => $request->address,
            'zipcode' => $request->zipcode,
            'email' => $request->email,
            'RSIN-number' => $request->{'RSIN-number'},
            'KvK-number' => $request->{'KvK-number'},
            'SBI-code' => $request->{'SBI-code'}
        ]);
        return redirect('beheer/setting');
    }
}
