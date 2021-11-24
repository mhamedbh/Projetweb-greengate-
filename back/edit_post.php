<?php
    include_once '../Model/Post.php';
    include_once '../Controller/PostC.php';
    

    $error = "";

    // create post
    $post = null;

    // create an instance of the controller
    $postC = new PostC();
    if (
		    isset($_POST["title"]) && 
        isset($_POST["description"]) && 
        isset($_POST["category"])
    ) {
        if (
            !empty($_POST["title"]) && 
			      !empty($_POST['description']) &&
            !empty($_POST["category"])
        ) {
            $post = new Post(
                $_POST['id_post'],
				        $_POST['title'],
                $_POST['description'], 
				        $_POST['category'],
                $_POST['id_author'],
                $_POST['pseudo_author'],
                date("d/m/y h:i")
            );
            $postC->modifierPost($post, $_GET["id_post"]);
            header('Location:forum.php');
        }
        else
            $error = "Missing information";
    }    
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/admin_head.php'?>
  <!--<script>
     document.getElementById("category").options[<?php //$_GET['category'] ?>].selected='selected';
  </script>-->
  <body>
    <?php include '../includes/admin_navbar.php'?>
    <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET['id_post'])){
				$post = $postC->recupererPost($_GET['id_post']);
				
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
                      for="title"
                      >Title
                    </label>
                    <input
                      id="title"
                      name="title"
                      type="text"
                      value="<?php echo $post['title']; ?>"
                      class="form-control validate"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea  
                      name="description"                  
                      class="form-control validate tm-small"
                      rows="5"
                      required
                    ><?php echo $post['description_p']; ?></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      name="category"
                      id="category"
                    >
                    <option value="" disabled selected>Choose category</option>
                    <option value="1">Save planet</option>
                    <option value="2">Event</option>
                    <option value="3">National Tree Day</option>
                    <option value="4">other</option>
                    </select>
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
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Now</button>
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
