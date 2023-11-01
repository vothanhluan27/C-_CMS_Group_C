<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav class="navbar navbar-icon-top navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Group C</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default" style="background-color: #FFFFFF;"><a href="search.php">Submit</a> </button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Thể thao</a>
                    <a href="#">Khoa học</a>
                    <a href="#">Tin tức</a>
                </li>
                <li>
                    <a href="#">
                        <i style="font-size:22px;" class='fa fa-ellipsis-h' style='color: #1E1E1E'></i>
                        <h6>Menu</h6> 
                    </a>
                </li>  
                <li>
                    <a href="searchform.php">
                        <i style="font-size:20px;" class='fa fa-search' ></i>
                        <h6>Search</h6>
                    </a>
                </li>        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="fa fa-user-circle-o"></i>
                        <h5> Account <span class="caret"></span></h5>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<style>
@import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

.navbar-icon-top .navbar-nav>li>a>.fa, .navbar-icon-top .navbar-nav>li>a>.glyphicon {
    position: relative;
    width: 36px;
    font-size: 24px;
}
.navbar-icon-top .navbar-nav>li>a>.fa>.badge, .navbar-icon-top .navbar-nav>li>a>.glyphicon>.badge {
    position: absolute;
    right: 0;
    font-family: sans-serif;
}
.navbar-icon-top .navbar-nav>li>a>.fa {
    top: 3px;
    line-height: 12px;
}
.navbar-icon-top .navbar-nav>li>a>.fa>.badge {
    top: -10px;
}
.navbar-icon-top .navbar-nav>li>a>.glyphicon {
    top: 6px;
    line-height: 6px;
}
.navbar-icon-top .navbar-nav>li>a>.glyphicon>.badge {
    top: -16px;
}

@media (min-width: 768px) {
    .navbar-icon-top .navbar-brand {
        padding: 28px  15px;
    }
    .navbar-icon-top .navbar-text {
        margin-top: 25px;
        margin-bottom: 25px;
    }
    .navbar-icon-top .navbar-btn, .navbar-icon-top .navbar-form {
        margin-top: 18px;
        margin-bottom: 18px;
    }
    .navbar-icon-top .navbar-nav>li>a {
        text-align: center;
        display: table-cell;
        height: 70px;
        vertical-align: middle;
        padding-top: 0;
        padding-bottom: 0;
    }
    .navbar-icon-top .navbar-nav>li>a>.fa, .navbar-icon-top .navbar-nav>li>a>.glyphicon {
        display: block;
        width: 48px;
        margin: 2px auto 4px auto;
        top: 0;
        line-height: 24px;
    }
    .navbar-icon-top .navbar-nav>li>a>.fa>.badge, .navbar-icon-top .navbar-nav>li>a>.glyphicon>.badge {
        top: -7px;
    }
}
input.form-control {
    border-radius: 5px;
    border: 1px solid #CCCCCC;
}
</style>