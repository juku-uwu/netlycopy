  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Netly Ponsel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- small box -->
            <div class="col-md-12">
            <div class="card">             
              <div class="card-body">

                    <!-- Post -->
                      <!-- /.user-block -->
                        <div class="card card-primary card-outline">
                          <div class="card-body box-profile">
                            <div class="text-left">
                            <h2 style="font-family: inherit;" class="font-size-22 font-bold uc text-center">Daftar Harga</h2>

                            <table id="example2" class="table table-bordered table-striped table-hover">           
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Provider</th>
                  <th>Kuota</th>
                  <th>Harga</th>
                  <th>Deskripsi</th>
                  
                </tr>
                </thead>
                <tbody>               
                <?php
                $no = 1;
                foreach ($tb_stok as $st) : ?>
                 <tr>
                      <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $st->provider?></td>
                      <td><?php echo $st->kuota?></td>
                      <td><?php echo number_format($st->harga,0,',','.');?></td>
                      <td><?php echo $st->deskripsi?></td>                       
                      
                  </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
              </table>
                      </div>
              <!-- /.card-body -->
                    </div>

                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      
        <!-- /.row -->
        <!-- Main row -->
  
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

