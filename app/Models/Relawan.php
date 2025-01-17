<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'satker_bnn';

    public function satker()
    {
        return $this->belongsTo(Satker::class, 'group_id');
    }
}
