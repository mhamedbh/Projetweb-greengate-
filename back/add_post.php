<?php
    

    include_once '../Model/Post.php';
    include_once '../Controller/PostC.php';

    $error = "";

    // create post
    $post = null;
    // create an instance of the controller
    $postC = new PostC();
    if (
  		  isset($_POST["title"])&& 
        isset($_POST["description"])&&
        isset($_POST["category"]) &&
        isset($_POST["validate"])
    ) {
        if (
			      !empty($_POST['title']) &&
            !empty($_POST["description"]) && 
			      !empty($_POST["category"])         
            ) {
                $post = new Post(
                rand(),
				        $_POST['title'],
                $_POST['description'], 
				        $_POST['category'],
                "11111",
                "ADMIN",
                date('d/m/y h:i')
            );
            $postC->ajouterPost($post);
            $successMsg= "Posted";
            header('Location:forum.php');
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
<form class="container" method="POST" >
        <?php 
            if(isset($error)){ 
                echo '<p>'.$error.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block" >Add Post</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="title"
                      >Title
                    </label>
                    <input
                      id="title"
                      name="title"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                      name="description"
                      class="form-control validate"
                      rows="10"
                      required
                    ></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      name="category"
                      class="custom-select tm-select-accounts"
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
                <div class="tm-product-img-dummy mx-auto">
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
                    value="UPLOAD IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="validate">Add Post</button>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
    <?php include '../includes/admin_footer.php' ?>
  </body>
</html>
