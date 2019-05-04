    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
    <h2 class="bg-danger" >
				  Comptable :
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</h2>
    
      </div>  
        <nav class="navbar navbar-light" style="background-color: #006600;">
            <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" >
			
           <li class="nav-item ">
              <a href="index.php?uc=valideFrais&action=selectionnerVisiteur" class="nav-link"  title="Valider fiche de frais">Valide fiche de frais</a>
           </li>
           <li class="nav-item ">
              <a href="#" class="nav-link"  title="Suivre le paiement de fiche de frais">Suivre fiche de frais</a>
           </li>
 	   <li class="nav-item ">
              <a href="index.php?uc=connexion&action=deconnexion" class="nav-link"  title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
            </div>
        </nav>
    </div>
