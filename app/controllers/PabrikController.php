<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\Pabrik;
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

        $this->response->redirect('/pabrik');

    }

}

