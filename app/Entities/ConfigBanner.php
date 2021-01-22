<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ConfigBanner extends Model
{
    protected $table = 'config_banner';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
