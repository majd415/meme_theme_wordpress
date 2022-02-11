<!-- Pagination -->

<div id="pagination">
<div class="container">
    <div class="nav-previous alignleft">

    <?php if(is_single()): ?>
       <?php previous_post_link('<strong>  %link</strong>'); ?> 
    <?php else: ?>
       <a href="#"> older posts <?php previous_posts_link('Older Posts'); ?></a>
    <?php endif ;?>

</div>
    <div class="nav-next align-right">
    <?php if(is_single()): ?>
       <?php next_post_link('<strong> %link</strong>'); ?> 
    <?php else: ?>
       <a href="#"> next posts <?php next_posts_link('newer Posts'); ?></a>
    <?php endif ;?>
    </div>
    </div>
</div>



