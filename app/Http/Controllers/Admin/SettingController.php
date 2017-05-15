<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use App\Setting;
use App\Slider;

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

    public function slider()
    {
        $slider = Slider::find(1);
        return view('admin.setting.slider')->with('slider', $slider);
    }

    public function editSlider(Request $request)
    {
        $slider = Slider::find(1);

        for ($i = 1; $i < 10; $i++) {
            if ($request->{'image'.$i} != null) {
                if (Input::file('image'.$i)->isValid()) {
                    // Remove the old image if it exists
                    File::delete(base_path("public") . "" . $slider->{'image'.$i});
                    $slider->{'image'.$i} = $this->addImage($i);
                } else {
                    return redirect('beheer/setting/slider');
                }
            }
        }

        $slider->save();
        return redirect('beheer/setting/slider');
    }

    public function deleteSlider($id)
    {
        $slider = Slider::find(1);
        File::delete(base_path("public") . "" . $slider->{'image'.$id});
        $slider->{'image'.$id} = null;
        $slider->save();
        return redirect('beheer/setting/slider');
    }

    private function addImage($i)
    {
        $destinationPath = 'images/uploads';
        $extension = Input::file('image'.$i)->getClientOriginalExtension();
        $fileName = 'slider' . date("Y-m-d") . '-' . rand(11111, 99999) . '.' . $extension;

        # save and link image
        Input::file('image'.$i)->move($destinationPath, $fileName);
        return  '/' . $destinationPath . '/' . $fileName;
    }
}
