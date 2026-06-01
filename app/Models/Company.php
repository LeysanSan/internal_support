<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function clients()
{
    return $this->hasMany(Client::class);
}

public function tickets()
{
    return $this->hasMany(Ticket::class);
}
}
