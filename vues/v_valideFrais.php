<div id="contenu">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form action="index.php?uc=valideFrais&action=valideFrais" method="post">
      <div class="corpsForm">
          <?php
          $req = "SELECT nom FROM Visiteur";
            try{
		
		$rs = PdoGsb::$monPdo->prepare($req);
                $rs->execute();
		$liga = $rs->fetch();
		
            }catch(Exception $ex){
                echo ($ex ->getMessage());
            }
          
      ?>
          
         <label for="vi" accesskey="o">Visiteurs : </label>
        <select id="vi" name="vi">
            <option>-- Sélectionner un visiteur --</option>
            <?php foreach($liga as $lo => $value) { ?>
            <option><?php echo $value["nom"]; ?></option>
            <?php  } ?>
            
        </select>
  
       
         
          <p> 
       
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>