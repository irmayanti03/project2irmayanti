<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?php include('partials/head_link.php'); ?>
    <title>project kedua SMKN 1 KATAPANG</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ====s========================================================== -->
        <?php include('partials/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include('partials/sidebar.php');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Barang Laku</h2>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header d-flex">
                                    <h5 class="card-header-title">Total Barang laku</h5>
                                    <div class="toolbar ml-auto">
                                        <a href="#" class="btn btn-primary btn-sm tambahlaku" data-id="null" data-toggle="modal" data-target="#myModallaku"><span class="fas fa-plus">Tambah Data</span></a>   
                                    </div>
                                </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first" id="baranglaku">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Barang</th>
                                                        <th>Satuan</th>
                                                        <th>Harga jual</th>
                                                        <th>Jumlah</th>
                                                        <th>Laba</th>
                                                        <th style="width: 18%; text-align: center;">Opsi</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                     <!-- isi chart -->
                                    <figure class="highcharts-figure">
                                        <div id="container"></div>
                                    </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- modal tambah data -->
            <div id="myModallaku" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg">
                    <!-- modal conten mempunyai bbrpa element -->
                    <div class="modal-content">
                        <!-- modal header -->
                        <div class="modal-header">
                             <h5 class="modal-tittle" id="ModalLabel"></h5>  
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                            <div class="modal-body">
                               <form method="post" id="form-tambah">
                                <input type="hidden" name="idbrglaku" id="idbrglaku">
                            <div class="row">
                              <div class="col-md-6">
                                <label class="col-form-label">Nama barang:</label>
                              <div class="form-group">
                               <select class="form-control" name="nmabrg" id="nmabrg">
                                <?php  
                                    $servername = "localhost";
                                    $database = "project2";
                                    $username = "root";
                                    $password = "";
                                    // create connection
                                    $conn = mysqli_connect($servername, $username, $password, $database);
                                    $sql = "SELECT * FROM tblbarang";
                                    $result = $conn->query($sql);

                                    foreach ($result as $key => $value) {

                                        echo '<option value=" '.$value['idbrg'].'">'.$value['namabrg'].'</option>';
                                    }

                                    $conn->close();
                                ?>
                                </select>
                              </div>
                              </div>
                              <div class="col-sm-6">  
                                <label class="col-form-label">satuan: </label>
                              <div class="form-group">
                                <input type="text" name="satuann" class="form-control" placeholder="Contoh: Pcs" id="satuann" required> 
                            </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <label class="col-form-label">harga jual:</label>
                                <div class="form-group">
                                  <input type="text" name="hgjual" class="form-control" placeholder="Contoh: 1.000" id="hgjual" required>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <label class="col-form-label">jumlah:</label>
                                <div class="form-group">       
                                  <input type="number" name="jmlh" class="form-control" placeholder="contoh: 20" id="jmlh" required>
                                </div>
                              </div>
                          </div>
                        <div class="row">
                              <div class="col-sm-6">
                                <label class="col-form-label">laba:</label>
                                <div class="form-group">
                                  <input type="text" name="laba" class="form-control" placeholder="contoh: 2000" id="laba" required>
                                </div>
                            </div>
                            </form>
                            </div>
                            <br>
                                         <!-- modal footer -->
                                        <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> 
                                           <button type="submit" class="btn btn-primary tambah">simpan</button>
                                        </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                <!-- modal detail barang -->
                <div id="myModalDetaill" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="label" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg">
                    <!-- modal conten mempunyai bbrpa element -->
                    <div class="modal-content">
                        <!-- modal header -->
                        <div class="modal-header">
                             <h5 class="modal-tittle" id="label"></h5>  
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                        <div class="modal-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                          <th>Nama barang</th>
                           <td id="namabarang"></td>
                      </tr>
                      <tr>
                          <th>satuan</th>
                          <td id="satuan"></td>
                      </tr>
                      <tr>
                          <th>harga jual</th>
                          <td id="hargajual"></td>
                      </tr>
                      <tr>
                          <th>jumlah</th>
                          <td id="jumlah">></td>
                      </tr>
                      <tr>
                          <th>laba</th>
                         <td id="labaa"></td>
                      </tr>
                        </thead>
                  </table>
                </div>  

                    <!-- modal footer -->
                    <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> 
                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>




            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include('partials/footer.php'); ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <?php include('partials/buttom_script.php'); ?>

        <script>
        $(document).ready(function(){
            // Menampilkan data menggunakan plufin datatables
            var tblbaranglaku = $('#baranglaku').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false,
                "columnDefs": [
                    {"className": 'text-center', "targets": 5}
                ],
                "ajax":
                    {
                        "url": "data/data_baranglaku.php", // URL file untuk proses select datanya
                        "type": "POST"
                    },
                "columnDefs": [ {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                } ],
                "order": [[ 1, 'asc' ]],
                "columns": [
                    { "data": null, width: '5%', class:'text-center'},
                    { "data": "namabrg", width: '25%'},
                    { "data": "satuan", width: '15%'},
                    { "data": "hrgjual", width: '15%'},
                    { "data": "jumlah", width: '15%'},
                    { "data": "laba", width: '7%', class:'text-center'},
                    { "render": function (data, type, row ) {
                        var html = "<a href='#' class='btn btn-primary btn-sm modal_edit' data-id="+row.idbrglaku+"><span class='fas fa-edit'></span></a> | " +
                                        "<a href='#' class='btn btn-info btn-sm modal_detail' data-id="+row.idbrglaku+"><span class='fas fa-eye'></span></a> | " +
                                        "<a href='' class='btn btn-danger btn-sm hapus' data-id="+row.idbrglaku+"><span class='fas fa-trash'></span></a>";
                                    return html;
                            
                                }
                        },

                     ]
            });

             tblbaranglaku.on( 'draw.dt', function () {
                var PageInfo = $('#baranglaku').DataTable().page.info();
                tblbaranglaku.column(0, { page: 'current' }).nodes().each( function (cell, i) {
                    cell.innerHTML = i + 1 + PageInfo.start;
                });
            });


             // menginput number
            $('#myModallaku').on('shown.bs.modal', function(){
                $('#hgjual').number( true, 2);
                $('#laba').number( true, 2);
            });



             // menampilkan modal tambah data barang
            $('.tambahlaku').click(function(){
                $('#ModalLabel').text('Tambah Barang');
                $('#form-tambah')[0].reset();
            });

            // select get data barang
            $('#nmabrg').on("change", function(){
                var id = $(this).val();
                
                $.ajax({
                    url: 'proses/get_baranglaku.php',
                    dataType: "json",
                    type: 'GET',
                    data:{id : id},
                    success: function(response){
                        console.log(response);
                        $('#satuann').val(response.satuan);
                        $('#hgjual').val(response.hrgjual);
                    }
                });
            });


             // submit form tambah data
            $('.tambah').on("click", function(e){
                e.preventDefault();
                $.ajax({
                    url: 'proses/tambah_baranglaku.php',
                    dataType: "json",
                    type: 'POST',
                    data: $('#form-tambah').serialize(),
                    success: function(response){
                        console.log(response);
                        switch(response.status){
                            case 422:
                                $('#myModallaku').find('#form-tambah')[0].reset();
                                $('#myModallaku').modal('hide');
                                $('#form-tambah')[0].reset();
                                swal({
                                    title:" Error!",
                                    text: response.msg,
                                    icon: "error", 
                                });
                                break;
                            case 200:

                                $('#myModallaku').find('#form-tambah')[0].reset();
                                $('#baranglaku').DataTable().ajax.reload();
                                $('#myModallaku').modal('hide');
                                swal({
                                    title: "Success!",
                                    text: response.msg,
                                    icon: "success",
                                   
                                });
                                break;
                                default:
                        }
                    }
                });
            });


             // menampilkan modal edit data brg
            $(document).on('click', '.modal_edit', function(){
                var idbrglaku = $(this).data("id");
                $.ajax({
                    url: "proses/select_baranglaku.php",
                    method: "POST",
                    data:{idbrglaku:idbrglaku},
                    dataType: "json",
                    success:function(data){
                        $('#myModallaku').modal('show');
                        $('#ModalLabel').text('Edit Barang');
                        $('#nmabrg').val(data.namabrg);
                        $('#satuann').val(data.satuan);
                        $('#hgjual').val(data.hrgjual);
                        $('#jmlh').val(data.jumlah);
                        $('#laba').val(data.laba);
                        $('#idbrglaku').val(data.idbrglaku);
                    }
                });
            });


             // menampilkan detail barang
             $(document).on('click', '.modal_detail', function(){
                var idbrglaku = $(this).data("id");
                console.log(idbrglaku);
                $.ajax({
                    url: "proses/select_baranglaku.php",
                    method: "POST",
                    data:{idbrglaku:idbrglaku},
                    dataType: "json",
                    success:function(data){
                        $('#myModalDetaill').modal('show');
                        $('#label').text('Detail Barang');
                        $('#namabarang').text(data.namabrg);
                        $('#satuan').text(data.satuan);
                        $('#hargajual').text(data.hrgjual);
                        $('#jumlah').text(data.jumlah);
                        $('#labaa').text(data.laba);
                        $('#idbrglaku').val(data.idbrglaku);
                    }
                });
            });


             // hapus data
            $(document).on('click', '.hapus', function(e){
                e.preventDefault();
                var idbrglaku = $(this).data("id");
                swal({
                    title: "Apakah Anda Yakin?",
                    text: "Data Yang Anda Hapus Tidak Dapat Dikembalikan",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if(willDelete){
                        $.ajax({
                            url: 'proses/hapus_baranglaku.php',
                            dataType: "json",
                            type: 'POST',
                            data: {idbrglaku:idbrglaku},
                        });
                        swal("Data Berhasil Dihapus!" , {
                            icon: "success",
                        });
                        $('#baranglaku').DataTable().ajax.reload();
                    }else{
                        swal("Data Anda Masih Tersedia");
                    }
                });
            });  
  

        });

</script>    
</body>
 
</html>