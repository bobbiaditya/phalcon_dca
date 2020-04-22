<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\PemilikTruk;
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

        $this->response->redirect('/pemiliktruk');

    }

    public function editAction($id)
    {
        $pem = PemilikTruk::findFirstById_pemilik($id);
        $this->view->pemilik = $pem;       
    }

    public function updateAction($id)
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

        $this->response->redirect('/pemiliktruk');
    }

    public function hapusAction($id)
    {
        $pem = PemilikTruk::findFirstById_pemilik($id);

        $success = $pem->delete();

        $this->response->redirect('/pemiliktruk');
    }
}

