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
            <h1>Praktikum 1</h1>
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
              $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
              // Cetak buah ke index ke 2
              echo "Ini adalah hasil data data buah dalam array";
              echo "<br/>$ar_buah[2]";
              // cetak jumlah buah
              echo '<br/>Jumlah buah ' .count($ar_buah);
              // cetak seluruh buah
              echo "<ol>";
              foreach ($ar_buah as $buah) {
                  echo "<li>$buah</li>";
                }
                echo "</ol>";
                // 
                // Tambahkan buah
                $ar_buah[] = "Durian";
                // hapus buah
                unset($ar_buah[1]);
                // Ubah buah index ke dua menjadi manggis
                $ar_buah[2] = "manggis";
                // cetak seluruh buah dengan index nya
                echo "<ul>";
                foreach ($ar_buah as $k => $v) {
                    echo "<li> buah index - $k adalah $v </li>";
                }
                echo "</ul>"
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