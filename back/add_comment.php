<?php
    include_once '../Model/Comment.php';
    include_once '../Controller/CommentC.php';

    $error = "";

    // create post
    $comment = null;
    // create an instance of the controller
    $commentC = new CommentC();
    if (
  		    isset($_POST["comment"])&&
            isset($_POST["ok"])
       ) {
        if (
			    !empty($_POST['comment'])     
           ) {
                $comment = new Comment(
                rand(),
                "11111",
                "ADMIN",
                $_POST['comment'], 
                date('d/m/y h:i'),
				$_GET['id_post'],

            );
            $commentC->ajouterComment($comment);
            $successMsg= "Commented";
            //header('Location:forum.php');
        }
        else
            $error = "Missing information";
    }

?>

<?php
	//include '../Controller/CommentC.php';
	$commentC=new CommentC();
	$listeComments=$commentC->afficherComment($_GET['id_post']); 
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/admin_head.php'?>
  <body>
<?php include '../includes/admin_navbar.php'?>

<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 ">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <div class="tm-product-table-container">
                 <table class="table table-hover tm-table-small tm-product-table">
                 <thead>
                  <tr>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Author ID</th>
                    <th scope="col">comment</th>
                    <th scope="col">Comment date</th>
                    <th scope="col">Post ID</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                 </thead>
                 <?php
				 foreach($listeComments as $comment){
		        	?>

                 <tbody>
                  <tr>
                    <td><?php echo $comment['pseudo_u']; ?></td>
                    <td><?php echo $comment['id_u']; ?></td>
                    <td><?php echo $comment['message']; ?></td>
                    <td><?php echo $comment['date_c']; ?></td>
                    <td><?php echo $comment['id_post']; ?></td>
                    <td>
                      <a href="delete_comment.php?id_c=<?php echo $comment['id_c']; ?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>

                      </a>
                      <a href="edit_comment.php?id_c=<?php echo $comment['id_c']; ?>" class="tm-product-delete-link">
                        <i class="fas fa-edit" style='font-size:18px;color:white'></i>
                      </a>                      

                    </td>
                  </tr>
                 </tbody>
                 <?php } ?>
                 </table>
                </div>
            </div>
        </div>
        <?php 
            if(isset($error)){ 
                echo '<p>'.$error.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>

        
        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 ">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block" >Add Comment</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form action="" method="POST" class="tm-edit-product-form">
                    <div class="form-group mb-3">
                     <label
                      for="comment"
                      >Comment:</label
                      >
                      <textarea
                      name="comment"
                      class="form-control validate"
                      rows="6"
                      required
                      ></textarea>
                    </div>
                
                    <div class="col-12">
                       <button type="submit" class="btn btn-primary btn-block text-uppercase" name="ok">Add COMMENT</button>
                    </div>
                    </form>
               </div>
              
            
            </div>
          </div>
        
      
    
        </div>
        

        
       
</div>
</div>
    <?php include '../includes/admin_footer.php' ?>
  </body>
</html>
