<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Yakin hapus surat ini?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a id="" class="btn btn-danger" href="<?= base_url('surat/delete/'.$row['id_surat']) ?>">
                   Hapus
                </a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->