<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Contact &mdash; YukNikah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
          <div class="section-header">
              <div class="section-header-back">
                  <a href="<?= site_url('contacts') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            <h1>Update Contact</h1>
          </div>
 
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Update Contact</h4>
              </div>
                <div class="card-body">
                    <form action="<?= site_url('contacts/update/'. $contacts->id_contact) ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="name_contact">Nama Contact*</label>
                            <input type="text" name="name_contact" value="<?= $contacts->name_contact ?>" class="form-group" required>
                        </div>
                        <div class="form-contact">
                            <label for="info_contact">Info</label>
                            <textarea name="info_contact" class="form-control"><?= $contacts->info_contact ?></textarea>
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