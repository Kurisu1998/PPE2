    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
 <h2 class="bg-success">
				  Visiteur :
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</h2>
    
      </div>  
        <nav class="navbar navbar-light" style="background-color: #006600;">
             <div class="collapse navbar-collapse" >
        <ul class="navbar-nav" >
			
           <li class="nav-item ">
              <a href="index.php?uc=gererFrais&action=saisirFrais" class="nav-link" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li class="nav-item ">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" class="nav-link" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
 	   <li class="nav-item ">
              <a href="index.php?uc=connexion&action=deconnexion" class="nav-link" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
             </div>
        </nav>
        
    </div>
    