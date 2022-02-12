<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'type', 'client_template_id'];
}
