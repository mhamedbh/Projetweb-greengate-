<?php
	include '../Controller/PostC.php';
	$postC=new PostC();
	$listePosts=$postC->afficherPost(); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/admin_head.php'?>
  <body id="reportsPage">
  <?php include '../includes/admin_navbar.php'?>

    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Author ID</th>
                    <th scope="col">Author pseudo</th>
                    <th scope="col">Publish date</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <?php
				           foreach($listePosts as $post){
		          	?>

                <tbody>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo $post['description_p']; ?></td>
                    <td><?php echo $post['category']; ?></td>
                    <td><?php echo $post['id_author']; ?></td>
                    <td><?php echo $post['pseudo_author']; ?></td>
                    <td><?php echo $post['date_pub']; ?></td>
                    <td>
                      <a href="delete_post.php?id_post=<?php echo $post['id_post']; ?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>

                      </a>
                      <a href="edit_post.php?id_post=<?php echo $post['id_post']; ?>" class="tm-product-delete-link">
                        <i class="fas fa-edit" style='font-size:18px;color:white'></i>
                      </a>                      
                      <a href="add_comment.php?id_post=<?php echo $post['id_post']; ?>" class="tm-product-delete-link">
                        <i class="far fa-comments" style='font-size:18px;color:white'></i>
                      </a>


                    </td>
                  </tr>
                </tbody>
                <?php } ?>
              </table>
            </div>
            <!-- table container -->
            <a
              href="add_post.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new post</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                  <tr>
                    <td class="tm-product-name">Product Category 1</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <button class="btn btn-primary btn-block text-uppercase mb-3">
              Add new category
            </button>
          </div>
        </div>
      </div>
    </div>
<?php include '../includes/admin_footer.php'?>
</body>
</html>