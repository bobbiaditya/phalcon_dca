<title>Pemilik Truk</title>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>EDIT DATA</strong>
        </div>
        <div class="card-header">
            <a href="<?= $this->url->get('pemiliktruk') ?>" class="btn btn-secondary">Kembali</a>
            

        </div>
        <div class="card-body">
            <form autocomplete="off" method="post" action="<?= $this->url->get('pemiliktruk/update/' . $pemilik->id_pemilik) ?>">
                <?= $this->flashSession->output() ?>
                <div class="form-group">
                    <label>Nama Pemilik Truk</label>
                    <input type="text" name="nama_pemilik" class="form-control" placeholder="Nama pabrik" value="<?= $pemilik->nama_pemilik ?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>