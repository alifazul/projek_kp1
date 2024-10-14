

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src = "<?= base_url('plugins/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap 4 -->
    <script src = "<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('dist/js/adminlte.js')?>"></script>
    <script src = "<?= base_url('plugins/select2/js/select2.full.min.js')?>"></script>
    <!-- DataTables  & Plugins -->
    <script src = "<?= base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
    <script src = "<?= base_url('plugins/jszip/jszip.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
    <script src = "<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
    <!-- Sweetalert2 -->
    <script src = "<?= base_url('plugins/sweetalert2/sweetalert2.min.js')?>"></script>

    <script>
        let kat1 = $("#filter-kat1").val()
        let kat2 = $("#filter-kat2").val()
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "print", "colvis"],
                   /* initComplete: function () {
                        var counter = 0;
                        this.api().columns( [5,6] ).every( function () {
                            var column = this;
                            counter++;
                            var select = $('<select class="select2" style="width: 100%;"><option value="">All</option></select>')
                                .appendTo( $('#search' + counter) )
                                .on( 'change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );
        
                                    column
                                        .search( val ? '^'+val+'$' : '', true, false )
                                        .draw();
                                } );
                                column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option value="'+d+'">'+d+'</option>' );
                            } );
                        } );
                        this.api().columns( [5,6] ).every( function () {
                            var column = this;
                            counter++;
                            var select = $('<select class="select2" style="width: 100%;"><option value="">All</option></select>')
                                .appendTo( $('#search' + counter) )
                                .on( 'change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );
        
                                    column
                                        .search( val ? '^'+val+'$' : '', true, false )
                                        .draw();
                                } );
                                column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option value="'+d+'">'+d+'</option>' );
                            } );
                        } );
                    }*/
            }).buttons().container().appendTo('#example1_wrapper');   
        })
/*
        $(document).ready(function(){
            var tb_surat = $("#tbl_search").DataTable({
                autoWidth: false,
                serverSide : true,
                processing: true,
                order: [[1, 'asc']],
                columnDefs: [{
                    orderable: false,
                    targets: [0,5]
                }],

                ajax : {
                    url: "<?= base_url('surat/getdata') ?>",
                    method : 'POST'
                },

                columns: [
                    {
                        "data": null
                    },
                    {
                        "data": "surat_dari"
                    },
                    {
                        "data": "author"
                    },
                    {
                        "data": "description"
                    },
                    {
                        
                    },
                    {
                        "data": function(data) {
                            return `<td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-primary btn-edit" data-id="${data.id}"><i class="fas fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger btn-delete" data-id="${data.id}"><i class="fas fa-trash"></i></button>
                                    </div>
                                    </td>`
                        }
                    }
                ]
            })
        });
    */
       
    $(document).ready( function () {
           var table = $("#tbl_search").DataTable({
                    "responsive": true,
                    "lengthChange": true,
                    "autoWidth": true,
                    "orderCellsTop": true,
            });
            // Office Column search Select
            $('#filterkat1').on('change', function() {
                table.column(5).search( this.value).draw();
            });
            // Clear Office search select and redraw column
            $('#btnfilterkat1').on('click', function() {
                $("#filterkat1").val('');
                table.search('').columns(5).search('').draw();
            });

            // Office Column search Select
            $('#filterkat2').on('change', function() {
                table.column(6).search( this.value).draw();
            });
            // Clear Office search select and redraw column
            $('#btnfilterkat2').on('click', function() {
                $("#filterkat2").val('');
                table.search('').columns(6).search('').draw();
            });

             // Office Column search Select
             $('#filterbulan').on('change', function() {
                table.column(2).search( this.value).draw();
            });
            // Clear Office search select and redraw column
            $('#btnfilterbulan').on('click', function() {
                $("#filterbulan").val('');
                table.search('').columns(2).search('').draw();
            });

             // Office Column search Select
             $('#filtertahun').on('change', function() {
                table.column(2).search( this.value).draw();
            });
            // Clear Office search select and redraw column
            $('#btnfiltertahun').on('click', function() {
                $("#filtertahun").val('');
                table.search('').columns(2).search('').draw();
            });
    } );

        $('.hapus_notif').on('click', function(){
            var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin hapus data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
        });
        const swal = $('.swal').data('swal');
        if(swal){
            Swal.fire({
                title: "Good job!",
                text: swal,
                icon: "success",
                timer: 2000
            });
        }    
        $(".filter").on('change',function(){
            //console.log("Filter");
            
            //console.log([kat1,kat2])
        })
/*
        function sel(){
            $("#s_s").DataTable({
                "ajax":{
                    "url" : "",
                    "type" : "post",
                    "data" : {
                        kat1:$('#sel_kat1').val(),
                        kat2:$('#sel_kat2').val()
                    }
                },
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper');
        }
        sel();

        $('#sel_kat1').change(function(){
            sel();
        })

        $('#sel_kat2').change(function(){
            sel();
        })
        
        function hapus($id_surat){
            Swal.fire({
            title: "Hapus?",
            text: "You won't be able to revert this!",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "Batal"
            }).then((result) => {
                $.ajax({
                    type: 'POST',
                    url: '',
                    data: {
                        id_surat:id_surat
                    },
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.success,
                                icon: "success",
                                timer: 2000
                            }).then((result)=>{
                                if(resul.value){
                                    window.location.href = 
                                }
                            })
                        }
                    }
                })
                if (result.isConfirmed) {
                    Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                    });
                }

            });
        }
        */

    </script>
</body>

</html>