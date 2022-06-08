<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<!doctype html>
<html class="no-js" lang="en">

<?php include 'header.php'; ?>

<body>

  <?php include 'sidebar.php'; ?>

  <!-- Right Panel -->

  <div id="right-panel" class="right-panel">

    <?php include 'sidebar2.php'; ?>

    <div class="breadcrumbs">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Scanner</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="content mt-3">
      <div class="animated fadeIn">
        <div class="row">

          <div class="col-md-12">
            <div class="card">

              <div class="card-body">
                <!-- Row -->
                <div class="row">
                  <!-- Datatables -->
                  <div class="col-lg-6">
                    <!-- Simple Tables -->
                    <div class="card">

                      <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                            <tr>
                              <th>Arahkan Kode QR Ke Kamera!</th>

                            </tr>
                          </thead>
                          <tr>
                            <th>

                              <div class="container">
                                <div class="row">
                                  <div class="col-md-4 col-md-offset-4">
                                    <div class="panel panel-danger">
                                      <!-- <div class="panel-heading">
                                <h3 class="panel-title">Arahkan Kode QR Ke Kamera!</h3>
                              </div> -->
                                      <div class="panel-body text-center">
                                        <canvas></canvas>
                                        <hr>
                                        <select></select>
                                      </div>
                                      <div class="panel-footer">
                                        <!-- <center><a class="btn btn-danger" href="../tambahDataWarga/tambahData.php">Kembali</a></center> -->
                                      </div>
                                    </div>
                                  </div>

                                </div>
                              </div>

                            </th>
                          </tr>

                        </table>
                      </div>
                      <div class="card-footer"></div>
                    </div>
                  </div>
                </div>
                <!--Row-->
              </div>
            </div>
          </div>


        </div>
      </div><!-- .animated -->



    </div>

    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../js/ruang-admin.min.js"></script>
    <script src="../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../js/demo/chart-area-demo.js"></script>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/qrcodelib.js"></script>
    <script type="text/javascript" src="js/webcodecamjquery.js"></script>
    <script type="text/javascript">
      var arg = {
        resultFunction: function(result) {
          //$('.hasilscan').append($('<input name="noijazah" value=' + result.code + ' readonly><input type="submit" value="Cek"/>'));
          // $.post("../cek.php", { noijazah: result.code} );
          var redirect = 'cek.php';
          $.redirectPost(redirect, {
            nik: result.code
          });
        }
      };

      var decoder = $("canvas").WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery;
      decoder.buildSelectMenu("select");
      decoder.play();
      /*  Without visible select menu
          decoder.buildSelectMenu(document.createElement('select'), 'environment|back').init(arg).play();
      */
      $('select').on('change', function() {
        decoder.stop().play();
      });

      // jquery extend function
      $.extend({
        redirectPost: function(location, args) {
          var form = '';
          $.each(args, function(key, value) {
            form += '<input type="hidden" name="' + key + '" value="' + value + '">';
          });
          $('<form action="' + location + '" method="POST">' + form + '</form>').appendTo('body').submit();
        }
      });
    </script>
  </div><!-- /#right-panel -->

  <!-- Right Panel -->

  <?php include 'footer.php'; ?>

</body>

</html>