<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    .text-primary {
      color: #45d697 !important;
    }

    /* Add custom CSS for the card container */
    .custom-card {
      background-color: #35363b;
      border-radius: 30px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Add custom CSS for the card body */
    .custom-card-body {
      padding: 10px;
    }

    /* Style for the image */
    .card-image {
      max-width: 100%;
      height: auto;
    }

    /* Style for the radio button */
    .custom-radio {
      margin-top: 10px; /* Adjust the margin as needed */
    }

  </style>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
  <center>
    <div class="container">
      <div class="pt-3 card"
        style="width: 300px; background-color:#35363b; border: 3px solid #45d697; border-radius: 30px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body custom-card-body">
          <p class="text-center text-primary">+ Add New Address</p>
        </div>
      </div>

      <h5 class="pt-3 text-left text-white">PAYMENT METHOD</h5>

      <div
        class="card"
        style="width: 300px; background-color: #35363b; border-radius: 30px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body custom-card-body">
          <div class="payment-method">
            <div class="row">
                <div class="col-2">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/450px-MasterCard_Logo.svg.png" alt="MasterCard Logo" class="img-fluid" style="max-width: 100px; max-height: 50px;">
                </div>
                <div class="col-8">
                  <label for="credit-card" class="text-primary">Credit Card</label> <br>
                  <label for="credit-card" class="text-primary">**** **** ****</label>
                </div>
                <div class="col-2 custom-radio">
                  <input type="radio" id="credit-card" name="payment-method" value="credit-card">
                </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div
        class="card"
        style="width: 300px; background-color: #35363b; border-radius: 30px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body custom-card-body">
          <div class="payment-method">
            <div class="row">
                <div class="col-2">
                    <img src="https://png.pngtree.com/png-clipart/20210523/ourmid/pngtree-cash-on-delivery-pin-point-png-image_3342464.jpg" alt="Cash on Delivery Logo" class="img-fluid" style="max-width: 100px; max-height: 50px;">
                  </div>
              <div class="col-8">
                <label for="cash" class="text-primary">Cash on Delivery</label>
              </div>
              <div class="col-2 custom-radio">
                <input type="radio" id="cash" name="payment-method" value="cash">
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="card"
        style="width: 300px; background-color:#35363b; border: 3px solid #45d697; border-radius: 30px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body custom-card-body">
          <p class="text-center text-primary">Add Payment Method</p>
        </div>
      </div>
      <br>
      <h5 class="text-left text-white">Order Summary</h5>

      <div
        class="card"
        style="width: 300px; background-color: #35363b; border-radius: 30px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
          <div class="payment-method">
            <div class="row">
              <div class="col-10 text-left text-white">
                Special Platter <br>
                Peperoni Pizza <br>
                Burger
              </div>
              <div class="col-2 text-right text-primary">
                1x <br>
                1x <br>
                1x
              </div>
            </div>
          </div>
        </div>
      </div>

      <br>

      <h5 class="text-left text-white">Cost Summary</h5>

      <div
        class="card"
        style="width: 300px; background-color: #35363b; border-radius: 30px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
          <div class="payment-method">
            <div class="row">
              <div class="col-10 text-left text-white">
                Shipping <br>
                Item Total <br>
                Total Payment
              </div>
              <div class="col-2 text-right text-primary">
                1x <br>
                1x <br>
                1x
              </div>
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="card"
      style="width: 300px; background-color: #45d697; border: 3px solid #45d697; border-radius: 30px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
      <div class="card-body custom-card-body">
        <p class="text-center text-black font-weight-bold">CONFIRM ORDER</p>
      </div>
    </div>

  </center>
</body>

</html>
