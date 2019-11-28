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
   <div class="header">
    <div class="container">
     <div class="row">
<!-- Ouverture de la class reseau -->
        <div class="col-lg-2 logo">
            <img src="../public/img/mrjs-min.png" alt="">
        </div> 
        
         <div class="col-lg-2 reseau">
            
        </div> 
<!-- Fermeture de la class reseau -->
<!--  -------------------------   -->
<!-- Ouverture de la class menu -->
        <div class="col-lg-8 menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" id="menu-responsive" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Accueil</a>
      <a class="nav-item nav-link" href="#">Projet</a>
      <a class="nav-item nav-link" href="#">Galerie</a>
      <a class="nav-item nav-link" href="#">Contact</a>
    </div>
  </div>
</nav>
        </div> 
<!-- Fermeture de la class menu -->
<!--  -------------------------   -->         
         
     </div>  
    </div>
   </div>
   
<!-- Fermeture de la class HEADER -->
   <section class="container-fluid">
       
    <?= $content; ?>   
       
       
   </section>
   <footer>
       
       
       <div class="container">
          <div class="row">
          
          <div class="col-lg-4">
              
              <p>
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae iste ad ipsum reiciendis natus eaque corrupti odit voluptates in consectetur rem a nam assumenda earum deserunt, provident cumque officia eveniet.</span>
              </p>
          </div>
          
             <div class="col-lg-4">
              
              <p>
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae iste ad ipsum reiciendis natus eaque corrupti odit voluptates in consectetur rem a nam assumenda earum deserunt, provident cumque officia eveniet.</span>
              </p>
          </div>
           
           
              <div class="col-lg-4">
              
              <p>
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae iste ad ipsum reiciendis natus eaque corrupti odit voluptates in consectetur rem a nam assumenda earum deserunt, provident cumque officia eveniet.</span>
              </p>
          </div>
           
          </div>
           
       </div>
       
       
       
   </footer>
    
</body>
</html>