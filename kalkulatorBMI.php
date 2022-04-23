<?php 
include_once 'header.php';
include_once 'sidebar.php';
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">KALKULATOR BMI</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="container-fluid">
              <form action="hasil.php" method="$_GET">
              <div class="form-group row">
                <label class="col-4">Pilih Jenis Kelamin</label> 
                <div class="col-8">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="jeniskelamin" id="jeniskelamin_0" type="radio" class="custom-control-input" value="L"> 
                    <label for="jeniskelamin_0" class="custom-control-label">Laki-laki</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="jeniskelamin" id="jeniskelamin_1" type="radio" class="custom-control-input" value="P"> 
                    <label for="jeniskelamin_1" class="custom-control-label">Wanita</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="umur" class="col-4 col-form-label">Usia Anda</label> 
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-edit"></i>
                      </div>
                    </div> 
                    <input id="umur" name="umur" placeholder="Tulis usia anda" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="TB" class="col-4 col-form-label">Tinggi Badan</label> 
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-child"></i>
                      </div>
                    </div> 
                    <input id="TB" name="TB" placeholder="Tulis tinggi badan" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-balance-scale"></i>
                      </div>
                    </div> 
                    <input id="bb" name="bb" placeholder="Tulis berat badan" type="text" class="form-control">
                  </div>
                </div>
              </div> 
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
            <div>
            </div>
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
include_once 'footer.php';

?>