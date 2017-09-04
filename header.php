<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name')?></title>
    <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">
</head>
<body>
<?php echo home_url('')?>
<div class="container">
    <header class="clearfix">
        <img src="<?php bloginfo('template_url')?>/img/Arrow%20left%20in%20a%20circle.png" alt="left-arrow" class="left-arrow">
        <section class="column column-2">
            <span class="header-title">Leo/-</span>
        </section>
        <section class="header-navigation-block column column-2">
            <nav>
                <ul>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </section>
        <div class="clearfix"></div>
        <section class="header-title column column-2">
            <img src="<?php bloginfo('template_url')?>/img/icon.png" alt="logo" class="header-logo">
        </section>
        <section class="header-info">
            <h1>Introducing</h1>
            <h2>Something hot......</h2>
            <button type="submit" class="button">Try Demo</button>
        </section>
        <a href="#"><img src="<?php bloginfo('template_url')?>/img/Arrow%20right%20in%20a%20circle.png" alt="right-arrow" class="right-arrow"></a>
    </header>