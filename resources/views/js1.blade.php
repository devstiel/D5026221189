<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class = "container">
            <script>
                function showAlert(){
                    alert("Klaim sgra promo 200k di dpan, mnmal main hnya 50k http://pastimaxwin.its.ac.id");
                }
                function changeText(){
                    var span = document.getElementById("output");
                    var textBox = document.getElementById("textbox");
                    textBox.style.color ="red";
                    span.innerHTML = textBox.value;
                }
            </script>
            <button class = "btn btn-primary" onclick="showAlert();">Klik Disini</button>
        <br>
        <button onclick="changeText();" class="btn btn-warning"> Download Now</button>
        <span id="output"> replace me </span>
        <input id = "textbox" type = "text" class="form controll"/>
        </div>
    </body>
</html>
