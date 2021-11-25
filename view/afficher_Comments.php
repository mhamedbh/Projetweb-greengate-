
<?php
    include_once '../Model/Comment.php';
    include_once '../Controller/CommentC.php';

    $error = "";

    // create post
    $comment = null;
    // create an instance of the controller
    $commentC = new CommentC();
    if (
  		isset($_POST["message"])&&
        isset($_POST["validate"])
    ) {
        if (
			!empty($_POST['message']) 
            ) {
            $comment = new Comment(
                rand(),
                "56565",
                "Mhamed",
                $_POST['message'],
                date('d/m/y h:i'),
                $_GET['id_post']
            );
            $commentC->ajouterComment($comment);
            $successMsg= "Posted";
           // header('Location:afficher_Comments.php');
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
<?php include '../includes/head.php'; ?>


<body>
<?php include '../includes/navbar.php'; ?>

    <div id="snippetContent">
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <div class="container">
            <div class="be-comment-block">
                <h1 class="comments-title">Comments </h1>
                <?php
				           foreach($listeComments as $comment){
                            
		        ?>

                <div class="be-comment">
                    <div class="be-img-comment"> <a href="#"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment"> </a></div>
                    <div class="be-comment-content"> <span class="be-comment-name"> <a href="#"><?php echo $comment['pseudo_u']; ?>&nbsp;&nbsp;</i></a>
                    <?php if ($comment['id_u']=='56565') {?>
                    <a href="modifier_Comment.php?id_c=<?php echo $comment['id_c']; ?>"><i class="fas fa-edit"></i></a> <?php } ?>
                    </span> 
                    <span class="be-comment-time"> <i class="fa fa-clock-o"></i> <?php echo $comment['date_c']; ?> </span>
                    <p class="be-comment-text"> <?php echo $comment['message']; ?></p>
                    </div>
                </div>
                <?php } ?>
                <form class="container" method="POST">
                <?php 
                    if(isset($error)){ 
                    echo '<p>'.$error.'</p>'; 
                    }elseif(isset($successMsg)){ 
                    echo '<p>'.$successMsg.'</p>'; 
                    }
                ?>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group"><textarea class="form-input"  id="message" name="message" required="" placeholder="Your comment"></textarea></div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right" name="validate">Post</button>
                    </div>
                </form>
            </div>
        </div>
        <style type="text/css">
            body {
                background-color: #FFFFFF;
            }

            .be-comment-block {
                margin-bottom: 50px !important;
                border: 1px solid #edeff2;
                border-radius: 2px;
                padding: 50px 70px;
                border: 1px solid #ffffff;
            }

            .comments-title {
                font-size: 16px;
                color: #262626;
                margin-bottom: 15px;
                font-family: 'Conv_helveticaneuecyr-bold';
            }

            .be-img-comment {
                width: 60px;
                height: 60px;
                float: left;
                margin-bottom: 15px;
            }

            .be-ava-comment {
                width: 60px;
                height: 60px;
                border-radius: 50%;
            }

            .be-comment-content {
                margin-left: 80px;
            }

            .be-comment-content span {
                display: inline-block;
                width: 49%;
                margin-bottom: 15px;
            }

            .be-comment-name {
                font-size: 13px;
                font-family: 'Conv_helveticaneuecyr-bold';
            }

            .be-comment-content a {
                color: #383b43;
            }

            .be-comment-content span {
                display: inline-block;
                width: 49%;
                margin-bottom: 15px;
            }

            .be-comment-time {
                text-align: right;
            }
            .be-comment-edit {
                text-align: left;
            }


            .be-comment-time {
                font-size: 11px;
                color: #b4b7c1;
            }

            .be-comment-text {
                font-size: 13px;
                line-height: 18px;
                color: #7a8192;
                display: block;
                background: #f6f6f7;
                border: 1px solid #edeff2;
                padding: 15px 20px 20px 20px;
            }


            .form-group .form-input {
                font-size: 13px;
                line-height: 50px;
                font-weight: 400;
                color: #b4b7c1;
                width: 100%;
                height: 50px;
                padding-left: 20px;
                padding-right: 20px;
                border: 1px solid #edeff2;
                border-radius: 3px;
            }

            .form-group.fl_icon .form-input {
                padding-left: 70px;
            }

            .form-group textarea.form-input {
                height: 150px;
            }
        </style>
        <script type="text/javascript"></script>
    </div>
    <?php include '../includes/footer.php'; ?>

</body>

</html>