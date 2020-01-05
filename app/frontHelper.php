<?php

use App\Setting;
use App\Category;
use App\Provider;

function get_setting($key) {
    $value = '';
    $setting = Setting::where('key', $key)->first();
    if ($setting)
        $value = $setting->value;

    return $value;
}

function get_providers() {

    $providers = null;
    $providers = Provider::where('title', 'not like', '%دليل المسلم%')->get();
    return $providers;
}

function provider_service($id) {

    $services = $id;
    $services = Category::where('provider_id', $id)->get();
    return $services;
}

function general_service() {

    $generalProvider = Provider::where('title', 'like', '%دليل المسلم%')->first();
    $generalService = null;
    if ($generalProvider) {
        $generalService = Category::where('provider_id', $generalProvider->id)->get();
    }
    return $generalService;
}
