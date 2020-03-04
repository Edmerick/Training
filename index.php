<!DOCTYPE Html>
<html>
<head>
<meta charset="utf-8">
<title>Insertion Contact</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <!--Begin of Menu Bar-->
   <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="dropdown">  <a href="/brice-training/tp-45mn/index.php" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Enregistrements <span class="caret"></span></a>
        </li>
        <li class="dropdown">  <a href="/brice-training/tp-45mn/consultations.php" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultations<span class="caret"></span></a>
        </li>    
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>
    <hr class="my-1"> 
    <!--End of menu bar-->
<div class="container">
<form role="form" name="inscription" method="post" action="connexion.php">
    <hr class="my-2">
    <h3 class="text-danger">Enregistrement de Contact</h3>
    <hr class="my-2">
    </br>
    <div class="row">
        <div class="col">
        <input type="text" class="form-control" placeholder="Nom" id="nom" name ="nom">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Prenoms" id="prenoms" name ="prenoms">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Sexe" id="sexe" name ="sexe">
        </div>
        <div class="col">
        <input type="number" class="form-control" placeholder="Age"  id="age" name="age" >
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col">
        <input type="email" class="form-control" placeholder="Email:"  id="email" name="email" >
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Contact:"  id="contact" name="contact" >
        </div>
    </div>
    </br>
    <button type="submit" class="btn btn-primary" id="valider" name ="valider" >Valider</button>
    <div>
    <!--input type="submit" class="btn btn-primary" id="valider" name ="valider"  placeholder="Valider"-->
    </div>
</form>

</div>
</body>   
</html>