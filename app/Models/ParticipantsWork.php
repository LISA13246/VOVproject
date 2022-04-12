<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantsWork extends Model
{
    use HasFactory;
    protected $fillabele = [
        'IdParticipant',
        'IdPost',
        'IdPlaceOfWork',
        'StartOfWork',
        'EndOfWork',
        'Description'
            ];

}
