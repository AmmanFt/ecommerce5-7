      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Data Customer</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/admin')?>">Home</a></li>
            <li class="breadcrumb-item active">Category        </li>
            <li class="breadcrumb-item active">Customer        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                    <div class="row d-flex justify-content-center">
                      <div class="card card-primary">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-striped text-nowrap">
                            <thead class="text-white">
                              <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                            <tbody class="text-white">
                              <?php 
                                  $no = 1;
                                  foreach($customer as $u){ 
                                  ?>
                              <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->nama ?></td>
                                <td><?php echo $u->email ?></td>
                                <td><?php echo $u->alamat ?></td>
                                <td><?php echo $u->telp ?></td>
                                <td width="120">
                                  <a href="<?php echo site_url('Admin/crud/edit/'.$u->id) ?>"
                                 class="btn btn-small text-warning"><i class="fas fa-edit"></i> Edit</a>
                                <?php echo form_open_multipart('Admin/crud/hapus');?>
                                  <a href="<?php echo site_url('Admin/crud/hapus/'.$u->id) ?>"
                                  class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
                                <?php echo form_close(); ?>
                                </td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
