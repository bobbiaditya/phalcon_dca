<title>Supir Truk</title>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>EDIT DATA</strong>
        </div>
        <div class="card-header">

            <a href="<?= $this->url->get('/supirtruk') ?>" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card-body">

            <form autocomplete="off" method="post" action="<?= $this->url->get('supirtruk/update/' . $supir->id_supir) ?>">
                <div class="form-group">
                    <label>Nama Pemilik</label>
                    <select class="form-control" id="id_pemilik" name="id_pemilik">
                    <option value="<?= $supir->pemilik->id_pemilik ?>"><?= $supir->pemilik->nama_pemilik ?></option>
                    <?php foreach ($pemilik as $p) { ?>
                        <option value="<?= $p->id_pemilik ?>"><?= $p->nama_pemilik ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Supir</label>
                    <input type="text" autocomplete="off" name="nama_supir" class="form-control" placeholder="Nama Supir" value="<?= $supir->nama_supir ?>">
                </div>

                <div class="form-group">
                    <label>Nopol</label>
                    <input type="text" autocomplete="off" name="nopol" class="form-control" placeholder="Nopol" value="<?= $supir->nopol ?>">
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>


            </form>

        </div>
    </div>
</div>