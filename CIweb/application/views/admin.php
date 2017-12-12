<html>
<head>
	<title>TAMPIL DATA</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"> 
</head>
<body>
  <div class="container">
    <h1>DAFTAR USER</h1>
    <table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Username</th>
				<th>Nama</th>
        <th>Email</th>
        <th>Edit</th>
			</tr>
		</thead>
		<tbody>
      <?php 
        foreach ($users->result() as $row) {
          ?>
            <tr>
              <td><?php echo $row->username;?></td>
              <td><?php echo $row->nama;?></td>
              <td><?php echo $row->email;?></td>
              <td>
                  <a href="<?php echo base_url()."index.php/auth/edit_data/".$row->nip;?>" class="btn-xs btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                  <a href="<?php echo base_url()."index.php/auth/delete_data/".$row->nip;?>" class="btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
              </td>      
            </tr>
          <?php
        }
       ?>
    </tbody>
    </table>  
    </div>    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
