<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
    #daftarHarga {
            float: right;
            width: 25%;
            margin-right: 20px;
            margin-top: -15%;
        }
    form {
            position: relative;
            padding-right: 30%;
            margin-top: 3%;
            margin-left: 3%;
        }
      </style>
</head>
<body>
<form>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer Name</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Pembeli" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Product Type</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="product" id="product_0" type="radio" required="required" class="custom-control-input" value="TV"> 
        <label for="product_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="product" id="product_1" type="radio" required="required" class="custom-control-input" value="Kulkas"> 
        <label for="product_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="product" id="product_2" type="radio" required="required" class="custom-control-input" value="MesinCuci"> 
        <label for="product_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="amount" class="col-4 col-form-label">Amount</label> 
    <div class="col-8">
      <input id="amount" name="amount" placeholder="Jumlah" type="text" required="required" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div> 
</form
><ul class="list-group" id="daftarHarga" style="float:right">
  <li class="list-group-item active">Daftar Harga</li>
  <li class="list-group-item">TV : 4.200.000</li>
  <li class="list-group-item">Kulkas : 3.100.000</li>
  <li class="list-group-item">Mesin Cuci : 3.800.000</li>
  <li class="list-group-item">Harga dapat berubah sewaktu-waktu</li>
</ul>
</body>
</html>

<?php ini_set('display_errors', 0);
$tv = 4200000;
$kulkas = 3100000;
$mesin = 380000;
if(isset($_GET['submit'])){
$customer = $_GET['customer'];
$product = $_GET['product'];
$amount = $_GET['amount'];
if ($product == "TV"){
  $total = $tv*$amount;
}
elseif ($product == "Kulkas"){
  $total = $kulkas*$amount;
}
elseif ($product == "MesinCuci"){
  $total = $mesin*$amount;
}
}

echo "Customer : $customer<br>";
echo "Product : $product<br>";
echo "Amount : $amount<br>";
echo "Total : $total";