<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Keuntungan Harian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Tambah Keuntungan Harian</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      
      <div class="row">  

        <div class="col-md-12">

           <?php echo form_open_multipart('administrator/admin/keuntunganharian/input_aksi'); ?>
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

              <div class="form-group">
              <label for="inputName">Kembalian Awal</label>
              <input type="text" name="uang_kembali" class="form-control" id="uang_kembali">
                <?php echo form_error('uang_kembali','<div class="text-danger small" ml-3>') ?>
              </div>
              
              <div class="row">
                  <div class="col-6">
                    <label for="inputName">Hasil Pagi</label>
                    <input type="text" name="hsl_pagi" class="form-control" value="" id="hsl_pagi">
                    <!-- <?php echo form_error('hsl_pagi','<div class="text-danger small" ml-3>') ?> -->
                  </div>
                  <div class="col-6">
                    <label for="inputName">Hasil Sore</label>
                    <input type="text" name="hsl_sore" class="form-control" value="" id="hsl_sore">
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <label for="inputName">Hasil Malam</label>
                    <input type="text" name="hsl_malam" class="form-control" value="" id="hsl_malam">
                  </div>
                  <div class="col-6">
                    <label for="inputName">Total</label>
                    <input type="text" name="total" class="form-control" value="0" id="total" readonly> 

                  </div>
                </div>

              <div class="form-group">
              <label for="inputName">Lebihan</label>
                <input type="text" name="lebihan" class="form-control" id="lebihan" placeholder="">
              </div>

              <div class="form-group">
              <label for="inputName">Total Hari Ini</label>
                <input type="text" name="total_hari_ini" class="form-control" id="total_hari_ini" value="0" placeholder="Total Hari Ini" readonly>
              </div>

              

              <div class="form-group">
                <label for="inputDescription">Catatan</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="catatan"></textarea>
                
              </div>
                  </div>

                </div>
         <button type="submit" class="btn btn-primary mb-5">Simpan</button>
              <?php echo anchor('administrator/admin/keuntunganharian','<div class="btn mb-5 btn-primary">Kembali</div>') ?> 
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
   $("#hsl_pagi, #hsl_sore, #hsl_malam, #total, #uang_kembali, #lebihan, #total_hari_ini").keyup(function() {
            var hsl_pagi  = $("#hsl_pagi").val();
            var hsl_sore = $("#hsl_sore").val();
            var hsl_malam = $("#hsl_malam").val();
            var total = $("#total").val();
            var uang_kembali = $("#uang_kembali").val();
            var lebihan = $("#lebihan").val();
            var total_hari_ini = $("#total_hari_ini").val();

            var total = (parseInt(hsl_pagi) + parseInt(hsl_sore) + parseInt(hsl_malam));
            $("#total").val(total);

            var total_hari_ini = (parseInt(total) + parseInt(lebihan) - parseInt(uang_kembali));
            $("#total_hari_ini").val(total_hari_ini);        

        });
    });
</script>