<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Meja extends Model
{

    use HasFactory;
    protected $table = 'meja';
    protected $keyType = 'string';
    protected $primaryKey = 'id_meja';

    protected static function boot(){
        parent::boot();
        static::creating(function ($model){
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function getIncrementing(){
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }


    protected $fillable = [
        'id_meja',
        'no_meja',
        'status',
    ];
}