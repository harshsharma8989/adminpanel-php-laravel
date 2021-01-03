<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class documents extends Model
{
    protected $table ='documents';
    protected $primaryKey = 'Id';
    protected $fillables=['providername','documentname','documentnumber'];
}
