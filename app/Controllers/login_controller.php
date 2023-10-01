<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario_Model;

class Login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $data['titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new Usuario_Model();

        // Traemos los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['pass'];
            $ba = $data['id_bandera'];
            if ($ba == 2) {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login');
            }

            // Se verifican los datos ingresados para iniciar sesión
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];

                // Se cumple la verificación, inicia la sesión
                $session->set($ses_data);
                $session->setFlashdata('msg', 'Bienvenido, ' . $data['nombre'] . ' ' . $data['apellido'] . '!!');
                return redirect()->to('/panel');
                
            } else {
                $session->setFlashdata('msg', 'Contraseña Incorrecta');
                return redirect()->to('/login');
            }

        } else {
            $session->setFlashdata('msg', "No Existe el Email o es Incorrecto");
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
