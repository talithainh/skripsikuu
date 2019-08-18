<div class="row">
  <!-- Dark table start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <div class="data-tables datatable-dark">
          <table id="dataTable3" class="text-center">
            <thead class="text-capitalize">
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Asal</th>
                <th>Kues1</th>
                <th>Kues2</th>
                <th>Kues3</th>
                <th>Kues4</th>
                <th>Kues5</th>
                <th>Kues6</th>
                <th>Kues7</th>
                <th>Kues8</th>
                <th>Kues9</th>
                <th>Kues10</th>
                <th>Kues11</th>
                <th>Kues12</th>
                <th>Kues13</th>
                <th>Kues14</th>
                <th>Kues15</th>
                <th>Kues16</th>
                <th>Kues17</th>
                <th>Kues18</th>
                <th>Kues19</th>
                <th>Kues20</th>
                <th>Kues21</th>
                <th>Kues22</th>
                <th>Kues23</th>
                <th>Kues24</th>
                <th>Kues25</th>
                <th>Kues26</th>
                <th>Kues27</th>
                <th>Kues28</th>
                <th>Kues29</th>
                <th>Kues30</th>
                <th>Kues31</th>
                <th>Kues32</th>
                <th>Kues33</th>
                <th>Kues34</th>
                <th>Kues35</th>
                <th>Kues36</th>
                <th>Kues37</th>
                <th>Kues38</th>
                <th>Kues39</th>
                <th>Kues40</th>
                <th>Kues41</th>
                <th>Kues42</th>
                <th>Kues43</th>
                <th>Kues44</th>
                <th>Kues45</th>
                <th>Kues46</th>
                <th>Kues47</th>
                <th>Kues48</th>
                <th>Kues49</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1; 
                foreach($data as $key){ 
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $key->nama ?></td>
                <td><?php echo $key->masa_dewasa ?></td>
                <td><?php echo $key->kuisioner1 ?></td>
                <td><?php echo $key->kuisioner2 ?></td>
                <td><?php echo $key->kuisioner3 ?></td>
                <td><?php echo $key->kuisioner4 ?></td>
                <td><?php echo $key->kuisioner5 ?></td>
                <td><?php echo $key->kuisioner6 ?></td>
                <td><?php echo $key->kuisioner7 ?></td>
                <td><?php echo $key->kuisioner8 ?></td>
                <td><?php echo $key->kuisioner9 ?></td>
                <td><?php echo $key->kuisioner10 ?></td>
                <td><?php echo $key->kuisioner11 ?></td>
                <td><?php echo $key->kuisioner12 ?></td>
                <td><?php echo $key->kuisioner13 ?></td>
                <td><?php echo $key->kuisioner14 ?></td>
                <td><?php echo $key->kuisioner15 ?></td>
                <td><?php echo $key->kuisioner16 ?></td>
                <td><?php echo $key->kuisioner17 ?></td>
                <td><?php echo $key->kuisioner18 ?></td>
                <td><?php echo $key->kuisioner19 ?></td>
                <td><?php echo $key->kuisioner20 ?></td>
                <td><?php echo $key->kuisioner21 ?></td>
                <td><?php echo $key->kuisioner22 ?></td>
                <td><?php echo $key->kuisioner23 ?></td>
                <td><?php echo $key->kuisioner24 ?></td>
                <td><?php echo $key->kuisioner25 ?></td>
                <td><?php echo $key->kuisioner26 ?></td>
                <td><?php echo $key->kuisioner27 ?></td>
                <td><?php echo $key->kuisioner28 ?></td>
                <td><?php echo $key->kuisioner29 ?></td>
                <td><?php echo $key->kuisioner30 ?></td>
                <td><?php echo $key->kuisioner31 ?></td>
                <td><?php echo $key->kuisioner32 ?></td>
                <td><?php echo $key->kuisioner33 ?></td>
                <td><?php echo $key->kuisioner34 ?></td>
                <td><?php echo $key->kuisioner35 ?></td>
                <td><?php echo $key->kuisioner36 ?></td>
                <td><?php echo $key->kuisioner37 ?></td>
                <td><?php echo $key->kuisioner38 ?></td>
                <td><?php echo $key->kuisioner39 ?></td>
                <td><?php echo $key->kuisioner40 ?></td>
                <td><?php echo $key->kuisioner41 ?></td>
                <td><?php echo $key->kuisioner42 ?></td>
                <td><?php echo $key->kuisioner43 ?></td>
                <td><?php echo $key->kuisioner44 ?></td>
                <td><?php echo $key->kuisioner45 ?></td>
                <td><?php echo $key->kuisioner46 ?></td>
                <td><?php echo $key->kuisioner47 ?></td>
                <td><?php echo $key->kuisioner48 ?></td>
                <td><?php echo $key->kuisioner49 ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark table end -->
</div>