<?php
	include '../config.php';
	include_once '../Model/Comment.php';
	class CommentC {
		function afficherComment($id_post){
			$sql="SELECT * FROM comment WHERE id_post= '$id_post' ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerComment($id_c){
			$sql="DELETE FROM comment WHERE id_c=:id_c";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_c', $id_c);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterComment($comment){
			$sql="INSERT INTO comment (id_c, id_u, pseudo_u, message, date_c, id_post) 
			VALUES (:id_c, :id_u, :pseudo_u, :message, :date_c, :id_post)  " ;            
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_c' => $comment->getIdc(),
					'id_u' => $comment->getIdu(),
					'pseudo_u' => $comment->getPseudou(),
					'message' => $comment->getMessage(),
					'date_c' => $comment->getDatec(),
                    'id_post' => $comment->getIdpost()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererComment($id_c){
			$sql="SELECT * from comment where id_c= $id_c";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$comment=$query->fetch();
				return $comment;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierComment($comment, $id_c){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE comment SET 
					    id_u= :id_u,
						pseudo_u= :pseudo_u,
						message= :message,
						date_c= :date_c, 
						id_post= :id_post
					WHERE id_c= :id_c"
				);
				$query->execute([
                    'id_c' => $id_c,
					'id_u' => $comment->getIdu(),
					'pseudo_u' => $comment->getPseudou(),
					'message' => $comment->getMessage(),
                    'date_c' => $comment->getDatec(),
					'id_post' => $comment->getIdpost()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
     /*   function countComments($id_post){
            $sql="SELECT count(id_c) as total from comment where id_post=$id_post";
            $db = config::getConnexion();
            try{
				$query=$db->prepare($sql);
				$query->execute();

				$values=$query->fetch();
				return $values['total'];
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}


        }*/

	}
?>