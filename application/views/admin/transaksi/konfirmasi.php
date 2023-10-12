<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#delete-<?php echo $header_transaksi->kode_transaksi ?>">
	<i class="fa fa-check"></i> Konfirmasi
</button>

<div class="modal fade" id="delete-<?php echo $header_transaksi->kode_transaksi ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title text-center">Konfirmasi Transaksi</h4>
				</div>
				<div class="modal-body">
					<div class="callout callout-warning">
						<h4>Peringatan!</h4>
						Yakin ingin menghapus data ini? data yang sudah dihapus tidak dapat dikembalikan
					</div>
				</div>
				<div class="modal-footer">
                <a href="<?php echo base_url('admin/transaksi/konfirmasi/'.$header_transaksi->kode_transaksi) ?>" class="btn btn-success"><i class="fa fa-check"></i> Konfirmasi</a>
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
<!-- /.modal -->