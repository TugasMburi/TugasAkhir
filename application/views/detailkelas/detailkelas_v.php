<html>
    <head>
        <title>Detail Kelas</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css')?>"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Politeknik Negeri Malang</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('mahasiswa')?>">Mahasiswa</a></li>
                    <li><a href="<?php echo base_url('kelas')?>">Kelas</a></li>
                    <li class="active"><a href="<?php echo base_url('detail_kelas')?>">Detail Kelas</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h2>Data <strong>Detail Kelas</strong></h2><hr>
            <?php
                $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
                echo form_open("detail_kelas/search", $attr);
            ?>
            <div class="form-group">
                <div class="col-md-6">
                    <input class="form-control" id="detailkelas_name" name="detailkelas_name" placeholder="Cari mahasiswa di suatu kelas..." type="text" value="<?php echo set_value('detailkelas_name')?>"/>
                </div>
                <div class="col-md-6">
                    <input id="btn_search" name="btn_search" type="submit" class="btn btn-success" value="Search" />
                    <a href="<?php echo base_url(). "detail_kelas"; ?>" class="btn btn-primary">Show All</a>
                </div>
                <?php echo form_close();?>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i < count($detailkelaslist); ++$i)
                        {
                            ?>
                                <tr>
                                    <td><?php echo $i+1?></td>
                                    <td><?php echo $detailkelaslist[$i]->nim?></td>
                                    <td><?php echo $detailkelaslist[$i]->nama?></td>
                                    <td><?php echo $detailkelaslist[$i]->alamat?></td>
                                    <td><?php echo $detailkelaslist[$i]->nama_kelas?></td>
                                </tr>
                            <?php
                        }
                    ?>
                    <tr>
                        <td colspan="5" align="center"><?php echo $pagination?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>