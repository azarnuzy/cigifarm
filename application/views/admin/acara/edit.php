<?php
// error upload
if (isset($error)) {
    echo '<p class="alert alert-warning">';
    echo $error;
    echo '</p>';
}

// notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

// form open
echo form_open_multipart(base_url('admin/acara/ubah/' . $acara['id_acara']), ' class="form-horizontal"');
?>

<div class="form-group form-group-lg">
    <label class="col-md-2 control-label">Nama Acara</label>
    <div class="col-md-8">
        <input type="text" name="name" class="form-control" placeholder="Nama Acara" value="<?= $acara['name']; ?>"
            required>
    </div>
</div>
<div class="form-group form-group-lg">
    <label class="col-md-2 control-label">Deskripsi Acara</label>
    <div class="col-md-8">
        <input type="text" name="description" class="form-control" placeholder="Deskripsi Acara"
            value="<?= $acara['description']; ?>" required>
    </div>
</div>
<div class="form-group form-group-lg">
    <label class="col-md-2 control-label">Tanggal Acara</label>
    <div class="col-md-8">
        <input type="text" name="date" class="form-control" placeholder="Tanggal Acara" value="<?= $acara['date']; ?>"
            required>
    </div>
</div>
<div class="form-group form-group-lg">
    <label class="col-md-2 control-label">Waktu Acara</label>
    <div class="col-md-8">
        <input type="text" name="time" class="form-control" placeholder="Waktu Acara" value="<?= $acara['time']; ?>"
            required>
    </div>
</div>
<div class="form-group form-group-lg">
    <label class="col-md-2 control-label">Registrasi Link</label>
    <div class="col-md-8">
        <input type="text" name="register_url" class="form-control" placeholder="Waktu Acara"
            value="<?= $acara['register_url']; ?>" required>
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Thumbnail Acara</label>
    <div class="col-md-8">
        <input type="file" name="thumbnail" class="form-control" required="required">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Banner Acara</label>
    <div class="col-md-8">
        <input type="file" name="banner" class="form-control" required="required">
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Content</label>
    <div class="col-md-8">
        <textarea name="content" class="form-control" placeholder="content"
            id="editor"><?php echo $acara['content']; ?></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label"></label>
    <div class="col-md-5">
        <button class="btn btn-success" name="submit" type="submit">
            <i class="fa fa-save"></i> Simpan
        </button>
        <button class="btn btn-danger" name="hapus" type="hapus">
            <i class="fa fa-times"></i> Hapus
        </button>
    </div>
</div>
<?php echo form_close(); ?>