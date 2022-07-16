<?php

namespace Modules\SPP\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPaymentSpp extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\SPP\Database\factories\DetailPaymentSppFactory::new();
    }
}
