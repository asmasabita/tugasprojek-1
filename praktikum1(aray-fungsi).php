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
    $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
    echo "<ol>";
    foreach ($ar_buah as $buah => $v) {
        echo "<li> $buah - $v </li>";
    }
    echo "</ol>";
    // Array sort mengurutkan array dalam urutan menaik
    sort ($ar_buah);
    echo "<hr/>";
    echo "</ol>";
    echo "<ol>";
    foreach ($ar_buah as $buah => $k) {
        echo "<li> $buah - $k </li>";
    }
    echo "</ol>";
    // array arsort mengurutkan array assosiatif dalam urutan menurun, sesuai dengan nilai nya
    arsort ($ar_buah);
    echo "<hr/>";
    echo "</ol>";
    echo "<ol>";
    foreach ($ar_buah as $buah => $k) {
        echo "<li> $buah - $k </li>";
    }
    echo "</ol>";
    echo "<hr>";
    ?>
    <?php 
    // array pop berguna untuk menghapus nilai terakhir dalam sebuah array kita bisa menggunakan fungsi ini, jadi fungsi array_pop kita menghapus data terakhir dari sebuah array
    $tims = ["erwin","heru","ali", "zaki"];
    array_pop($tims);
    foreach ($tims as $person) {
        echo $person. '<br/>';
    }
    echo "<hr>";
    ?>

    <?php 
    // array Push berguna untuk Menambahkan nilai ke dalam data array terakhir, dalam sebuah array kita bisa menggunakan fungsi ini, jadi fungsi array_push kita bisa menambahkan data terakhir dari sebuah array
    $tims = ["erwin","heru","ali", "zaki"];
    array_push($tims, "wati");
    foreach ($tims as $person) {
        echo $person. '<br/>';
    }
    echo "<hr>";
    ?>

    <?php
    $tims = ["erwin","heru","ali", "zaki"];
    // fungsi dari sebuah array_shift adalah menghapus nilai awal dari sebuah data array, seperti contoh di bawah ini
    array_shift($tims);
    foreach ($tims as $person) {
        echo "<br/>$person";
    }
    echo "<hr>";
    ?>
    
    <?php
    $tims = ["erwin","heru","ali", "zaki"];
    // fungsi dari sebuah array_shift adalah menambah nilai array satu atau lebih elemen ke dalam suatu array, tapi method ini menambahkannya ke awal/depan array yang dalam dunia komputer juga sering disebut sebagai prepend, seperti contoh di bawah ini
    array_unshift($tims,"joko","wati");
    foreach ($tims as $person) {
        echo "<br/>$person";
    }
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