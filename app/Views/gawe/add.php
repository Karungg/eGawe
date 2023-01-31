<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Create Gawe &mdash; YukNikah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
          <div class="section-header">
              <div class="section-header-back">
                  <a href="<?= site_url('gawe') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            <h1>Gawe</h1>
          </div>
 
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Create Gawe / Acara</h4>
              </div>
                <div class="card-body">
                    <form action="<?= site_url('gawe') ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="name_gawe">Nama Gawe / Acara *</label>
                            <input type="text" name="name_gawe" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="date_gawe">Tanggal Acara *</label>
                            <input type="date" name="date_gawe" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="info_gawe">Info</label>
                            <textarea name="info_gawe" class="form-control"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</button></button>
                        </div>
                    </form>
                </div>
                </div>
          </div>
        </section>
<?= $this->endSection() ?>