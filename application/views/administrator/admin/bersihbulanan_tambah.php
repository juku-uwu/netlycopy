<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Bersih Bulanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Tambah Bersih Bulanan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      
      <div class="row">  

        <div class="col-md-12">

           <?php echo form_open_multipart('administrator/admin/bersihbulanan/input_aksi'); ?>
          <div class="card card-primary">

            <div class="card-body">
            
                <div class="form-group">
              <label for="inputName">Bulan/Tahun</label>
                
                <input type="text" name="bulan" class="form-control">
                <?php echo form_error('bulan','<div class="text-danger small" ml-3>') ?>
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

                <div class="row">
                  <div class="col-6">
                    <label for="inputName">Total Keuntungan</label>
                    <input type="number" name="totalkeuntungan" class="form-control" value="" id="totalkeuntungan">
                    
                  </div>
                  <div class="col-6">
                    <label for="inputName">Total Lebihan</label>
                    <input type="number" name="totallebihan" class="form-control" value="" id="totallebihan">
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <label for="inputName">Total Keluaran</label>
                    <input type="number" name="totalkeluaran" class="form-control" value="" id="totalkeluaran">
                  </div>
                  <div class="col-6">
                    <label for="inputName">Total Bersih Bulanan</label>
                    <input type="number" name="totalbersih" class="form-control" value="0" id="totalbersih" readonly> 

                  </div>
                </div>

                

            


              
                  </div>

                </div>
         <button type="submit" class="btn btn-primary mb-5">Simpan</button>
              <?php echo anchor('administrator/admin/bersihbulanan','<div class="btn mb-5 btn-primary">Kembali</div>') ?> 
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
   $("#totalkeuntungan, #totallebihan, #totalkeluaran, #totalbersih").keyup(function() {
            var totalkeuntungan  = $("#totalkeuntungan").val();
            var totallebihan = $("#totallebihan").val();
            var totalkeluaran = $("#totalkeluaran").val();
            var totalbersih = $("#totalbersih").val();
            

            var totalbersih = (parseInt(totalkeuntungan) + parseInt(totallebihan) - parseInt(totalkeluaran));
            $("#totalbersih").val(totalbersih);

                 

        });
    });
</script>