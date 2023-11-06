<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function validateForm(){
                console.log("ini baris 14"); //dimanapun ketemu return, akan exit function.
                return false; //perintah bawahnya tidak dijalankan
                console.log("ini baris 13");
                return true; //dalam 1 function, bisa ada lebih dari 1 return.
                console.log("ini baris 15");
            }

            function validateNRP(){
                var nrp = document.getElementById("nrp");
                if(nrp.value == ""){
                    alert("NRP harus diisi!");
                    return false;
                }if(isNaN(nrp.value)){
                    alert("NRP harus diisi angka");
                    return false;
                }if(nrp.length != 10){
                    alert("NRP diisi berupa 10 digit");
                    return false;
                }
                else{
                    return true;
                }
            }
        </script>
    </head>

    <body>
        <div class="container">
            <form action="https://www.detik.com/" method="get" onsubmit="return validateNRP();">
                <div class="form-group">
                    <label for="nrp">NRP Anda :</label>
                    <input type="text" id="nrp" class="form-control">
                </div>
                            <input type="submit" value="Kirim" class="btn btn-danger">
            </form>
        </div>

    </body>
</html>
