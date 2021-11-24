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
			!empty($_POST["category"])         ) {
            $post = new Post(
                rand(),
				$_POST['title'],
                $_POST['description'], 
				$_POST['category'],
                "56565",
                "Mhamed",
                date('d/m/y h:i')
            );
            $postC->ajouterPost($post);
            $successMsg= "Posted";
            header('Location:my_Post.php');
        }
        else
            $error = "Missing information";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .error{
    color: red;
}
</style>

</head>
<?php include '../includes/head.php'; ?>

<body>
<?php include '../includes/navbar.php'; ?>

      <br><br>
    <form class="container" method="POST" >

        <?php 
            if(isset($error)){ 
                echo '<p>'.$error.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>

        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title"  >
            <p id="errorT" class="error"><small></small></p>
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description"></textarea>
            <p id="errorD" class="error"><small></small></p>
        </div>
        <div class="mb-3">
            <label  class="form-label">Post to</label>
            <select class="mdb-select md-form" searchable="Search here.." name="category" id="category">
                <option value="" disabled selected>Choose category</option>
                <option value="1">Save planet</option>
                <option value="2">Event</option>
                <option value="3">National Tree Day</option>
                <option value="4">other</option>
            </select>     
             <p id="errorC" class="error"></p>
        </div>
        <input type="text" id="o" name="o" placeholder="Add new category" style="display:none"> 
       
        <!--<input type="text" id="autre" name="act" placeholder="Add new category">-->
        
        <button type="submit" class="btn btn-primary" name="validate">Post</button>
   </form>
   <br><br>

</body>
<?php include '../includes/footer.php'; ?>
<script type="text/javascript" src="../view/js/test.js"></script>


</html>