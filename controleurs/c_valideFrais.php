<?php
include("vues/v_comptable.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];



switch($action){
    case'selectionnerVisiteur':{
                $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
             
              
		$lesCles = array_keys( $lesMois );
               
              
		$moisASelectionner = sizeof($lesCles);
               
           
		include("vues/v_valideFrais.php");
		break;
    }
    case 'valideFrais':{
		$leMois = $_REQUEST['lstMois']; 
       
                
         
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
           
		$moisASelectionner = $leMois;
          
          
		include("vues/v_valideFrais.php");
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("vues/v_validation.php");
	}    
    
    
    
}

?>