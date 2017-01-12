<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo lang('pageTitle')?></title>

<?php
foreach ($css_files as $css) {
  echo("<link href=\"".$css."\" rel=\"stylesheet\">");
}
?>

<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<body id="header">
    <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>"><img src="images/logo.png" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll"><a href="<?php echo base_url()?>"><?php echo lang('home')?></a></li>
                    <?php if ($_SESSION['login'] == FALSE){
                      echo '<li class="scroll"><a href="' . base_url() .'login">' . lang('login') . '</a></li>';
                      echo '<li class="scroll"><a href="">' . lang('sign_up') . '</a></li>';
                    } else{
                      echo '<li class="scroll"><a href="'.base_url() . 'login/logout">Logout</a></li>';
                    }
                    ?>
                    <li class="scroll"><a href=""><?php echo lang('design_sticker')?></a></li>
                    <li class="scroll"><a href="<?php echo base_url() . 'shopping'?>"><?php echo lang('shopping')?></a></li>
                    <li class="scroll"><a href="<?php echo base_url() . 'welcome/lang_switch'?>"><?php if ($current_lang == 'en'){echo '繁中';}else {echo 'English';}?></a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</body><!--/header-->
