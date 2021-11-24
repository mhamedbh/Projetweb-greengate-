<?php
    include_once '../Model/Comment.php';
    include_once '../Controller/CommentC.php';
    

    $error = "";

    // create post
    $comment = null;

    // create an instance of the controller
    $commentC = new CommentC();
    if (
		isset($_POST["message"]) &&
        isset($_POST["id_c"]) &&
		isset($_POST["id_post"])

        
    ) {
        if (
            !empty($_POST["message"]) 
        ) {
            $comment = new Comment(
                $_GET['id_c'],
				"56565",
                "Mhamed", 
				$_POST['message'],
                date("d/m/y h:i"),
                $_GET['id_post']

            );
            $commentC->modifierComment($comment, $_GET["id_c"]);
           // header("Location:afficher_Comments.php");
        }
        else
            $error = "Missing information";
    }    
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>


<body>
<?php include '../includes/navbar.php'; ?>
<div id="error">
    <?php echo $error; ?>
</div>

<br> <br>
    <?php
		if (isset($_GET['id_c'])){
		$comment = $commentC->recupererComment($_GET['id_c']);			
	?>   
    <div class="justified">       
    <form action="" method="POST" >

        <textarea class="form-input"  id="message" name="message"><?php echo $comment['message']; ?></textarea>
        <br>
        <button type="submit" class="btn btn-secondary btn-lg btn-block" name="validate">Edit</button>
        <br><br>
    </form>
    </div>
    <?php  } ?>
<?php include '../includes/footer.php'; ?>
</body>
<style>
    div.justified {
        display: flex;
        justify-content: center;

    }
    textarea {
    width: 300px;
    height: 150px;
    }      
</style>

</html>