<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\Pabrik;
use App\Validation\PabrikValidation;
class PabrikController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->pabriks = Pabrik::find();
    }

    public function tambahAction()
    {

    }

    public function prosesAction()
    {
        $validation= new PabrikValidation();
        $messages = $validation->validate($_POST);
        if(count($messages))
        {
            foreach ($messages as $message)
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/pabrik/tambah');
        }
        else
        {
            $pab = new Pabrik();
            $pab->assign(
                $this->request->getPost(),
                [
                    'nama_pabrik',
                    'kode_pabrik',
                    'harga_pasir'
                ]
            );
            $pab->updated_at = date('Y-m-d h:i:sa');
            $pab->created_at = date('Y-m-d h:i:sa');
    
            $success = $pab->save();

            if($success)
            {
                $this->flashSession->error('Input data berhasil');
            }
    
            $this->response->redirect('/pabrik');
        }


    }

    public function editAction($id)
    {
        $pab = Pabrik::findFirstById_pabrik($id);
        $this->view->pabrik = $pab;       
    }

    public function updateAction($id)
    {
        $validation= new PabrikValidation();
        $messages = $validation->validate($_POST);
        if(count($messages))
        {
            foreach ($messages as $message)
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/pabrik/tambah');
        }
        else
        {
            $pab = Pabrik::findFirstById_pabrik($id);

            $pab->assign(
                $this->request->getPost(),
                [
                    'nama_pabrik',
                    'kode_pabrik',
                    'harga_pasir'
                ]
            );
            $pab->updated_at = date('Y-m-d h:i:sa');
            
    
            $success = $pab->save();
            if($success)
            {
                $this->flashSession->error('Update data berhasil');
            }
            $this->response->redirect('/pabrik');
        }
    }

    public function hapusAction($id)
    {
        $pab = Pabrik::findFirstById_pabrik($id);

        $success = $pab->delete();
        if($success)
        {
            $this->flashSession->error('Delete data berhasil');
        }
        $this->response->redirect('/pabrik');
    }

}

