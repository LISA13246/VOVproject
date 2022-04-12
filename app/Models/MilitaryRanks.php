<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MilitaryRanks extends Model
{
    use HasFactory;
    protected $fillabele = [
        'MilitaryRanks'
            ];
    public function veterans(){
        return $this->hasMany(ParticipantsOfTheWar::class,'id_ranks');
    }
}
