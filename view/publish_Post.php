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
    <form class="container" method="POST" id="form">

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
            <small></small>
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description"></textarea>
            <p id="errorD" class="error"><small></small></p>
            <small></small>
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
             <small></small>
        </div>
        <input type="text" id="o" name="o" placeholder="Add new category" style="display:none"> 
       
        <!--<input type="text" id="autre" name="act" placeholder="Add new category">-->
        
        <button type="submit" class="btn btn-primary" name="validate">Post</button>
   </form>
   <br><br>

</body>
<?php include '../includes/footer.php'; ?>
<script type="text/javascript" src="../view/js/test.js"></script>

<style type="text/css">
    .mb-3 {
	margin-bottom: 10px;
	padding-bottom: 20px;
	position: relative;
}

.form-label {
    color: #000000;
	display: inline-block;
	margin-bottom: 5px;
}
.mb-3 select {
	border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-family: inherit;
	font-size: 14px;
	padding: 10px;
	width: 100%;
}
.mb-3 textarea {
	border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-family: inherit;
	font-size: 14px;
	padding: 10px;
	width: 100%;
}
.mb-3 input {
	border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-family: inherit;
	font-size: 14px;
	padding: 10px;
	width: 100%;
}
.mb-3 select:focus {
	outline: 0;
	border-color: #777;
}
.mb-3.success select {
	border-color: #2ecc71;
}

.mb-3.error select {
	border-color: #e74c3c;
}
.mb-3 input:focus {
	outline: 0;
	border-color: #777;
}
.mb-3.success input {
	border-color: #2ecc71;
}

.mb-3.error input {
	border-color: #e74c3c;
}
.mb-3 textarea:focus {
	outline: 0;
	border-color: #777;
}
.mb-3.success textarea {
	border-color: #2ecc71;
}

.mb-3.success textarea {
	border-color: #2ecc71;
}

.mb-3.error textarea {
	border-color: #e74c3c;
}

.mb-3 small {
	color: #e74c3c;
	position: absolute;
	bottom: 0;
	left: 0;
	visibility: hidden;
}

.mb-3.error small {
	visibility: visible;
}


</style>
</html>