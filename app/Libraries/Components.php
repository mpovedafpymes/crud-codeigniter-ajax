<?php namespace App\Libraries;

class Components{

    public function navigation(){
        return view('templates/navigation');
    }

    public function settingsSpecificVendorCss(){
        return view('components/inventory/settings/specific_vendor_css');
    }

    public function settingsSpecificVendorJs(){
        return view('components/inventory/settings/specific_vendor_js');
    }

    public function settingsCustomCss(){
        return view('components/inventory/settings/custom_css');
    }

    public function settingsCustomJs(){
        return view('components/inventory/settings/custom_js');
    }

    public function vendorCss(){
        return view('components/products/vendor_css');
    }

    public function vendorJs(){
        return view('components/products/vendor_js');
    }

    public function js(){
        return view('components/products/_js');
    }

    public function customJs(){
        return view('components/products/_custom_js');
    }
}