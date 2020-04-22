<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilik Truk</title>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>Pemilik Truk</strong>
        </div>
        <div class="card-header">
            <a href="<?= $this->url->get('/pemiliktruk/tambah') ?>" class="btn btn-primary btn-sm float-left"><span class="fas fa-plus" style="padding-right: 7px;"></span>Input</a>
            <?= $this->flashSession->output() ?>
        </div>
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-bordered table-hover table-striped table-head-fixed">
                <thead>
                    <tr>
                        <th>Nama Pemilik Truk</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pemilik as $p) { ?>
                    <tr>
                        <td><?= $p->nama_pemilik ?></td>
                        <td>
                            <a href="<?= $this->url->get('pemiliktruk/edit/' . $p->id_pemilik) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= $this->url->get('pemiliktruk/hapus/' . $p->id_pemilik) ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>