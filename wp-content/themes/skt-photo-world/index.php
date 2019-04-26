<?php 
    get_header(); 
?>
<?php if( is_home() && get_option('page_for_posts') ) { ?>
<div class="row">
    <h2 style="font-weight: bold; color: #fff; text-align: justify;">WELCOME TO PSPL</h2>
    
</div>
<?php wp_footer(); ?>
</body>
</html><?php } ?>