<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class SettingController extends Controller
{
    public $settingId, $site_title, $site_header, $site_email, $site_phone, $site_meridian, $site_address, $site_footer, $site_footer_link;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('global_admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('settings.index', ['settings' => Setting::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function edit(Setting $setting)
    {
        abort_if(Gate::denies('global_admin_access'), \Symfony\Component\HttpFoundation\Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //$this->validate();
        //try {
            Setting::whereId($this->settingId)->update([
                'site_title' => $this->site_title,
                'site_header' => $this->site_header,
                'site_email' => $this->site_email,
                'site_phone' => $this->site_phone,
                'site_meridian' => $this->site_meridian,
                'site_address' => $this->site_address,
                'site_footer' => $this->site_footer,
                'site_footer_link' => $this->site_footer_link
            ]);
            session()->flash('success','Setting Updated Successfully!!');
            //$this->resetFields();
            //$this->update = false;
        //} catch (\Exception $ex) {
        //    session()->flash('success','Something goes wrong!!');
        //}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
