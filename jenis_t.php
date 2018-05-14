<html lang="en">
<?php

include "kon.php";
?>
<head>
<title>CV. A</title>
        <style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("aa.jpg");
				background-position: center;
				height: 600px;
			  	weight: 200px;
		</style>
</head>
<body>
                                <?php  
                                        $sql_cek="select jenis.id_jenis, jenis.jenis_mesin, merk.merk_mesin 
                                        from jenis join merk on jenis.id_merk=merk.id_merk ORDER BY id_jenis ASC";
                                        $query_cek = $kon->query($sql_cek);
                                        $result_cek = $query_cek->num_rows;
                                        if($result_cek=='0'){
                                        echo "<center>Maaf Data Yang anda cari tidak ada <br> Silahkan Masukkan Data Terlebih Dahulu</center>";
                                         }
                                ?>
								<br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                              <center><h2><font color="white">DAFTAR JENIS MESIN JAHIT</font></h2></center> 
							  <br/>
							  <br/>

                                  <center><table border_color="white" width="200" border="3" height="150">
                                        <thead>
                                            <th>Id Jenis</th>
                                            <th>Id Merk</th>
                                            <th>Jenis Mesin</th>
									</tr>
                                        </thead>
                                        <tbody>
										<?php
										while ($data = $query_cek->fetch_array()) {
										?>
                                            <tr>
                                                <td><?php echo $data['id_jenis']; ?></td>
                                                <td><?php echo $data['id_merk']; ?></td>
                                                <td><?php echo $data['jenis_mesin']; ?></td>
                                            </tr>
										 <?php 
                                         }
                                    ?>
                                        </tbody>
                                    </table>
									<br/>
									<br/>
									<a href="home.php" onClick='self.history()'>
									<input type="Submit" name="kembali" value="Kembali"></a>
									</center>
</body>
</html>
