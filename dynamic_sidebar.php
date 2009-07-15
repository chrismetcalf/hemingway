<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
<hr class="hide" />
<div id="ancillary">
  <div class="inside">
    <div class="block first">
      <?php dynamic_sidebar("Footer 1"); ?>
    </div>

    <div class="block">
      <?php dynamic_sidebar("Footer 2"); ?>
    </div>

    <div class="block">
      <?php dynamic_sidebar("Footer 3"); ?>
    </div>

    <div class="clear"></div>
  </div>
</div>
<?php endif; ?>
