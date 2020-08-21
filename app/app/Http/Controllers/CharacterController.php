<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;

class CharacterController extends Controller
{
    public function index()
    {
        return view('characters');
    }                                                                                                                         
    public function list()
    {
        $chars = Character::orderBy('created_at', 'DESC')->get();
        return view('list', [
            'chars'=>$chars
        ]);
    }                                                                                                                         
    public function store(Request $req)
    {
        $data = $req->json()->all();
        if (empty($data[0]['name'])) {
            $name="?";
        }else{
            $name=$data[0]['name'];
        }
        if (empty($data[0]['house'])) {
            $house="?";
        }else{
            $house=$data[0]['house'];
        }
        if (empty($data[0]['alias'])) {
            $alias="?";
        }else{
            $alias=$data[0]['alias'];
        }
        if (empty($data[0]['boggart'])) {
            $boggart="?";
        }else{
            $boggart=$data[0]['boggart'];
        }
        if (empty($data[0]['patronus'])) {
            $patronus="?";
        }else{
            $patronus=$data[0]['patronus'];
        }
        if (empty($data[0]['school'])) {
            $school="?";
        }else{
            $school=$data[0]['school'];
        }
        if (empty($data[0]['wand'])) {
            $wand="?";
        }else{
            $wand=$data[0]['wand'];
        }

        $c = new Character();
        $c->name=$name;
        $c->house=$house;
        $c->alias=$alias;
        $c->boggart=$boggart;
        $c->patronus=$patronus;
        $c->school=$school;
        $c->wand=$wand;
        $c->save();
    }                                                                                                                         
}
