<?php
    include 'connection.php';
    $query = "SELECT * FROM stok_barang WHERE nama_barang = '$_GET[nama_barang]'";
    $statement = pg_query($connection,$query);
    while($data= pg_fetch_array($statement)){
        $nama_barang = $data['nama_barang'];
        $kategori_barang = $data['kategori_barang'];
        $jumlah_stok = $data['jumlah_stok'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Stok</title>
</head>
<body>
<div class="container">
    <div class="card shadow mt-3" >
    <form method="post" action="edit_proses.php" >
        <div class="card-body" style="margin: auto;">
         <h3 class="text-center"><b>Edit Stok</b></h3>
        <div class="form-group">
                
                <input type="hidden" class="form-control" id ="id" name ="id" value ="<?php echo $id; ?>" required>
            </div>
            <div class="form-group">
                <label class="mt-2mb-2" for="nama_barang">Nama_Barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?php echo $nama_barang;?>"  required>
            </div>
            <div class="form-group">
                <label class="mt-5-mb-5" for="kategori_barang">Kategori_Barang</label>
                <input type="text" class="form-control" name="kategori_barang" id="kategori_barang" placeholder="masukan kategori_barang"value ="<?php echo $kategori_barang; ?>" required>
            </div>
            <div class="form-group">
            <label class="mt-5-mb-5" for="jumlah_stok">Jumlah_Stok</label>
                <input type="text" class="form-control" name="jumlah_stok" id="nama_barang" placeholder="masukan jumlah_stok"value ="<?php echo $jumlah_stok; ?>" required>
                    
                </select>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger mt-3" onclick="history.back()">Batal</button>
            <input type="submit" name="submit" class="btn btn-secondary mt-3" value="SIMPAN" onclick="return confirm('Apakah Anda yakin ?')">
            </div>
        </div>
        </form>
    </div>
       
    </div>
</body>
</html>