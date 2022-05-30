<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah</title>
</head>
<body>
    <div class="container">
        <div class="card mt-3">
        <form method="post" action="tambah_proses.php" >
            <div class="card-body shadow" style="margin:auto;" >
                <h3 class="text-center"><b>Tambah Stok</b></h3>
            <div class="form-group">
                <label for="nama_barang">Nama_Barang</label>
                <input type="text" class="form-control" id="nama_barang"  name="nama_barang" placeholder="masukan nama_barang" required>
            </div>
            <div class="form-group">
                <label for="kategori_barang">Kategori_Barang</label>
                <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" placeholder="masukan kategori_barang" required>
            </div>
            <div class="form-group">
                <label for="jumlah_stok">Jumlah_Stok</label>
                <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" placeholder="masukan jumlah_stok" required>
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