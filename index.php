<?php get_header(); ?>

<div class="clearfix"></div>
<div class="content">
    <div class="column column-3 border"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/phone.png"
                                                         alt=""></a></div>
    <div class="column column-3 border"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/basket.png" alt=""></a>
    </div>
    <div class="column column-3 border"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/earth.png"
                                                         alt=""></a></div>
    <div class="column column-3 border"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/search.png" alt=""></a>
    </div>
    <div class="clearfix"></div>
    <div class="ipad"><img src="<?php bloginfo('template_url') ?>/img/ipad.png" alt="ipad">
     <h3>Lorem Ipsum is simply dummy text</h3>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!--post-->
        <?php endwhile; ?>
    <!--post navigation-->
        <?php else: ?>
    <!--no posts found-->
        <?php endif; ?>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
        and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
        leap
        into electronic typesetting, remaining essentially unchanged. <br> <br>

        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
        and
        more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
        Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
        been
        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
        type
        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
        with
        the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
<div class="border"></div>
<div class="column column-2 bottom"><img src="<?php bloginfo('template_url') ?>/img/screen_shot.png" alt=""></div>
<div class="column column-2 bottom">
    <h4>Why choose us ?</h4>
    <ul>
        <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting</a></li>
        <li><a href="#">Lorem Ipsum has been the industry's standard dummy text ever</a></li>
        <li><a href="#">When an unknown printer took a galley of type and scrambled</a></li>
        <li><a href="#">It has survived not only five centuries, but also the leap into electronic </a></li>
        <li><a href="#">It was popularised in the 1960s with the release of Letraset sheets containing</a></li>
        <li><a href="#">More recently with desktop publishing software like Aldus PageMaker</a></li>
    </ul>
</div>
<div class="clearfix"></div>
<hr>
<div class="column column-2 login">
    <p>Member login</p>
    <input type="text" name="username" placeholder="Username"><input type="password" name="password"
                                                                     placeholder="Password">
    <a href="#">
        <button>Log me in</button>
    </a>
</div>
<div class="column column-2 email">
    <p>Subscribe to our weekly newsletter</p>
    <input type="email" name="email" placeholder="Email adress">
    <a href="#">
        <button>Subscribe</button>
    </a>
</div>
</div>
</div>


<?php get_footer(); ?>
