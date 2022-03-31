<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'gender',
        'email',
        'zipcode',
        'address',
        'building',
        'contents',
    ];
}
