<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Jomolhari&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Jomolhari', serif;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form action="itemAction.php" method="post" enctype="multipart/form-data">
      <div class="form">
        <div class="form-body">
          <label for="">Item Name</label>
          <input type="text" name="name" class="form-control">
          <label for="">Item Price</label>
          <input type="text" name="price" class="form-control">
          <label for="">quantity</label>
          <input type="text" name="quantity" class="form-control">
          <br>
          <input type="file" name="pic" class="form-control">
          <button class="form-control btn btn-outline-primary" type="submit" name="submit">submit</button>
 <br>
          <br>
         
        </div>
      </div>
    </form>
</body>

</html>