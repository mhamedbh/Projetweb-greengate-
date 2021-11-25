
<?php
	include '../Controller/PostC.php';
	$postC=new PostC();
	$listePosts=$postC->afficherPost();
    if (isset($_POST['search'])){
        $list =$postC->afficherComments($_POST['search']);
    } 
?>
<?php
	//include '../Controller/CommentC.php';
	//$commentC=new CommentC();
	//$total=$commentC->countComments($_get['id_post']);
?>





<!DOCTYPE html>
<html lang="en">
    <?php include '../includes/head.php'; ?>


<head itemscope="" itemtype="http://schema.org/WebSite">
    <title itemprop="name">Preview Bootstrap snippets. bs4 forum</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description"
        content="Preview Bootstrap snippets. bs4 forum. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <meta name="keywords"
        content="bootdey, bootstrap, theme, templates, snippets, bootstrap framework, bootstrap snippets, free items, html, css, js">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.bootdey.com/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="135x140" href="https://www.bootdey.com/img/bootdey_135x140.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.bootdey.com/img/bootdey_76x76.png">
    <link rel="canonical" href="https://www.bootdey.com/snippets/preview/bs4-forum" itemprop="url">
    <meta property="twitter:account_id" content="2433978487" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@bootdey">
    <meta name="twitter:creator" content="@bootdey">
    <meta name="twitter:title" content="Preview Bootstrap  snippets. bs4 forum">
    <meta name="twitter:description"
        content="Preview Bootstrap snippets. bs4 forum. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <meta name="twitter:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-1108.png">
    <meta name="twitter:url" content="https://www.bootdey.com/snippets/preview/bs4-forum">
    <meta property="og:title" content="Preview Bootstrap  snippets. bs4 forum">
    <meta property="og:url" content="https://www.bootdey.com/snippets/preview/bs4-forum">
    <meta property="og:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-1108.png">
    <meta property="og:description"
        content="Preview Bootstrap snippets. bs4 forum. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <link rel="alternate" type="application/rss+xml"
        title="Latest snippets resources templates and utilities for bootstrap from bootdey.com:"
        href="http://bootdey.com/rss" />
    <link rel="author" href="https://plus.google.com/u/1/106310663276114892188" />
    <link rel="publisher" href="https://plus.google.com/+Bootdey-bootstrap/posts" />
    <meta name="msvalidate.01" content="23285BE3183727A550D31CAE95A790AB" />
    <script src="/cache-js/cache-1635427806-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript"></script>
</head>

