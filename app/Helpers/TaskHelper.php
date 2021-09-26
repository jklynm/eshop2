<?php

namespace App\Helpers;
use \App\Models\SiteConfigration;
use \App\Models\Category;

class TaskHelper
{
    public static function getSiteConfigrationData(){
        $configration = SiteConfigration::first();
        return $configration;
    }
    public static function getCategories()
    {
        $categories = Category::where('status',1)->get();
        return $categories;
    }
}
