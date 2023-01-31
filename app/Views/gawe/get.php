<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Gawe &mdash; YukNikah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
          <div class="section-header">
            <h1>Gawe</h1>
          </div>
 
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Data Gawe / Acara</h4>
              </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped table-md">
                    <tbody><tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Created At</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Irwansyah Saputra</td>
                      <td>2017-01-09</td>
                      <td>Status</td>
                      <td>
                      <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                      <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                    </tr>
                  </tbody>
                </table>
              </div>
                </div>
          </div>
        </section>
<?= $this->endSection() ?>