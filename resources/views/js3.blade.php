<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="operasi.js"> </script>
    </head>

    <body>
        <form>
        <div class = "container">
           <div class = "form-group">
            <label for = "bill">Bilangan 1 :</label>
            <input type="number" id="bill1" class="form-control">
           </div>

           <div class = "form-group">
            <label for = "bill">Bilangan 2 :</label>
            <input type="number" id="bill2" class="form-control">
           </div>

           <input type="button" value="Penjumlahan" class="btn btn-primary" onclick="jumlah();">
           <input type="button" value="Perkalian" class="btn btn-info" onclick="kali();">
           <input type="button" value="Ulangi" class="btn btn-danger" onclick="resetForm();">
           <h3> Hasil Operasi : <div id="hasil"> </div></h3>
        </div>
        </form>
        </body>
        </html>