<body>

    <?php include '../includes/navbar.php'; ?>
    <br><br>


    <div id="snippetContent">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
            integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
        <div class="container">
            <div class="main-body p-0">
                <div class="inner-wrapper">
                    <div class="inner-sidebar">
                        <div class="inner-sidebar-header justify-content-center"> <button
                                class="btn btn-primary has-icon btn-block" onclick="window.location.href='publish_Post.php'" type="button" data-toggle="modal"
                                data-target="#threadModal"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg> NEW POST </button></div>
                        <div class="inner-sidebar-body p-0">
                            <div class="p-3 h-100" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: -16px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper"
                                                style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 16px;">
                                                    <nav class="nav nav-pills nav-gap-y-1 flex-column"> <a
                                                            href="javascript:void(0)"
                                                            class="nav-link nav-link-faded has-icon active">All
                                                            Threads</a> <a href="javascript:void(0)"
                                                            class="nav-link nav-link-faded has-icon">Popular this
                                                            week</a> <a href="javascript:void(0)"
                                                            class="nav-link nav-link-faded has-icon">Popular all
                                                            time</a> <a href="javascript:void(0)"
                                                            class="nav-link nav-link-faded has-icon">Solved</a> <a
                                                            href="javascript:void(0)"
                                                            class="nav-link nav-link-faded has-icon">Unsolved</a> <a
                                                            href="javascript:void(0)"
                                                            class="nav-link nav-link-faded has-icon">No replies yet</a>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 234px; height: 292px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar"
                                        style="height: 151px; display: block; transform: translate3d(0px, 0px, 0px);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner-main">
                        <div class="inner-main-header"> <a
                                class="nav-link nav-icon rounded-circle nav-link-faded mr-3 d-md-none" href="#"
                                data-toggle="inner-sidebar"><i class="material-icons">arrow_forward_ios</i></a> 
                                 <span class="input-icon input-icon-sm ml-auto w-auto"> <input type="text"
                                    class="form-control form-control-sm bg-gray-200 border-gray-200 shadow-none mb-4 mt-4"
                                    placeholder="Search forum" /> </span></div>
                        <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                        <?php
				           foreach($listePosts as $post){
		             	?>

                            <div class="card mb-2">
                                <div class="card-body p-2 p-sm-3">
                                    <div class="media forum-item"> <a href="#" data-toggle="collapse"
                                            data-target=".forum-content"><img
                                                src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                        <div class="media-body">
                                            <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                                    class="text-body" ><?php echo $post['title']; ?></a></h6>
                                            <p class="text-secondary"> <?php echo $post['description_p']; ?></p>
                                            <p class="text-muted"><a href="javascript:void(0)"><?php echo $post['pseudo_author']; ?></a> posted at <span
                                                    class="text-secondary font-weight-bold"><?php echo $post['date_pub']; ?></span></p>
                                        </div>
                                        <div class="text-muted small text-center align-self-center"> 
                                            <a href="#" class="text-secondary"><span><i class="far fa-eye"></i> 19</span></a>
                                            <?php //foreach($total as $value) {?>
                                            <a href="afficher_Comments.php?id_post=<?php echo $post['id_post']; ?>" class="text-secondary">
                                            <span><i class="far fa-comment ml-2"></i> 3 <?php // echo $value ?></span></a>
                                            <?php // }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            body {
                color: #1a202c;
                text-align: left;
                background-color: #FFFFFF;
            }
            .fa-eye {
            color: grey;
            }
            .fa-comment {
            color: grey;
            }

            .inner-wrapper {
                position: relative;
                height: calc(100vh - 3.5rem);
                transition: transform 0.3s;
            }

            @media (min-width: 992px) {
                .sticky-navbar .inner-wrapper {
                    height: calc(100vh - 3.5rem - 48px);
                }
            }

            .inner-main,
            .inner-sidebar {
                position: absolute;
                top: 0;
                bottom: 0;
                display: flex;
                flex-direction: column;
            }

            .inner-sidebar {
                left: 0;
                width: 235px;
                border-right: 1px solid #cbd5e0;
                background-color: #fff;
                z-index: 1;
            }

            .inner-main {
                right: 0;
                left: 235px;
            }

            .inner-main-footer,
            .inner-main-header,
            .inner-sidebar-footer,
            .inner-sidebar-header {
                height: 3.5rem;
                border-bottom: 1px solid #cbd5e0;
                display: flex;
                align-items: center;
                padding: 0 1rem;
                flex-shrink: 0;
            }

            .inner-main-body,
            .inner-sidebar-body {
                padding: 1rem;
                overflow-y: auto;
                position: relative;
                flex: 1 1 auto;
            }

            .inner-main-body .sticky-top,
            .inner-sidebar-body .sticky-top {
                z-index: 999;
            }

            .inner-main-footer,
            .inner-main-header {
                background-color: #fff;
            }

            .inner-main-footer,
            .inner-sidebar-footer {
                border-top: 1px solid #cbd5e0;
                border-bottom: 0;
                height: auto;
                min-height: 3.5rem;
            }

            @media (max-width: 767.98px) {
                .inner-sidebar {
                    left: -235px;
                }

                .inner-main {
                    left: 0;
                }

                .inner-expand .main-body {
                    overflow: hidden;
                }

                .inner-expand .inner-wrapper {
                    transform: translate3d(235px, 0, 0);
                }
            }

            .nav .show>.nav-link.nav-link-faded,
            .nav-link.nav-link-faded.active,
            .nav-link.nav-link-faded:active,
            .nav-pills .nav-link.nav-link-faded.active,
            .navbar-nav .show>.nav-link.nav-link-faded {
                color: #3367b5;
                background-color: #c9d8f0;
            }

            .nav-pills .nav-link.active,
            .nav-pills .show>.nav-link {
                color: #fff;
                background-color: #467bcb;
            }

            .nav-link.has-icon {
                display: flex;
                align-items: center;
            }

            .nav-link.active {
                color: #467bcb;
            }

            .nav-pills .nav-link {
                border-radius: .25rem;
            }

            .nav-link {
                color: #4a5568;
            }

            .card {
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            }

            .card {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0 solid rgba(0, 0, 0, .125);
                border-radius: .25rem;
            }

            .card-body {
                flex: 1 1 auto;
                min-height: 1px;
                padding: 1rem;
            }
        </style>
        <script type="text/javascript"></script>
    </div>
    <br><br>
    <?php include '../includes/footer.php'; ?>

</body>

</html>
