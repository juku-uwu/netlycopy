<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Pengeluaran Harian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Tambah Pengeluaran Harian</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      
      <div class="row">  

        <div class="col-md-12">

           <?php echo form_open_multipart('administrator/admin/pengeluaranharian/input_aksi'); ?>
          <div class="card card-primary">

            <div class="card-body">
            <div class="form-group">
                  <label>Tanggal</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" name="tanggal" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                  <?php echo form_error('tanggal','<div class="text-danger small" ml-3>') ?>
                </div>

                <div class="row">
                  <div class="col-6">
                    <label for="inputName">Pagi</label>
                    <input type="text" name="pagi" class="form-control" value="" id="pagi">
                    
                  </div>
                  <div class="col-6">
                    <label for="inputName">Siang</label>
                    <input type="text" name="siang" class="form-control" value="" id="siang">
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <label for="inputName">Malam</label>
                    <input type="text" name="malam" class="form-control" value="" id="malam">
                  </div>
                  <div class="col-6">
                    <label for="inputName">Total Pengeluaran Hari Ini</label>
                    <input type="text" name="totalpengeluaran" class="form-control" value="0" id="totalpengeluaran" readonly> 

                  </div>
                </div>

                <div class="form-group">
              <label for="inputName">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Catatan Pengeluaran">
                <?php echo form_error('deskripsi','<div class="text-danger small" ml-3>') ?>
              </div>

            <div class="form-group">
                <label for="inputStatus">Cabang</label>
                <select class="form-control custom-select" name="cabang">
                  <option selected disabled>-Pilih-</option>
                  <option>Netly 1</option>
                  <option>Netly 2</option>
                  <option>Netly 3</option>
                  <option>Adit Ponsel</option>
                </select>
                <?php echo form_error('cabang','<div class="text-danger small" ml-3>') ?>
              </div>


              
                  </div>

                </div>
         <button type="submit" class="btn btn-primary mb-5">Simpan</button>
              <?php echo anchor('administrator/admin/pengeluaranharian','<div class="btn mb-5 btn-primary">Kembali</div>') ?> 
              <?php echo form_close(); ?>
    </div>
    
    </section>
  </div>
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
 </div>

 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script>
$(document).ready(function(){
   $("#pagi, #siang, #malam, #totalpengeluaran").keyup(function() {
            var pagi  = $("#pagi").val();
            var siang = $("#siang").val();
            var malam = $("#malam").val();
            var totalpengeluaran = $("#totalpengeluaran").val();
            

            var totalpengeluaran = (parseInt(pagi) + parseInt(siang) + parseInt(malam));
            $("#totalpengeluaran").val(totalpengeluaran);

                 

        });
    });
</script>