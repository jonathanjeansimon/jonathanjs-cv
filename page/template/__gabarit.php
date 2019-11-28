<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jonathan jean-simon CV</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
  
<!-- Ouverture de la class HEADER  -->
   <div class="header container-fluid">
     <div class="row">
<!-- Ouverture de la class reseau -->
        <div class="col-lg-6 reseau">
            
        </div> 
<!-- Fermeture de la class reseau -->
<!--  -------------------------   -->
<!-- Ouverture de la class menu -->
        <div class="col-lg-6 menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>
        </div> 
<!-- Fermeture de la class menu -->
<!--  -------------------------   -->         
         
     </div>  
       
   </div>
   
<!-- Fermeture de la class HEADER -->
   <section class="container">
       
    <?= $content; ?>   
       
       
   </section>
    
</body>
</html>