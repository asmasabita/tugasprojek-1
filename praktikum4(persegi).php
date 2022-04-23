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
            <h1>Praktikum 4</h1>
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
              <?php 
class PERSEGIPANJANG {
    private $panjang; 
    const Lebar = 8;
    function __construct($pp)
    {
        $this->panjang = $pp;
    }
    function getLuas()
    {
        return self::Lebar * $this->panjang;
    }
    function getKeliling()
    {
        return 4 * self::Lebar + 4* $this->panjang;
    }
}

echo " Lebar Pada Persegi Panjang adalah :" .PERSEGIPANJANG::Lebar;
$persegi1 = new PERSEGIPANJANG(15);
$persegi2 = new PERSEGIPANJANG(10);

echo "</br> Luas pada Persegi Panjang 1 :" .$persegi1->getLuas();
echo "</br> Keliling pada Persegi Panjang 1 :" .$persegi2->getKeliling();

echo "</br> Luas pada Persegi Panjang 2 :" .$persegi1->getLuas();
echo "</br> Keliling pada Persegi Panjang 2 :" .$persegi2->getKeliling();
?>

<hr/>
<?php 
include_once 'praktikum4(luas-keliling).php';
?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
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