<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class auth implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null){
        //si el usuario no esta logueado
        if(!session()->get('logged_in')){
            //entonces redireccionar a la pagina del login page 
            return redirect()->to('/login');
        }
    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){
        
    }
}