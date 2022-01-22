<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    </head>
    <body>

        <form action="/buku/<?php echo e($data->id); ?>/update"method=POST>
            <?php echo e(csrf_field()); ?>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
              <input name="judul" type="text" value="<?php echo e($data->judul); ?>" class="form-control" id="judul" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nama Pengarang</label>
              <input name= "pengarang" type="text" value="<?php echo e($data->pengarang); ?>" class="form-control" id="pengarang">
            </div>
            <div class="mb-3 form-check">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
          </form>
           

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\Users\myudh\Documents\Latihan Pvisual\LatihanDua8020190107\resources\views/Buku/edit.blade.php ENDPATH**/ ?>