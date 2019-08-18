<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('data/update') ?>

              <div class="form-group">
                <label for="text">nama</label>
                <input type="text" name="nama" value="<?php echo $data_responden->nama ?>" class="form-control" placeholder="Masukkan nama">
                <input type="hidden" value="<?php echo $data_responden->id_responden ?>" name="id_responden">
              </div>

              <div class="form-group">
                <label for="text">Asal</label>
                <input type="text" name="asal_suku" value="<?php echo $data_responden->asal_suku ?>" class="form-control" placeholder="Masukkan Asal">
              </div>

              <div class="form-group">
                <label for="text">Kuisioner1</label>
                <input type="text" name="kuisioner1" value="<?php echo $kuisioner1->kuisioner1 ?>" class="form-control" >
              </div>
               <div class="form-group">
                <label for="text">Kuisioner2</label>
                <input type="text" name="kuisioner2" value="<?php echo $kuisioner2->kuisioner2 ?>" class="form-control" >
              </div>
               <div class="form-group">
                <label for="text">Kuisioner3</label>
                <input type="text" name="kuisioner3" value="<?php echo $kuisioner3->kuisioner3 ?>" class="form-control" >
              </div>
               <div class="form-group">
                <label for="text">Kuisioner4</label>
                <input type="text" name="kuisioner4" value="<?php echo $kuisioner4->kuisioner4 ?>" class="form-control" >
              </div>
               <div class="form-group">
                <label for="text">Kuisioner5</label>
                <input type="text" name="kuisioner5" value="<?php echo $kuisioner5->kuisioner5 ?>" class="form-control" >
              </div>
               <div class="form-group">
                <label for="text">Kuisioner6</label>
                <input type="text" name="kuisioner6" value="<?php echo $kuisioner6->kuisioner6 ?>" class="form-control" >
              </div>
               <div class="form-group">
                <label for="text">Kuisioner7</label>
                <input type="date" name="kuisioner7" value="<?php echo $kuisioner7->kuisioner7 ?>" class="form-control" >
              </div>
               <div class="form-group">
                <label for="text">Kuisioner1</label>
                <input type="date" name="kuisioner8" value="<?php echo $kuisioner8->kuisioner8 ?>" class="form-control" >
              </div>

            
              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>