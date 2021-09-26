<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfigration extends Model
{
    use HasFactory;
    protected $table = 'site_configrations';
    protected $fillable = ['site_title','logo','email','email2','phone','mobile','address','site_info','google_map','facebook','twitter','youtube','instagram','meta_title','meta_keyword','meta_description'];
}
