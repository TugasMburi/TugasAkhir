<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Tambah Data Mahasiswa</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open_multipart('mahasiswa/store'); ?>

    <div class="form-group">
      <label for="Nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama"
		value="<?php echo set_value('nama'); ?>">  
    </div>
    <div class="form-group">
      <label for="Nim">NIM</label>
      <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM"
		value="<?php echo set_value('nim'); ?>">  
    </div>
	
	<div class="form-group">
    <label for="kelas">kelas</label>
    <select class="form-control" id="kelas" name="kelas">
    
    <?php foreach($data as $row) { ?>
      <option value="<?php echo $row->id ?>"><?php echo $row->nim ?></option>
    <?php } ?>
    
    </select>
  </div>

	<?php echo $error; ?>    

	<a class="btn btn-info" href="<?php echo site_url('mahasiswa/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close() ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>