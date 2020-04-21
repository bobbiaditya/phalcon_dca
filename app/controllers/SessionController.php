<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\Users;
class SessionController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function hasilAction()
    {
        $user_cek=$this->request->getPost();

        $find=Users::findByusername($user_cek['username']);

        $message='';
        if($find[0]->pwd==$user_cek['pwd']){
            $this->getDI()->getShared("session");
            // $this->session->set('user-name', $find[0]->username);
            $this->session->name = $find[0]->username;
            $message=$this->session->name;
            // echo 'bisa';
        }
        else{
            echo('wrong passwod');
            $this->view->disable();
        }

        $this->view->message = $message;
    }

    public function logoutAction()
    {
        $this->session->destroy();
        
        $this->response->redirect('/session');

    }

}

