<?php

$posts = get_posts(
    [
        'numberpost'    =>  1,
        'post_type'     =>  'cta',
        'orderby'       =>  'date',
        'order'         =>  'ASC'          
    ]
);

foreach( $posts as $post ){ 


?>

    <!-- CTA -->
    <section id="cta" class="wrapper">
        <div class="inner">

            <?php echo $post->post_content; ?>
            
            <!-- 
            <h2>Curabitur ullamcorper ultricies</h2>
            <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
             -->
             
        </div>
    </section>

<?php

}