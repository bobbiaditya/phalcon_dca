<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\SupirTruk;
use App\Models\PemilikTruk;
use App\Validation\SupirValidation;
class SupirTrukController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->supir = SupirTruk::find();
    }

    public function tambahAction()
    {
        $this->view->pemilik = PemilikTruk::find();
    }

    public function prosesAction()
    {
        $validation = new SupirValidation();
        $messages = $validation->validate($_POST);
        if(count($messages))
        {
            foreach ($messages as $message)
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/supirtruk/tambah');
        }
        else
        {
            $sup = new SupirTruk();
    
            $sup->assign(
                $this->request->getPost(),
                [
                    'id_pemilik',
                    'nama_supir',
                    'nopol'
                ]
            );
            $sup->updated_at = date('Y-m-d h:i:sa');
            $sup->created_at = date('Y-m-d h:i:sa');
    
            $success = $sup->save();
            if($success)
            {
                $this->flashSession->error('Input data berhasil');
            }
    
            $this->response->redirect('/supirtruk');
        }
    }

    public function editAction($id)
    {
        $sup = SupirTruk::findFirstById_supir($id);
        $this->view->supir = $sup;   

        $find_pemilik = PemilikTruk::find([
            'conditions' => 'nama_pemilik != :name:',
            'bind' => [
                'name' => $sup->pemilik->nama_pemilik
            ],
        ]);
        $this->view->pemilik =$find_pemilik;
    }

    public function updateAction($id)
    {
        $validation = new SupirValidation();
        $messages = $validation->validate($_POST);
        if(count($messages))
        {
            foreach ($messages as $message)
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/supirtruk/tambah');
        }
        else
        {
            $sup = SupirTruk::findFirstById_supir($id);
    
            $sup->assign(
                $this->request->getPost(),
                [
                    'id_pemilik',
                    'nama_supir',
                    'nopol'
                ]
            );
            $sup->updated_at = date('Y-m-d h:i:sa');
            
    
            $success = $sup->save();
            if($success)
            {
                $this->flashSession->error('Edit data berhasil');
            }
    
            $this->response->redirect('/supirtruk');
        }
    }

    public function hapusAction($id)
    {
        $sup = SupirTruk::findFirstById_supir($id);

        $success = $sup->delete();
        if($success)
        {
            $this->flashSession->error('Delete data berhasil');
        }

        $this->response->redirect('/supirtruk');
    }
}

