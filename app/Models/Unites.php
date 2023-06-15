<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unites extends Model
{
    use HasFactory;

    protected $fillable=[
        'number',
        'address',
        'name',
        'price',
        'bank_id',
        'clients_id',
        'image'
    ];



public function residential()
{
    $units = Unit::pluck('residential', 'id')->toArray();
    return view('residential', compact('units'));
}

public function commercial()
{
    $units = Unit::pluck('commercial', 'id')->toArray();
    return view('commercial', compact('units'));
}
}