<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-acara">
    <i class="fa fa-trash-o"></i> Hapus
</button>

<div class="modal fade" id="delete-acara">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Hapus Data Acara</h4>
            </div>
            <div class="modal-body">
                <div class="callout callout-warning">
                    <h4>Peringatan!</h4>
                    Yakin ingin menghapus data ini? data yang sudah dihapus tidak dapat dikembalikan
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i>
                    Batal</button>
                <a href="<?php echo base_url('admin/acara/hapus/' . $a->id_acara) ?>" class="btn btn-danger"><i
                        class="fa fa-trash-o"></i> Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->