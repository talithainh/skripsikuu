<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>    
<script>  
  $(document).ready(function(){    
    // Sembunyikan alert validasi kosong    
    $("#kosong").hide();  
  });  
</script>
<div class="row">
  <!-- Dark table start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h3><i class="fa fa-angle-right"></i> Import Data Responden</h3>

        <form method="post" action="<?php echo base_url("index.php/Data/form_data"); ?>" enctype="multipart/form-data">    
          <input type="file" name="file">
          <input type="submit" name="preview" class="btn btn-primary" value="Preview">  
        </form>

        <?php  
        if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form     
          if(isset($upload_error)){ // Jika proses upload gagal      
            echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload      
            die; // stop skrip    
          }        
          // Buat sebuah tag form untuk proses import data ke database    
          echo "<form method='post' action='".base_url("index.php/Data/create")."'>";        
          // Buat sebuah div untuk alert validasi kosong    
          echo "<div style='color: red;' id='kosong'>    
          Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.    
          </div>";        
          echo "<table cellpadding='8'>    
          <tr>      
          <th colspan='51'>Preview Data</th>    
          </tr>    
          <tr>      
          <th>Nama</th>      
          <th>Masa Dewasa</th>      
          <th>Kues 1</th>
          <th>Kues 2</th>
          <th>Kues 3</th>
          <th>Kues 4</th>
          <th>Kues 5</th>
          <th>Kues 6</th>
          <th>Kues 7</th>
          <th>Kues 8</th>
          <th>Kues 9</th>
          <th>Kues 10</th>
          <th>Kues 11</th>
          <th>Kues 12</th>
          <th>Kues 13</th>
          <th>Kues 14</th>
          <th>Kues 15</th>
          <th>Kues 16</th>
          <th>Kues 17</th>
          <th>Kues 18</th>
          <th>Kues 19</th>
          <th>Kues 20</th>
          <th>Kues 21</th>
          <th>Kues 22</th>
          <th>Kues 23</th>
          <th>Kues 24</th>
          <th>Kues 25</th>
          <th>Kues 26</th>
          <th>Kues 27</th>
          <th>Kues 28</th>
          <th>Kues 29</th>
          <th>Kues 30</th>
          <th>Kues 31</th>
          <th>Kues 32</th>
          <th>Kues 33</th>
          <th>Kues 34</th>
          <th>Kues 35</th>
          <th>Kues 36</th>
          <th>Kues 37</th>
          <th>Kues 38</th>
          <th>Kues 39</th>
          <th>Kues 40</th>
          <th>Kues 41</th>
          <th>Kues 42</th>
          <th>Kues 43</th>
          <th>Kues 44</th>
          <th>Kues 45</th>
          <th>Kues 46</th>
          <th>Kues 47</th>
          <th>Kues 48</th>
          <th>Kues 49</th>
          </tr>";        
          $numrow = 1;    
          $kosong = 0;        
          // Lakukan perulangan dari data yang ada di excel    
          // $sheet adalah variabel yang dikirim dari controller    
          foreach($sheet as $row){       
            // Ambil data pada excel sesuai Kolom      
            $nama = $row['A'];
            $masa_dewasa = $row['B'];
            $kues1 = $row['C'];
            $kues2 = $row['D'];
            $kues3 = $row['E'];
            $kues4 = $row['F'];
            $kues5 = $row['G'];
            $kues6 = $row['H'];
            $kues7 = $row['I'];
            $kues8 = $row['J'];
            $kues9 = $row['K'];
            $kues10 = $row['L'];
            $kues11 = $row['M'];
            $kues12 = $row['N'];
            $kues13 = $row['O'];
            $kues14 = $row['P'];
            $kues15 = $row['Q'];
            $kues16 = $row['R'];
            $kues17 = $row['S'];
            $kues18 = $row['T'];
            $kues19 = $row['U'];
            $kues20 = $row['V'];
            $kues21 = $row['W'];
            $kues22 = $row['X'];
            $kues23 = $row['Y'];
            $kues24 = $row['Z'];
            $kues25 = $row['AA'];
            $kues26 = $row['AB'];
            $kues27 = $row['AC'];
            $kues28 = $row['AD'];
            $kues29 = $row['AE'];
            $kues30 = $row['AF'];
            $kues31 = $row['AG'];
            $kues32 = $row['AH'];
            $kues33 = $row['AI'];
            $kues34 = $row['AJ'];
            $kues35 = $row['AK'];
            $kues36 = $row['AL'];
            $kues37 = $row['AM'];
            $kues38 = $row['AN'];
            $kues39 = $row['AO'];
            $kues40 = $row['AP'];
            $kues41 = $row['AQ'];
            $kues42 = $row['AR'];
            $kues43 = $row['AS'];
            $kues44 = $row['AT'];
            $kues45 = $row['AU'];
            $kues46 = $row['AV'];
            $kues47 = $row['AW'];
            $kues48 = $row['AX'];
            $kues49 = $row['AY'];

            // Cek jika semua data tidak diisi      
            if(empty($nama) && empty($masa_dewasa) && empty($kues1) && empty($kues2) && empty($kues3) && empty($kues4) && empty($kues5) && empty($kues6) && empty($kues7) && empty($kues8) && empty($kues9) && empty($kues10) && empty($kues11) && empty($kues12) && empty($kues13) && empty($kues14) && empty($kues15) && empty($kues16) && empty($kues17) && empty($kues18) && empty($kues19) && empty($kues20) && empty($kues21) && empty($kues22) && empty($kues23) && empty($kues24) && empty($kues25) && empty($kues26) && empty($kues27) && empty($kues28) && empty($kues29) && empty($kues30) && empty($kues31) && empty($kues32) && empty($kues33) && empty($kues34) && empty($kues35) && empty($kues36) && empty($kues37) && empty($kues38) && empty($kues39) && empty($kues40) && empty($kues41) && empty($kues42) && empty($kues43) && empty($kues44) && empty($kues45) && empty($kues46) && empty($kues47) && empty($kues48) && empty($kues49))        
              continue; 
              // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)            
              // Cek $numrow apakah lebih dari 1      
              // Artinya karena baris pertama adalah nama-nama kolom      
              // Jadi dilewat saja, tidak usah diimport      
            if($numrow > 1){        
              // Validasi apakah semua data telah diisi        
              $nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah        
              $masa_dewasa_td = ( ! empty($masa_dewasa))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah        
              $kues1_td = ( ! empty($kues1))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                
              $kues2_td = ( ! empty($kues2))? "" : " style='background: #E07171;'";
              $kues3_td = ( ! empty($kues3))? "" : " style='background: #E07171;'";
              $kues4_td = ( ! empty($kues4))? "" : " style='background: #E07171;'";
              $kues5_td = ( ! empty($kues5))? "" : " style='background: #E07171;'";
              $kues6_td = ( ! empty($kues6))? "" : " style='background: #E07171;'";
              $kues7_td = ( ! empty($kues7))? "" : " style='background: #E07171;'";
              $kues8_td = ( ! empty($kues8))? "" : " style='background: #E07171;'";
              $kues9_td = ( ! empty($kues9))? "" : " style='background: #E07171;'";
              $kues10_td = ( ! empty($kues10))? "" : " style='background: #E07171;'";
              $kues11_td = ( ! empty($kues11))? "" : " style='background: #E07171;'";
              $kues12_td = ( ! empty($kues12))? "" : " style='background: #E07171;'";
              $kues13_td = ( ! empty($kues13))? "" : " style='background: #E07171;'";
              $kues14_td = ( ! empty($kues14))? "" : " style='background: #E07171;'";
              $kues15_td = ( ! empty($kues15))? "" : " style='background: #E07171;'";
              $kues16_td = ( ! empty($kues16))? "" : " style='background: #E07171;'";
              $kues17_td = ( ! empty($kues17))? "" : " style='background: #E07171;'";
              $kues18_td = ( ! empty($kues18))? "" : " style='background: #E07171;'";
              $kues19_td = ( ! empty($kues19))? "" : " style='background: #E07171;'";
              $kues20_td = ( ! empty($kues20))? "" : " style='background: #E07171;'";
              $kues21_td = ( ! empty($kues21))? "" : " style='background: #E07171;'";
              $kues22_td = ( ! empty($kues22))? "" : " style='background: #E07171;'";
              $kues23_td = ( ! empty($kues23))? "" : " style='background: #E07171;'";
              $kues24_td = ( ! empty($kues24))? "" : " style='background: #E07171;'";
              $kues25_td = ( ! empty($kues25))? "" : " style='background: #E07171;'";
              $kues26_td = ( ! empty($kues26))? "" : " style='background: #E07171;'";
              $kues27_td = ( ! empty($kues27))? "" : " style='background: #E07171;'";
              $kues28_td = ( ! empty($kues28))? "" : " style='background: #E07171;'";
              $kues29_td = ( ! empty($kues29))? "" : " style='background: #E07171;'";
              $kues30_td = ( ! empty($kues30))? "" : " style='background: #E07171;'";
              $kues31_td = ( ! empty($kues31))? "" : " style='background: #E07171;'";
              $kues32_td = ( ! empty($kues32))? "" : " style='background: #E07171;'";
              $kues33_td = ( ! empty($kues33))? "" : " style='background: #E07171;'";
              $kues34_td = ( ! empty($kues34))? "" : " style='background: #E07171;'";
              $kues35_td = ( ! empty($kues35))? "" : " style='background: #E07171;'";
              $kues36_td = ( ! empty($kues36))? "" : " style='background: #E07171;'";
              $kues37_td = ( ! empty($kues37))? "" : " style='background: #E07171;'";
              $kues38_td = ( ! empty($kues38))? "" : " style='background: #E07171;'";
              $kues39_td = ( ! empty($kues39))? "" : " style='background: #E07171;'";
              $kues40_td = ( ! empty($kues40))? "" : " style='background: #E07171;'";
              $kues41_td = ( ! empty($kues41))? "" : " style='background: #E07171;'";
              $kues42_td = ( ! empty($kues42))? "" : " style='background: #E07171;'";
              $kues43_td = ( ! empty($kues43))? "" : " style='background: #E07171;'";
              $kues44_td = ( ! empty($kues44))? "" : " style='background: #E07171;'";
              $kues45_td = ( ! empty($kues45))? "" : " style='background: #E07171;'";
              $kues46_td = ( ! empty($kues46))? "" : " style='background: #E07171;'";
              $kues47_td = ( ! empty($kues47))? "" : " style='background: #E07171;'";
              $kues48_td = ( ! empty($kues48))? "" : " style='background: #E07171;'";
              $kues49_td = ( ! empty($kues49))? "" : " style='background: #E07171;'";
              // Jika salah satu data ada yang kosong        
              if(empty($nama) or empty($masa_dewasa) or empty($kues1) or empty($kues2) or empty($kues3) or empty($kues4) or empty($kues5) or empty($kues6) or empty($kues7) or empty($kues8) or empty($kues9) or empty($kues10) or empty($kues11) or empty($kues12) or empty($kues13) or empty($kues14) or empty($kues15) or empty($kues16) or empty($kues17) or empty($kues18) or empty($kues19) or empty($kues20) or empty($kues21) or empty($kues22) or empty($kues23) or empty($kues24) or empty($kues25) or empty($kues26) or empty($kues27) or empty($kues28) or empty($kues29) or empty($kues30) or empty($kues31) or empty($kues32) or empty($kues33) or empty($kues34) or empty($kues35) or empty($kues36) or empty($kues37) or empty($kues38) or empty($kues39) or empty($kues40) or empty($kues41) or empty($kues42) or empty($kues43) or empty($kues44) or empty($kues45) or empty($kues46) or empty($kues47) or empty($kues48) or empty($kues49)){          
                $kosong++; // Tambah 1 variabel $kosong        
              }                
              echo "<tr>";                
              echo "<td".$nama_td.">".$nama."</td>";        
              echo "<td".$masa_dewasa_td.">".$masa_dewasa."</td>";        
              echo "<td".$kues1_td.">".$kues1."</td>";
              echo "<td".$kues2_td.">".$kues2."</td>";
              echo "<td".$kues3_td.">".$kues3."</td>";
              echo "<td".$kues4_td.">".$kues4."</td>";
              echo "<td".$kues5_td.">".$kues5."</td>";
              echo "<td".$kues6_td.">".$kues6."</td>";
              echo "<td".$kues7_td.">".$kues7."</td>";
              echo "<td".$kues8_td.">".$kues8."</td>";
              echo "<td".$kues9_td.">".$kues9."</td>";
              echo "<td".$kues10_td.">".$kues10."</td>";
              echo "<td".$kues11_td.">".$kues11."</td>";
              echo "<td".$kues12_td.">".$kues12."</td>";
              echo "<td".$kues13_td.">".$kues13."</td>";
              echo "<td".$kues14_td.">".$kues14."</td>";
              echo "<td".$kues15_td.">".$kues15."</td>";
              echo "<td".$kues16_td.">".$kues16."</td>";
              echo "<td".$kues17_td.">".$kues17."</td>";
              echo "<td".$kues18_td.">".$kues18."</td>";
              echo "<td".$kues19_td.">".$kues19."</td>";
              echo "<td".$kues20_td.">".$kues20."</td>";
              echo "<td".$kues21_td.">".$kues21."</td>";
              echo "<td".$kues22_td.">".$kues22."</td>";
              echo "<td".$kues23_td.">".$kues23."</td>";
              echo "<td".$kues24_td.">".$kues24."</td>";
              echo "<td".$kues25_td.">".$kues25."</td>";
              echo "<td".$kues26_td.">".$kues26."</td>";
              echo "<td".$kues27_td.">".$kues27."</td>";
              echo "<td".$kues28_td.">".$kues28."</td>";
              echo "<td".$kues29_td.">".$kues29."</td>";
              echo "<td".$kues30_td.">".$kues30."</td>";
              echo "<td".$kues31_td.">".$kues31."</td>";
              echo "<td".$kues32_td.">".$kues32."</td>";
              echo "<td".$kues33_td.">".$kues33."</td>";
              echo "<td".$kues34_td.">".$kues34."</td>";
              echo "<td".$kues35_td.">".$kues35."</td>";
              echo "<td".$kues36_td.">".$kues36."</td>";
              echo "<td".$kues37_td.">".$kues37."</td>";
              echo "<td".$kues38_td.">".$kues38."</td>";
              echo "<td".$kues39_td.">".$kues39."</td>";
              echo "<td".$kues40_td.">".$kues40."</td>";
              echo "<td".$kues41_td.">".$kues41."</td>";
              echo "<td".$kues42_td.">".$kues42."</td>";
              echo "<td".$kues43_td.">".$kues43."</td>";
              echo "<td".$kues44_td.">".$kues44."</td>";
              echo "<td".$kues45_td.">".$kues45."</td>";
              echo "<td".$kues46_td.">".$kues46."</td>";
              echo "<td".$kues47_td.">".$kues47."</td>";
              echo "<td".$kues48_td.">".$kues48."</td>";
              echo "<td".$kues49_td.">".$kues49."</td>";
              echo "</tr>";      
            }            
            $numrow++; // Tambah 1 setiap kali looping    
          }        
          echo "</table>";        
          // Cek apakah variabel kosong lebih dari 0    
          // Jika lebih dari 0, berarti ada data yang masih kosong    
          if($kosong > 0){    
            ?>        
            <script>      
              $(document).ready(function(){        
                // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong        
                $("#jumlah_kosong").html('<?php echo $kosong; ?>');                
                $("#kosong").show(); // Munculkan alert validasi kosong      
              });      
            </script>    
            <?php    
          }else{ // Jika semua data sudah diisi      
            echo "<hr>";            
            // Buat sebuah tombol untuk mengimport data ke database      
            echo "<button type='submit' class='btn btn-success' name='import'>Import</button>&nbsp";      
            echo "<a href='".base_url("index.php/Data")."'><button type='button' class='btn btn-danger'>Cancel</button></a>";    
          }        
          echo "</form>";  
        }  
        ?>
      </div>
    </div>
  </div>
</div>