<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function company()
{
    return $this->belongsTo(Company::class);
}

public function client()
{
    return $this->belongsTo(Client::class);
}

public function messages()
{
    return $this->hasMany(TicketMessage::class);
}
}
