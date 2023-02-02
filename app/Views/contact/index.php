<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Contacts &mdash; YukNikah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
          <div class="section-header">
            <h1>Contact</h1>
            <div class="section-header-button">
              <a href="<?= site_url('contacts/new') ?>" class="btn btn-primary">Add New</a>
            </div>
          </div>

          <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible show fade">
              <div class="alert-body">
                <div class="btn close" data-dismiss="alert">X</div>
                <b>Success !</b>
                <?= session()->getFlashdata('success') ?>
              </div>
            </div>
          <?php endif ?>

          <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible show fade">
              <div class="alert-body">
                <div class="btn close" data-dismiss="alert">X</div>
                <b>Error !</b>
                <?= session()->getFlashdata('error') ?>
              </div>
            </div>
          <?php endif ?>
 
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Data My Contacts</h4>
                <div class="card-header-action">
                  <a href="<?= site_url('contacts/trash') ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Trash</a>
                </div>
              </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped table-md">
                    <tbody><tr>
                      <th>No</th>
                      <th>Name Contact</th>
                      <th>Alias</th>
                      <th>Telepon</th>
                      <th>Email</th>
                      <th>Info</th>
                      <th>Grup</th>
                      <th>Action</th>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
                </div>
          </div>
        </section>
<?= $this->endSection() ?>