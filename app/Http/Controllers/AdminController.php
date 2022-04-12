<?php

namespace App\Http\Controllers;
use App\Models\MilitaryRanks;
use App\Models\ParticipantsOfTheWar;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller{

    public function admin(AdminRequest  $req){

    }

    public function login(Request $req){
        //$admin = new Admin();
        //$admin->login("Liza@mail.ru");
        //$admin->password(Hash::make("12345"));
        //$admin->save();


        $admins = Admin::all();
        foreach($admins as $admin){
            if($admin->login === $req->input('login') &&
                Hash::check($req->input('password'), $admin->password)){

                $key = sha1(rand());
                $cookieKey = Cookie::make('key',$key,120);
                $cookieLogin = Cookie::make('login',$admin->login,120);
                $admin->key=$key;
                $admin->save();
                return redirect()->route("page")->cookie($cookieKey)->cookie($cookieLogin);
            };
        }
        //dd(Admin::all());
        //dd($req->input('login'),$req->input('password'));
        return redirect()->route('admin_login');
    }

    public function test(Request $req){
        dd($req);

    }
    public function deleteParticipants($id){
        $veteran = ParticipantsOfTheWar::find($id);
        $veteran->delete();
        return redirect()->route('page');
        //return view('admin_page',['veterans'=> ParticipantsOfTheWar::all()]);
    }


    public function editParticipantsGetView($id){
        $veteran = ParticipantsOfTheWar::find($id);
        return view('edit_veteran',['veteran'=>$veteran]);
    }
    public function editParticipants($id, Request $req)
    {
        $veteran = ParticipantsOfTheWar::find($id);
        $this->saveParticipants($req,$veteran);
        return redirect()->route('page');
    }


    public function addParticipantsGetView(){
        $veteran= new ParticipantsOfTheWar();
        return view('add_veteran',['veteran'=>$veteran]);
    }
    public function addParticipants(Request $req){
        $veteran = new ParticipantsOfTheWar();
        $veteran->id_ranks = 1;
        $veteran->photo = "";
        $this->saveParticipants($req, $veteran);
        return redirect()->route('page');
    }


        public function saveParticipants(Request $req,ParticipantsOfTheWar $veteran){
            $veteran->surname = $req->input('surname');
            $veteran->name = $req->input('name');
            $veteran->patronymic = $req->input('patronymic');
            $veteran->date_of_birth = $req->input('date_of_birth');
            $veteran->date_of_death = $req->input('date_of_death');
            $veteran->place_of_birth = $req->input('place_of_birth');
            $veteran->place_of_appeal = $req->input('place_of_appeal');
            $veteran->place_of_service = $req->input('place_of_service');
            $veteran->biography = $req->input('biography');
            $veteran->save();
        }

}
