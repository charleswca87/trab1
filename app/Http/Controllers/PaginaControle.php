<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaControle extends Controller
{
    public function Pagi1()
    {
        $Nome="Charles";
        $Email='Email@gmail.com';
        $idade='31';
        $telefone='383741-1111';
        $Mensagem='Olá Mundo';
        return view('Pagi1')->with('Nome',$Nome)->with('Email',$Email)->with('idade',$idade)->with('Telefone',$telefone)->with('Mensagem',$Mensagem);
    }
    public function Pagi2()
    {
        $Opiniao="Acho isso legal";
        $foto='imagem.jpg';
        $Mensagem='Olá Mundo';
        return view('Pagi2')->
        with('Opiniao',$Opiniao)->with('foto',$foto)->with('Mensagem',$Mensagem);
    }
    public function Pagi3()
    {
        $Video="youtube...";
        $Imagem='imagem.jpg';
        $Comentario='legal';
        $Curtida='sim';
        return view('Pagi3')->with('Video',$Video)->with('Imagem',$Imagem)->with('Comentario',$Comentario)->with('Curtida',$Curtida);
     }
}
