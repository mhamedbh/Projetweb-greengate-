<?php
	include '../Controller/PostC.php';
	$postC=new PostC();
	$listePosts=$postC->afficherPost(); 
?>

<html lang="en">
<?php include '../includes/tab_head.php'; ?>

<body>
<?php include '../includes/navbar.php'; ?>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>My posts <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Pub date </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php
				foreach($listePosts as $post){
                    if($post['id_author']=="56565"){
		      	?>

                <tbody>
                    <tr>

                        <td><?php echo $post['title']; ?></td>
                        <td><?php echo $post['description_p']; ?></td>
                        <td><?php echo $post['category']; ?></td>
                        <td><?php echo $post['date_pub']; ?></td>
                        <td>
                    
					   

                            <a href="afficher_Post.php" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="modifier_Post.php?id_post=<?php echo $post['id_post']; ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="delete_Post.php?id_post=<?php echo $post['id_post']; ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
                <?php
				}}
			    ?>

            </table>
        </div>
    </div>  
</div>   
</body>
<?php include '../includes/footer.php'; ?>

</html>

