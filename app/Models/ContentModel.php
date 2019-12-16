<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
    protected $table = "contents";

    protected $fillable = [
       'type',
       'file',
    ];
}
