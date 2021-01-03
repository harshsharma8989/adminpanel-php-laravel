<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispute extends Model
{
    //
    protected $table = 'dispute';
    protected $primaryKey = 'dispute_id';
    protected $fillable = [
        'dispute_type','dispute_name', 'status','action',
    ];
}
