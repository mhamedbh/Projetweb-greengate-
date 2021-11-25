<?php
	include '../config.php';
	include_once '../Model/Post.php';
	class PostC {
		function afficherPost(){
			$sql="SELECT * FROM post";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerPost($id_post){
			$sql="DELETE FROM post WHERE id_post=:id_post";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_post', $id_post);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterPost($post){
			$sql="INSERT INTO post (id_post, title, description_p, category, id_author, pseudo_author, date_pub) 
			VALUES (:id_post, :title, :description_p, :category, :id_author, :pseudo_author, :date_pub)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_post' => $post->getIdpost(),
					'title' => $post->getTitle(),
					'description_p' => $post->getDescription(),
					'category' => $post->getCategory(),
					'id_author' => $post->getIdauthor(),
					'pseudo_author' => $post->getPseudo(),
                    'date_pub' => $post->getDatepub()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererPost($id_post){
			$sql="SELECT * from post where id_post=$id_post";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$post=$query->fetch();
				return $post;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierPost($post, $id_post){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE post SET 
						title= :title, 
						description_p= :description_p, 
						category= :category,
						date_pub= :date_pub 
					WHERE id_post= :id_post"
				);
				$query->execute([
                    'id_post' => $id_post,
					'title' => $post->getTitle(),
					'description_p' => $post->getDescription(),
					'category' => $post->getCategory(),
                    'date_pub' => $post->getDatepub()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function afficherComments($id_post)
		{
			try {
				$pdo = config::getConnexion();
				$query = $pdo->prepare(
					'SELECT * FROM comment where post = :id'
				);
				$query->execute(
					['id' => $id_post ]
				);
				return $query->fetchAll();
			} catch (PDOException $e){
				$e->getMessage();
			}
		}
		

	}
?>