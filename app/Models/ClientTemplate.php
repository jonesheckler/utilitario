<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'client_smtp_id'];


    public function clientSmtp()
    {
        return $this->hasOne(ClientSMTP::class, 'id', 'client_smtp_id');
    }


    public function fields()
    {
        return $this->hasMany(FieldTemplate::class)->orderBy('order');
    }

}
