<html>
<head>
	<title>TAMPIL DATA PEGAWAI</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"> 
</head>
<body>
  <div class="container">
    <h1>DATA WISATA</h1>
    <table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>ID Wisata</th>
				<th>Nama Wisata</th>
        <th>Deskripsi</th>
        <th>Daya Tarik</th>
        <th>Lokasi dan Tarif</th>
        <th>Edit</th>
			</tr>
		</thead>
		<tbody>
      <?php 
        foreach ($peg->result() as $row) {
          ?>
            <tr>
              <td><?php echo $row->nip;?></td>
              <td><?php echo $row->nama;?></td>
              <td><?php echo $row->alamat;?></td>
              <td><?php echo $row->tempat_lahir;?></td>
              <td><?php echo $row->email;?></td> 
              <td>
                  <a href="<?php echo base_url()."index.php/login/edit_data/".$row->nip;?>" class="btn-xs btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                  <a href="<?php echo base_url()."index.php/login/delete_data/".$row->nip;?>" class="btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
              </td>      
            </tr>
          <?php
        }
       ?>
    </tbody>
    </table>
		<a href="<?php echo base_url(); ?>login">Tambah Data</a>
		<a href="<?php echo base_url(); ?>">, Kembali</a>
    </div>    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
