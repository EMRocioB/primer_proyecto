<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='index';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }

    
    public function quienes_somos()
    {
        $data['titulo']='quienes_somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    public function acercade()
    {
        $data['titulo']='acercade';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acercade');
        echo view('front/footer_view');
    }
    public function registrar_usuario()
    {
        $data['titulo']='registrar_usuario';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registrar_usuario');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo']='login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function catalogo()
    {
        $data['titulo']='catalogo';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/catalogo');
        echo view('front/footer_view');
    }
}
