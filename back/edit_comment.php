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
            isset($_POST["id_c"])&&
            isset($_POST["update"])
    ) {
        if (
            !empty($_POST["comment"])
        ) {
            $comment = new Comment(
                    $_GET['id_c'],
				            "11111",
                    "ADMIN",
                    $_POST['comment'], 
                    date("d/m/y h:i"),
				    $id_post

                    
            );
            $commentC->modifierComment($comment, $_GET["id_c"]);
            //header('Location:forum.php');
        }
        else
            $error = "Missing information";
    }    
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/admin_head.php'?>
  <body>
    <?php include '../includes/admin_navbar.php'?>
    <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET['id_c'])){
				$comment = $commentC->recupererComment($_GET['id_c']);
				
		?>
    <form action="" method="POST">

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Post</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" method="post" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="comment"
                      >Comment</label
                    >
                    <textarea  
                      name="comment"                  
                      class="form-control validate tm-small"
                      rows="6"
                      required
                    ><?php echo $comment['message']; ?></textarea>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-edit mx-auto">
                  <img src="img/product-image.jpg" alt="Product image" class="img-fluid d-block mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="CHANGE IMAGE NOW"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="update" class="btn btn-primary btn-block text-uppercase">Update Now</button>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <?php
		}
		?>

  <?php include '../includes/admin_footer.php'?> 
  </body>


</html>
