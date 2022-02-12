<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientSMTP extends Model
{
    use HasFactory;
    protected $table = 'client_smpt';

    protected $fillable = ['title', 'key', 'ip', 'description', 'client_id'];

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

}
