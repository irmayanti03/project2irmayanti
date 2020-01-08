<!doctype html>
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
                                <h2 class="pageheader-title">Barang</h2>
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
                                    <h5 class="card-header-title">Table Barang</h5>
                                    <div class="toolbar ml-auto">
                                        <a href="#" class="btn btn-primary btn-sm modal_tambah" data-id="null" data-toggle="modal" data-target="#myModal"><span class="fas fa-plus">Tambah Data</span></a>   
                                    </div>
                                </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first" id="table_barang">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Barang</th>
                                                        <th>Jenis Barang</th>
                                                        <th>Suplier</th>
                                                        <th>Sisa</th>
                                                        <th>satuan</th>
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
            <div id="myModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg">
                    <!-- modal conten mempunyai bbrpa element -->
                    <div class="modal-content">
                        <!-- modal header -->
                        <div class="modal-header">
                             <h5 class="modal-tittle" id="exampleModalLabel"></h5>  
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
        <div class="modal-body">
            <form method="post" id="form-tambah">
            <input type="hidden" name="idbrg" id="idbrg">
        <div class="row">
          <div class="col-md-6">
            <label class="col-form-label">Nama suplier:</label>
          <div class="form-group">
            <input type="text" name="nama_suplier" class="form-control" placeholder="contoh:PT sabun colek mandiri" id="nama_suplier" required>
        </div>
          </div>
          <div class="col-sm-6">  
            <label class="col-form-label">Nama barang:</label>
          <div class="form-group">
            <input type="text" name="nama_brg" class="form-control" placeholder="contoh:sabun colek" id="nama_brg" required>
            
        </div>
          </div>
            </div>
        <div class="row">
          <div class="col-sm-6">
            <label class="col-form-label">jenis barang:</label>
            <div class="form-group">
              <input type="text" name="jenis_brg" class="form-control" placeholder="contoh:detergen" id="jenis_brg" required>
            </div>
          </div>
          <div class="col-sm-3">
            <label class="col-form-label">satuan:</label>
            <div class="form-group">       
              <input type="text" name="satuan" class="form-control" placeholder="contoh:pcs" id="satuan" required>
            </div>
          </div>
          <div class="col-sm-3">
             <label class="col-form-label">jumlah:</label>
             <div class="form-group">       
             <input type="number" name="jumlah" class="form-control" placeholder="contoh: 20" id="jumlah" required>
            </div>
        </div>
      </div>
    <div class="row">
          <div class="col-sm-6">
            <label class="col-form-label">harga beli (Rp):</label>
            <div class="form-group">
              <input type="text" name="hrgbeli" class="form-control" placeholder="contoh: 2000" id="hrg_beli" required>
            </div>
        </div>
          <div class="col-sm-6">
               <label class="col-form-label">harga jual (Rp):</label>
            <div class="form-group">       
               <input type="text" name="hrgjual" class="form-control" placeholder="contoh: 2500" id="hrg_jual" required>
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
     <div id="myModalDetail" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="label" aria-hidden="true" data-backdrop="static" data-keyboard="false">
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
                        <th>Nama Suplier</th>
                        <td id="nmsuplier"></td>
                      </tr>
                      <tr>
                          <th>Nama barang</th>
                           <td id="nmbrg"></td>
                      </tr>
                      <tr>
                          <th>jenis barang</th>
                           <td id="jnsbrg"></td>
                      </tr>
                      <tr>
                          <th>satuan</th>
                          <td id="stn"></td>
                      </tr>
                      <tr>
                          <th>harga beli</th>
                           <td id="hbeli"></td>
                      </tr>
                      <tr>
                          <th>harga jual</th>
                          <td id="hjual"></td>
                      </tr>
                      <tr>
                          <th>jumlah</th>
                          <td id="jml">></td>
                      </tr>
                      <tr>
                          <th>sisa</th>
                         <td id="ssa"></td>
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
            var tblbarang = $('#table_barang').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": false,
                "columnDefs": [
                    {"className": 'text-center', "targets": 5}
                ],
                "ajax":
                    {
                        "url": "data/data_barang.php", // URL file untuk proses select datanya
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
                    { "data": "namabrg", width: '20%'},
                    { "data": "jenisbrg", width: '20%'},
                    { "data": "suplier", width: '20%'},
                    { "data": "sisa", width: '7%', class:'text-center'},
                    { "data": "satuan", width: '10%'},
                    { "render": function (data, type, row ) {
                        var html = "<a href='#' class='btn btn-primary btn-sm modal_edit' data-id="+row.idbrg+"><span class='fas fa-edit'></span></a> | " +
                                        "<a href='#' class='btn btn-info btn-sm modal_detail' data-id="+row.idbrg+"><span class='fas fa-eye'></span></a> | " +
                                        "<a href='' class='btn btn-danger btn-sm hapus' data-id="+row.idbrg+"><span class='fas fa-trash'></span></a>";
                                    return html;
                            
                                }
                        },

                     ]
            });

            // menginput number
            $('#myModal').on('shown.bs.modal', function(){
                $('#hrg_beli').number( true, 2);
                $('#hrg_jual').number( true, 2);

            });


            tblbarang.on( 'draw.dt', function () {
                var PageInfo = $('#table_barang').DataTable().page.info();
                tblbarang.column(0, { page: 'current' }).nodes().each( function (cell, i) {
                    cell.innerHTML = i + 1 + PageInfo.start;
                });
            });

            // menampilkan modal tambah data barang
            $('.modal_tambah').click(function(){
                $('#exampleModalLabel').text('Tambah Barang');
                $('#form-tambah')[0].reset();
            });

            // menampilkan modal edit data brg
            $(document).on('click', '.modal_edit', function(){
                var idbrg = $(this).data("id");
                $.ajax({
                    url: "proses/select_barang.php",
                    method: "POST",
                    data:{idbrg:idbrg},
                    dataType: "json",
                    success:function(data){
                        $('#myModal').modal('show');
                        $('#exampleModalLabel').text('Edit Barang');
                        $('#nama_brg').val(data.namabrg);
                        $('#jenis_brg').val(data.jenisbrg);
                        $('#satuan').val(data.satuan);
                        $('#nama_suplier').val(data.suplier);
                        $('#hrg_beli').val(data.hrgbeli);
                        $('#hrg_jual').val(data.hrgjual);
                        $('#jumlah').val(data.jumlah);
                        $('#idbrg').val(data.idbrg);
                    }
                });
            });



            // submit form tambah data
            $('.tambah').on("click", function(e){
                e.preventDefault();
                $.ajax({
                    url: 'proses/tambah_barang.php',
                    dataType: "json",
                    type: 'POST',
                    data: $('#form-tambah').serialize(),
                    success: function(response){
                        console.log(response);
                        switch(response.status){
                            case 422:
                                $('#myModal').find('#form-tambah')[0].reset();
                                $('#myModal').modal('hide');
                                $('#form-tambah')[0].reset();
                                swal({
                                    title:" Error!",
                                    text: response.msg,
                                    icon: "error", 
                                });
                                break;
                            case 200:

                                $('#myModal').find('#form-tambah')[0].reset();
                                $('#table_barang').DataTable().ajax.reload();
                                $('#myModal').modal('hide');
                                swal({
                                    title: "Success!",
                                    text: response.msg,
                                    icon: "success",
                                   
                                });
                                break;
                                default:
                            // code block
                        }
                    }
                });
            });

            // menampilkan detail barang
             $(document).on('click', '.modal_detail', function(){
                var idbrg = $(this).data("id");
                console.log(idbrg);
                $.ajax({
                    url: "proses/select_barang.php",
                    method: "POST",
                    data:{idbrg:idbrg},
                    dataType: "json",
                    success:function(data){
                        $('#myModalDetail').modal('show');
                        $('#label').text('Detail Barang');
                        $('#nmsuplier').text(data.suplier);
                        $('#nmbrg').text(data.namabrg);
                        $('#jnsbrg').text(data.jenisbrg);
                        $('#stn').text(data.satuan);
                        $('#hbeli').text(data.hrgbeli);
                        $('#hjual').text(data.hrgjual);
                        $('#jml').text(data.jumlah);
                        $('#ssa').text(data.sisa);
                        $('#idbrg').val(data.idbrg);
                    }
                });
            });

            // hapus data
            $(document).on('click', '.hapus', function(e){
                e.preventDefault();
                var idbrg = $(this).data("id");
                swal({
                    title: "Apakah Anda Yakin?",
                    text: "Data Yang Anda Hapus Tidak Dapat Dikembalikan",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if(willDelete){
                        $.ajax({
                            url: 'proses/hapus_barang.php',
                            dataType: "json",
                            type: 'POST',
                            data: {idbrg:idbrg},
                        });
                        swal("Data Berhasil Dihapus!" , {
                            icon: "success",
                        });
                        $('#table_barang').DataTable().ajax.reload();
                    }else{
                        swal("Data Anda Masih Tersedia");
                    }
                });
            });  
        });
        
    </script>
</body>
 
</html>