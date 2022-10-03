<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blogentry;
use App\Models\EtiquetasBlog;
use Illuminate\Support\Facades\Auth;
use App\Mail\gestionSociosMailable;
use App\Mail\contactoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
  public function inicio(){
    $blogentrys = Blogentry::orderByDesc('fecha')->get();
    $blog_array=[];
    $num=0;
    foreach($blogentrys as $blogentry){
        if($num < 5){
            $num=$num+1;
            array_push($blog_array,$blogentry);
        }
    }
    $blogentrys=$blog_array;
    return view('inicio',compact('blogentrys'));
  }

  public function contacto(){
    return view('contacto');
  }

  public function admin(){
    return view('login');
  }

  public function enviar_contacto(Request $req){
    $correo= new contactoMailable($req->input('email'),$req->input('asunto'),$req->input('mensaje'));
    Mail::to('info@begolardiespsicologia.com')->send($correo);
    return view('contacto_enviado');
  }
}
