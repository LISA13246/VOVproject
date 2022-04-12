<?php

namespace App\Http\Controllers;

use App\Models\ParticipantsOfTheWar;
use Illuminate\Http\Request;

class SearchController extends Controller{

    public function search(Request $req){

        //$rank = ParticipantsOfTheWar::find(1)->militaryRanks;
        //dd( $rank);
        $veterans = ParticipantsOfTheWar::all();
        $veteranFilter=[];
        $i=0;
        if($req->input('name')) {
            foreach ($veterans as $veteran) {
                $initials = $veteran->surname  . " " . $veteran->name . " " . $veteran->patronymic;
                if (str_contains($initials, $req->input('name'))) {
                    $veteranFilter[$i] = $veteran;
                    $i++;
                }

            }
        }

        //return redirect()->route('search_page')->with(['veterans'=>$veteranFilter]);
        return view('search',['veterans'=>$veteranFilter]);
    }

}
