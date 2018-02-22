<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
      $title = 'Welcome To My Site';
      return view('pages.index',compact('title'));
    }
    public function about(){
      $title = 'About Us';
      return view('pages.about')->with('title',$title);
    }
    public function chords(){
      return view('pages.chords');
    }
}
