<?php
// error upload
if (isset($error)) {
  echo '<p class="alert alert-warning">';
  echo $error;
  echo '</p>';
}

// notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// form open
echo form_open_multipart(base_url('admin/produk/edit/'.$produk->id_produk),' class="form-horizontal"');
?>

<div class="form-group form-group-lg">
  <label class="col-md-2 control-label">Nama Produk</label>
  <div class="col-md-8">
    <input type="text" name="nama_produk" class="form-control" placeholder="Nama produk" value="<?php echo $produk->nama_produk ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Kode produk</label>
  <div class="col-md-8">
    <input type="text" name="kode_produk" class="form-control" placeholder="Kode produk" value="<?php echo $produk->kode_produk ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Kategori produk</label>
  <div class="col-md-8">
    <select name="id_kategori" class="form-control">
      <!-- looping untuk nama-nama kategori -->
      <?php foreach ($kategori as $kategori) { ?>
        <option value="<?php echo $kategori->id_kategori ?>" <?php if ($produk->id_kategori==$kategori->id_kategori) {echo "selected"; }?>>
          <?php echo $kategori->nama_kategori ?>
        </option>
      <?php } ?>
      <!-- end looping --> 
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Harga</label>
  <div class="col-md-8">
    <input type="number" name="harga" class="form-control" placeholder="Harga" value="<?php echo $produk->harga ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Stok</label>
  <div class="col-md-8">
    <input type="number" name="stok" class="form-control" placeholder="Stok" value="<?php echo $produk->stok ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Berat</label>
  <div class="col-md-8">
    <select name="ukuran" class="form-control">
      <option value="kg">Kg</option>
      <option value="gr" <?php if ($produk->ukuran=="M") {echo "selected";} ?>>Gram</option>
      <option value="ons" <?php if ($produk->ukuran=="L") {echo "selected";} ?>>Ons</option>
      <option value="kuintal" <?php if ($produk->ukuran=="XL") {echo "selected";} ?>>Kuintal</option>
      <option value="ton" <?php if ($produk->ukuran=="XXL") {echo "selected";} ?>>Ton</option>
      <div class="form-group">
    </select>
  </div>
</div>

<div class="form-group" id="keterangan">
  <label class="col-md-2 control-label">Keterangan</label>
  <div class="col-md-8">
    <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="editor"><?php echo $produk->keterangan ?></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Keyword (untuk SEO Google)</label>
  <div class="col-md-8">
    <textarea name="keywords" class="form-control" placeholder="Keyword (untuk SEO Google)"><?php echo $produk->keywords ?></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Upload gambar produk</label>
  <div class="col-md-8">
    <input type="file" name="gambar" class="form-control">
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Status produk</label>
  <div class="col-md-8">
    <select name="status_produk" class="form-control">
      <option value="Publish">Publikasikan</option>
      <option value="Draft" <?php if ($produk->status_produk=="Draft") {echo "selected";} ?>>Simpan sebagai draft</option>
    </select>
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