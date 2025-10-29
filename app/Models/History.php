<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use Hasfactory;
    protected $fillable = ['lamp_id', 'status'];

    public function lamp(){
        return $this->belongsTo(Lamp::class);
    }
}