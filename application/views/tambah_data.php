<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('Data/simpan') ?>

              <div class="form-group">
                <label for="text">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
              </div>

              <div class="form-group">
                <label for="text">asal</label>
                <input type="text" name="asal_suku" class="form-control" placeholder="Masukkan asal ">
              </div>

              <div class="form-group">
                <label for="text">Kuisioner1</label>
                <input type="text" name="kuisioner1" class="form-control" placeholder="Masukkan data kuisioner1" >
              </div>

                <div class="form-group">
                <label for="text">Kuisioner1</label>
                <input type="text" name="kuisioner1" class="form-control" placeholder="Masukkan data kuisioner1" >
              </div>

                <div class="form-group">
                <label for="text">Kuisioner2</label>
                <input type="text" name="kuisioner2" class="form-control" placeholder="Masukkan data kuisioner2" >
              </div>

                <div class="form-group">
                <label for="text">Kuisioner3</label>
                <input type="text" name="kuisioner3" class="form-control" placeholder="Masukkan data kuisioner3" >
              </div>

                <div class="form-group">
                <label for="text">Kuisioner4</label>
                <input type="text" name="kuisioner4" class="form-control" placeholder="Masukkan data kuisioner4" >
              </div>

                <div class="form-group">
                <label for="text">Kuisioner5</label>
                <input type="text" name="kuisioner5" class="form-control" placeholder="Masukkan data kuisioner5" >
              </div>

                <div class="form-group">
                <label for="text">Kuisioner6</label>
                <input type="text" name="kuisioner1" class="form-control" placeholder="Masukkan data kuisioner6" >
              </div>

                <div class="form-group">
                <label for="text">Kuisioner7</label>
                <input type="text" name="kuisioner1" class="form-control" placeholder="Masukkan data kuisioner7" >
              </div>

               <div class="form-group">
                <label for="text">Kuisioner8</label>
                <input type="text" name="kuisioner8" class="form-control" placeholder="Masukkan data kuisioner8" >
              </div>




              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>