<html>
   <head>
		<title>Pengguna</title>
   </head>
   <body>
	<h2>Data Pengguna</h2>
	<hr/>
    <table>
		<tr>
		   <th>ID</th><th>Nama</th><th>No_telp</th><th>Alamat</th><th>Kota</th><th>Kode Pos</th><th>Email</th><th>Username</th><th>Password</th>
           <th colspan="2">Aksi</th>
		</tr>
		<?php
         $i=1;

		 foreach($datanya->result() as $perdata){
			  echo "<tr>
			      <td>$i</td>
					  <td>$perdata->nama</td>
					  <td>$perdata->no_telp</td>
					  <td>$perdata->alamat</td>
					  <td>$perdata->kota</td>
            <td>$perdata->kode_pos</td>
					  <td>$perdata->email</td>
            <td>$perdata->username</td>
            <td>******</td>";
        }
				echo "</tr>";
        $i++;
		?>
	   <table>
  </body>
</html>
