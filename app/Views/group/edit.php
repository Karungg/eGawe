<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Group &mdash; YukNikah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
          <div class="section-header">
              <div class="section-header-back">
                  <a href="<?= site_url('groups') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            <h1>Update Group</h1>
          </div>
 
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Update Group</h4>
              </div>
                <div class="card-body">
                    <form action="<?= site_url('groups/update/'. $groups->id_group) ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="name_group">Nama group*</label>
                            <input type="text" name="name_group" value="<?= $groups->name_group ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="info_group">Info</label>
                            <textarea name="info_group" class="form-control"><?= $groups->info_group ?></textarea>
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