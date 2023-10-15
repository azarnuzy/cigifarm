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
echo form_open_multipart(base_url('admin/acara/tambah'), ' class="form-horizontal"');
?>

<div class="form-group form-group-lg">
    <label class="col-md-2 control-label">Nama Acara</label>
    <div class="col-md-8">
        <input type="text" name="name" class="form-control" placeholder="Nama Acara"
            value="<?php echo set_value('name') ?>" required>
    </div>
</div>
<div class="form-group form-group-lg">
    <label class="col-md-2 control-label">Deskripsi Acara</label>
    <div class="col-md-8">
        <input type="text" name="description" class="form-control" placeholder="Deskripsi Acara"
            value="<?php echo set_value('description') ?>" required>
    </div>
</div>
<div class="form-group form-group-lg">
    <label class="col-md-2 control-label">Tanggal Acara</label>
    <div class="col-md-8">
        <input type="text" name="date" class="form-control" placeholder="Tanggal Acara"
            value="<?php echo set_value('date') ?>" required>
    </div>
</div>
<div class="form-group form-group-lg">
    <label class="col-md-2 control-label">Waktu Acara</label>
    <div class="col-md-8">
        <input type="text" name="time" class="form-control" placeholder="Waktu Acara"
            value="<?php echo set_value('time') ?>" required>
    </div>
</div>
<div class="form-group form-group-lg">
    <label class="col-md-2 control-label">Link Registrasi</label>
    <div class="col-md-8">
        <input type="text" name="register_url" class="form-control" placeholder="Link Registrasi"
            value="<?php echo set_value('register_url') ?>" required>
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
            id="editor"><?php echo set_value('content') ?></textarea>
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