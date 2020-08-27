<?php
include './db_local.php';
  function addEvent($unEvent)
    {
       
        try
        {
            $req = 'INSERT INTO produits (PR_LIBELLE, PR_DETAIL, PR_PHOTO)
            VALUES (:pnom, :pdescr, :pimage)';
            echo $req;
            $pdo = pdo_connect_mysql();
            $stmt = $pdo->prepare($req);
            $stmt->bindValue(':pnom', $unEvent->g);
            $stmt->bindValue(':pdescr', $unEvent->getDescription());
            $stmt->bindValue(':pimage', $unEvent->getImage());
            $stmt->execute(); 
            $prep = NULL;
        }   
        catch (PDOException $uneException) {
            echo "ERREUR : " . $uneException->getMessage();
        }
    }

