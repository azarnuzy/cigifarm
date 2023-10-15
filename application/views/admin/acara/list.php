<p>
    <a href="<?php echo base_url('admin/acara/tambah') ?>" class="btn btn-primary">
        <i class="fa fa-plus"></i> Tambah Acara
    </a>
</p>

<?php
// notifikasi
if ($this->session->flashdata('sukses')) {
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
            <th>Thumbnail</th>
            <th>Banner</th>
            <th>Nama Acara</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Konten</th>
            <th>Link Registrasi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($acara as $a) { ?>
            <tr>
                <td>
                    <?php echo $no ?>
                </td>
                <td>
                    <img src="<?php echo base_url('assets/upload/image/acara/' . $a->thumbnail) ?>"
                        class="img img-responsive img-thumbnail" width="60">
                </td>
                <td>
                    <img src="<?php echo base_url('assets/upload/image/acara/' . $a->banner) ?>"
                        class="img img-responsive img-thumbnail" width="60">
                </td>
                <td>
                    <?php echo $a->name ?>
                </td>
                <td>
                    <?php echo strlen($a->description) > 100 ? substr($a->description, 0, 100) . '...' : $a->description; ?>
                </td>
                <td>
                    <?php echo $a->date ?>
                </td>
                <td>
                    <?php echo $a->time ?>
                </td>
                <td>
                    <?php echo strlen($a->content) > 100 ? substr($a->content, 0, 100) . '...' : $a->content; ?>
                </td>
                <td>
                    <?php echo strlen($a->register_url) > 100 ? substr($a->register_url, 0, 100) . '...' : $a->register_url; ?>
                </td>
                <td>
                    <a href="<?php echo base_url('admin/acara/ubah/' . $a->id_acara) ?>" class="btn btn-warning btn-xs"><i
                            class="fa fa-edit"></i> Edit</a>

                    <?php include('delete.php') ?>
                </td>
            </tr>
            <?php $no++;
        } ?>
    </tbody>
</table>