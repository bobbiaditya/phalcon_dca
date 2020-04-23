<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DCA | Dwi Citra Anugerah</title>
    <?= $this->assets->outputCss() ?>
</head>

<body>
    <div>
        <form method="post" action="<?= $this->url->get('session/login') ?>">
            <?= $this->flashSession->output() ?>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" autocomplete="off" class="form-control" placeholder="Username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pwd" autocomplete="off" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Login">
            </div>

        </form>
    </div>