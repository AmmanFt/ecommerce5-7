<div class="col-lg-9"><br>
<h2>Konfirmasi Check Out</h2>	 
<div class="kotak2">	 	
<?php	 		
$grand_total = 0;	 		
if ($cart = $this->cart->contents())	 
    {	 	
        foreach ($cart as $item)	 	
            {	 		
                $grand_total = $grand_total + $item['subtotal'];
            }	 
        echo "<h5>Total Belanja: Rp.".number_format($grand_total,0,",",".")."</h5>";
?><br>
<form class="form-horizontal" action="<?php echo base_url()?>Customer/shopping/proses_order" method="post" name="frmCO" id="frmCO">          
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Email :</label>     
            <div class="col-xs-9">   
                <input type="email" class="form-control" name="nama" id="email" placeholder="Email">
            </div>   
        </div>  	 		
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="firstName">Nama :</label>	 
            <div class="col-xs-9">	 
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
            </div>	 
        </div>	 	
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="lastName">Alamat:</label>	 
            <div class="col-xs-9">	 
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">	 
            </div>	 	
        </div>	 		
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3"
            for="phoneNumber"> Telp:</label >
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="telp" id="telp" placeholder="No Telp">
            </div>
        </div>	
        <div class="form-group  has-success has-feedback">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-isi="Web Master">Proses Order</button>
            </div>
        </div>
    </form>
    <?php
    }	 
    else
        {
            echo "<h5>Shopping Cart masih kosong</h5>";
        }
    ?>
</div>
</div>
 <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Berhasil </h4>
            </div>
            <div class="modal-body">
              <h5 class="modal-title" id="exampleModalLabel">Order akan Segera Diproses </h5>
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