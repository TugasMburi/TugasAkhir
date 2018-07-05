<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Edit Data Kelas</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open_multipart('kelas/update/'.$data->id); ?>

    <?php echo form_hidden('id', $data-id) ?>
    
  	<div class="form-group">
      <label for="Kelas">Kelas</label>
      <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan Tingkat"
        value="<?php echo $data->tingkat ?>">
    </div>

    <?php echo $error;?>

    <a class="btn btn-info" href="<?php echo site_url('kelas/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>

  <?php echo form_close(); ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>