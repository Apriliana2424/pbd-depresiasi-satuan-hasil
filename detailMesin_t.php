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
                                        $sql_cek="SELECT mesin.id_mesin, merk.merk_mesin, jenis.jenis_mesin, mesin.tgl_perolehan,
                                                    mesin.hrg_perolehan, mesin.nilai_residu, mesin.taksiran_produksi, detailmesin.tahun,
                                                    detailmesin.satuan_hasil
                                                    FROM detailmesin JOIN mesin ON
                                                    detailmesin.id_mesin = mesin.id_mesin
                                                    JOIN merk ON detailmesin.id_merk = merk.id_merk
                                                    JOIN jenis ON detailmesin.id_jenis = jenis.id_jenis
                                                    ORDER BY id_detailMesin ASC;";
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
                              <center><h2><font color="white">DAFTAR DETAIL MESIN JAHIT</font></h2></center> 
							  <br/>
							  <br/>

                                  <center><table border_color="white" width="200" border="3" height="150">
                                        <thead>
                                            <th>Id Mesin</th>
                                            <th>Merk Mesin</th>
                                            <th>Jenis Mesin</th>
                                            <th>Tanggal Perolehan</th>
                                            <th>Harga Perolehan</th>
                                            <th>Nilai Residu</th>
                                            <th>Taksiran Produksi</th>
                                            <th>Produksi Tahun ke -</th>
                                            <th>Jumlah Produksi</th>                                        
                                            <th>Lainnya</th>
									</tr>
                                        </thead>
                                        <tbody>
										<?php
										while ($data = $query_cek->fetch_array()) {
										?>
                                            <tr>
                                                <td><?php echo $data['id_mesin']; ?></td>
                                                <td><?php echo $data['merk_mesin']; ?></td>
                                                <td><?php echo $data['jenis_mesin']; ?></td>
                                                <td><?php echo $data['tgl_perolehan']; ?></td>
                                                <td><?php echo number_format($data['hrg_perolehan'],0,".",","); ?></td>
                                                <td><?php echo number_format($data['nilai_residu'],0,".",","); ?></td>
                                                <td><?php echo number_format($data['taksiran_produksi'],0,".",","); ?></td>
                                                <td><?php echo $data['tahun']; ?></td>
                                                <td><?php echo $data['satuan_hasil']; ?></td>
                                                <td><?php echo "<a href='hapus_detailMesin.php?tahun=" . $data['tahun'] . "'>
                                                HAPUS </a> " ;?></td>
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