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
        isset($_POST["description_p"]) && 
        isset($_POST["category"])
    ) {
        if (
            !empty($_POST["title"]) && 
			!empty($_POST['description_p']) &&
            !empty($_POST["category"])
        ) {
            $post = new Post(
                $_POST['id_post'],
				$_POST['title'],
                $_POST['description_p'], 
				$_POST['category'],
                $_POST['id_author'],
                $_POST['pseudo_author'],
                date("d/m/y h:i")
            );
            $postC->modifierPost($post, $_GET["id_post"]);
            header('Location:my_Post.php');
        }
        else
            $error = "Missing information";
    }    
?>

<html lang="en">
<?php include '../includes/tab_head.php'; ?>

    <body>
    <?php include '../includes/navbar.php'; ?>
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET['id_post'])){
				$post = $postC->recupererPost($_GET['id_post']);
				
		?>
        <br><br>
        <form action="" method="POST">

        
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="title">Title:
                        </label>
                    </td>
                    <td><input type="text" name="title" id="title" value="<?php echo $post['title']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="description">Descripption:
                        </label>
                    </td>
                    <td>
                        <textarea name="description_p" id="description"><?php echo $post['description_p']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">category:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="category" id="category" value="<?php echo $post['category']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name="modifier"> 
                    </td>
                </tr>
            </table>
       
        </form>
        <?php
		}
		?>
		
    

</body>
<?php include '../includes/footer.php'; ?>

</html>