<?php
namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('admin.setting.index', compact('settings'));
    }

    public function edit(Setting $setting)
    {
        return view('admin.setting.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'value' => 'required',
        ]);

        $setting->update(['value' => $request->value]);
        Setting::clearCache();

        return redirect()->route('admin.setting.index')->with('success', 'Pengaturan berhasil diperbarui.');
    }
}