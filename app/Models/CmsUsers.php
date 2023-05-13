<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsUsers extends Model
{

    static $TECNICO= "3";
    static $ASESOR= "2";
    static $admin= "1";

    protected $table = "cms_users";
    use HasFactory;
}
