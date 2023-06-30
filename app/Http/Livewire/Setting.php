<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Setting as Settings;

class Setting extends Component
{
    public
        $settings,
        $site_title,
        $site_header,
        $site_email,
        $site_phone,
        $site_meridian,
        $site_address,
        $site_footer,
        $site_footer_link,
        $settingId,
        $addSetting =  false,
        $updateSetting = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteSettingListner'=>'deleteSetting'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'site_title' => 'required',
        'site_header' => 'required',
        'site_email' => 'required',
        'site_phone' => 'required',
        'site_meridian' => 'required',
        'site_address' => 'required',
        'site_footer' => 'required',
        'site_footer_link' => 'required',

    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields(){
        $this->site_title = '';
        $this->site_header = '';
        $this->site_email = '';
        $this->site_phone = '';
        $this->site_meridian = '';
        $this->site_address = '';
        $this->site_footer = '';
        $this->site_footer_link = '';
    }

    public function render()
    {
        $this->settings = Setting::select('id', 'site_title', 'site_header', 'site_email', 'site_phone', 'site_meridian', 'site_address', 'site_footer', 'site_footer_link')->get();
        return view('livewire.setting');
    }

    /**
     * Open Add Setting form
     * @return void
     */
    public function addSetting()
    {
        $this->resetFields();
        $this->addSetting = true;
        $this->updateSetting = false;
    }

    /**
     * store the user inputted setting data in the settings table
     * @return void
     */
    public function storeSetting()
    {
        //$this->validate();
        try {
            Setting::create([
                'site_title' => $this->site_title,
                'site_header' => $this->site_header,
                'site_email' => $this->site_email,
                'site_phone' => $this->site_phone,
                'site_meridian' => $this->site_meridian,
                'site_address' => $this->site_address,
                'site_footer' => $this->site_footer,
                'site_footer_link' => $this->site_footer_link
            ]);
            session()->flash('success','Setting Created Successfully!!');
            $this->resetFields();
            //$this->addSetting = false;
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
    }

    /**
     * show existing setting data in edit settings form
     * @param mixed $id
     * @return void
     */
    public function editSetting($id){
        try {
            $setting = Setting::findOrFail($id);
            if( !$setting) {
                session()->flash('error','Setting not found');
            } else {
                $this->site_title = $setting->site_title;
                $this->site_header = $setting->site_header;
                $this->site_email = $setting->site_email;
                $this->site_phone = $setting->site_phone;
                $this->site_meridian = $setting->site_meridian;
                $this->site_address = $setting->site_address;
                $this->site_footer = $setting->site_footer;
                $this->site_footer_link = $setting->site_footer_link;
                $this->settingId = $setting->id;
                $this->updateSetting = true;
                $this->addSetting = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }

    }

    /**
     * update the setting data
     * @return void
     */
    public function updateSetting()
    {
        $this->validate();
        try {
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
            $this->resetFields();
            $this->updateSetting = false;
        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to setting listing setting
     * @return void
     */
    public function cancelSetting()
    {
        $this->addSetting = false;
        $this->updatSetting = false;
        $this->resetFields();
    }

    /**
     * delete specific setting data from the settings table
     * @param mixed $id
     * @return void
     */
    public function deleteSetting($id)
    {
        try{
            Setting::find($id)->delete();
            session()->flash('success',"Setting Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }

}
