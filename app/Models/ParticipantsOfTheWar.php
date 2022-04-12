<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantsOfTheWar extends Model
{
    use HasFactory;
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'date_of_birth',
        'id_ranks',
        'date_of_death',
        'place_of_appeal',
        'place_of_service',
        'place_of_birth',
        'biography',
        'photo'
            ];
    public function militaryRanks(){
        return $this->belongsTo(MilitaryRanks::class,'id_ranks','id');
    }
}
