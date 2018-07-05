<html>
    <head>
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css')?>"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Politeknik Negeri Malang</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url('mahasiswa')?>">Mahasiswa</a></li>
                    <li><a href="<?php echo base_url('kelas')?>">Kelas</a></li>
                    <li><a href="<?php echo base_url('detail_kelas')?>">Detail Kelas</a></li>
                    <li><a class="nav-link" data-toggle="modal" data-target=""><i class="fa fa-fw fa-sign-out">Logout</i></a></li>
                </ul>

            </div>
        </nav>
        <div class="container">
            <h2>Data <strong>Mahasiswa</strong></h2><hr>
            <?php
                $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
                echo form_open("mahasiswa/search", $attr);
            ?>
            <div class="form-group">
                <div class="col-md-6">
                    <input class="form-control" id="mahasiswa_name" name="mahasiswa_name" placeholder="Cari mahasiswa..." type="text" value="<?php echo set_value('book_name')?>"/>
                </div>
                <div class="col-md-6">
                    <input id="btn_search" name="btn_search" type="submit" class="btn btn-success" value="Search" />
                    <a href="<?php echo base_url(). "mahasiswa/index"; ?>" class="btn btn-primary">Show All</a>
                </div>
                <?php echo form_close();?>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i < count($mahasiswalist); ++$i)
                        {
                            ?>
                                <tr>
                                    <td><?php echo $mahasiswalist[$i]->id?></td>
                                    <td><?php echo $mahasiswalist[$i]->nim?></td>
                                    <td><?php echo $mahasiswalist[$i]->nama?></td>
                                    <td><?php echo $mahasiswalist[$i]->alamat?></td>
                                    <td><a class="btn btn-primary" href="<?php echo site_url('kelas/create') ?>">
                                    Tambah
                                     </a>
                                      <a class="btn btn-primary" href="<?php echo site_url('kelas/edit') ?>">
                                     Edit
                                      </a></td>
                                </tr>
                            <?php
                        }
                    ?>
                    <tr>
                        <td colspan="4" align="center"><?php echo $pagination?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js')?>"></script>
    </body>
</html>