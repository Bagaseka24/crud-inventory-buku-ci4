<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Data Buku</title>
  </head>
  <body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($validation)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $validation->listErrors() ?>
                    </div>
                <?php } ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('buku/update/'.$buku['id']) ?>" method="POST">
                        <div class="form-group">
                                <label>JUDUL</label>
                                <input type="text" class="form-control" name="namabuku" placeholder="Masukkan Judul">
                            </div>
                            <div class="form-group">
                                <label>KATEGORI</label>
                                <input type="text" class="form-control" name="jenisbuku" placeholder="Masukkan Kategori">
                            </div>
                            <div class="form-group">
                                <label>TAHUN TERBIT</label>
                                <input type="text" class="form-control" name="tahunterbit" placeholder="Masukkan Tahun Terbit">
                            </div>
                            <div class="form-group">
                                <label>PENULIS</label>
                                <input type="text" class="form-control" name="penulis" placeholder="Masukkan Penulis">
                            </div>
                            <div class="form-group">
                                <label>PENERBIT</label>
                                <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Penerbit">
                            </div>
                            <div class="form-group">
                                <label>ISBN</label>
                                <input type="text" class="form-control" name="isbn" placeholder="Masukkan ISBN">
                            </div>
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>