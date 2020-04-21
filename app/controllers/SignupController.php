<?php
declare(strict_types=1);

namespace App\Controllers;
// namespace App\Models;

use App\Models\Users;
date_default_timezone_set("Asia/Bangkok");
class SignupController extends ControllerBase
{

    public function indexAction()
    {
        
    }

    public function registerAction()
    {
        $user = new Users();

        $user->assign(
            $this->request->getPost(),
            [
                'username',
                'pwd'
            ]
        );
        $user->updated_at = date('Y-m-d h:i:sa');
        $user->created_at = date('Y-m-d h:i:sa');
        // Store and check for errors
        $success = $user->save();

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = "Thanks for registering!";
        } else {
            $message = "Sorry, the following problems were generated:<br>"
                     . implode('<br>', $user->getMessages());
        }

        // passing a message to the view
        $this->view->message = $message;
    }
}

