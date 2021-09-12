<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 1</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> 
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/> 
</head>
<body>
<h3 style="text-align: center;color:white">Spare Part</h3>

    <form action="hasil.php" method="POST" style="background-color: rgba(4, 29, 23, 0.5); box-shadow: 0px 0px 25px 10px black;border-radius: 15px;">
    <br>
    <br>
    <div class ="container" >
    <div class="mb-3">
        <label for="nama" class="form-label" style="color:white">Sparepart</label> &nbsp;<i class="fas fa-cogs" style="color:white"></i>
        <input type="text" name="Nama" class="form-control" id="formGroupExampleInput" placeholder="tulis nama part">
    </div>
    
    <div class="mb-3">
        <label for="harga" class="form-label" style="color:white">Harga</label> &nbsp;<i class="fas fa-money" style="color:white"></i>
        <input type="text" name="harga" class="form-control" id="formGroupExampleInput2" placeholder="tulis harga">
    </div>     
    
     <input type="submit" class="btn btn-dark" name="submit">
    <br>
    <br>
    <br>
    <br>
           
       
    </form>  


</body>

</html>