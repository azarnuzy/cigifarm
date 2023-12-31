<p>
	<a href="<?php echo base_url('admin/kategori/tambah') ?>" class="btn btn-primary">
		<i class="fa fa-plus"></i> Tambah Kategori
	</a>
</p>

<?php 
// notifikasi
if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';

}
?>

<table class="table table-bordered" id="example1">
	<caption></caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Kategori</th>
			<th>Urutan</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($kategori as $kategori) { ?>
		<tr>
			<td><?php echo $no ?></td>
			<td>
				<img src="<?php echo base_url('assets/upload/kategori/image/thumbs/'.$kategori->gambar) ?>" class="img img-responsive img-thumbnail" width="60">
			</td>
			<td><?php echo $kategori->nama_kategori ?></td>
			<td><?php echo $kategori->slug_kategori ?></td>
			<td><?php echo $kategori->urutan ?></td>
			<td>
				<a href="<?php echo base_url('admin/kategori/edit/'.$kategori->id_kategori) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
				<?php include('delete.php') ?>
			</td>
		</tr>
		<?php $no++;} ?>
	</tbody>
</table>