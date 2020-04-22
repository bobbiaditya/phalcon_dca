<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\PemilikTruk;
use App\Validation\PemilikValidation;
class PemilikTrukController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->pemilik = PemilikTruk::find();
    }

    public function tambahAction()
    {

    }

    public function prosesAction()
    {
        $validation = new PemilikValidation();
        $messages = $validation->validate($_POST);
        if(count($messages))
        {
            foreach ($messages as $message)
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/pemiliktruk/tambah');
        }
        else
        {
            $pem = new PemilikTruk();
            $pem->assign(
                $this->request->getPost(),
                [
                    'nama_pemilik',
                ]
            );
            $pem->updated_at = date('Y-m-d h:i:sa');
            $pem->created_at = date('Y-m-d h:i:sa');
    
            $success = $pem->save();

            if($success)
            {
                $this->flashSession->error('Input data berhasil');
            }
            $this->response->redirect('/pemiliktruk');
        }

    }

    public function editAction($id)
    {
        $pem = PemilikTruk::findFirstById_pemilik($id);
        $this->view->pemilik = $pem;       
    }

    public function updateAction($id)
    {
        $validation = new PemilikValidation();
        $messages = $validation->validate($_POST);
        if(count($messages))
        {
            foreach ($messages as $message)
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/pemiliktruk/edit');
        }
        else
        {
            $pem = PemilikTruk::findFirstById_pemilik($id);
            $pem->assign(
                $this->request->getPost(),
                [
                    'nama_pemilik',
                ]
            );
            $pem->updated_at = date('Y-m-d h:i:sa');
            
            $success = $pem->save();
            
            if($success)
            {
                $this->flashSession->error('Edit data berhasil');
            }
    
            $this->response->redirect('/pemiliktruk');
        }
    }

    public function hapusAction($id)
    {
        $pem = PemilikTruk::findFirstById_pemilik($id);

        $success = $pem->delete();
        
        if($success)
        {
            $this->flashSession->error('Delete data berhasil');
        }
        $this->response->redirect('/pemiliktruk');
    }
}

