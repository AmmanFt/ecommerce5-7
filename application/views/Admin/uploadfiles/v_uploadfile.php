      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Upload File</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin')?>">Home</a></li>
            <li class="breadcrumb-item active">Upload        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                    <div class="row d-flex justify-content-center">
                        <!-- left column -->
                        <div class="col-md-4">
                          <!-- general form elements -->
                          <div class="card card-primary">
                            <div class="card-header">
                              <div class="card-title">Upload File</div>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                          <?php echo form_open_multipart('Admin/upload/uploadfile');?>
                              <div class="card-body">
                                <div class="form-group">
                                 <label for="foto">File</label>
                                 <input class="form-control" type="file" id="berkas" name="berkas" />
                                </div>
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                              </div>
                              <!-- /.card-body -->

                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-isi="Web Master">Submit</button>
                              </div>
                            <?php echo form_close();?>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Berhasil </h4>
            </div>
            <div class="modal-body">
              <h5 class="modal-title" id="exampleModalLabel">File Ditambahkan</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
            </div>
          </div>
        </div>
      </div>
<script type="text/javascript">
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('isi')
    var modal = $(this)
    modal.find('.modal-title').text('Submit Masukan Paket  ' + recipient)
    modal.find('.modal-body input').val(recipient)
  })</script>