<?php /* Template Name: Store */ ?>

<?php get_template_part('head'); ?>
<?php get_header(); ?>
<?php include ('functions'); ?>

<div id="main">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/hethe-srodawa-czfqhrsweae-fx7.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/titanfall_2_become_one-1920x1080.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/hethe-srodawa-takedown.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/red3.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/Phase_Shift_2.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/red4.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/Heavy_sketches_01.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/Heavy_sketches_02.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/hethe11.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/hethe06.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/red1.jpg" onclick="onClick(this)" style="cursor:pointer">
    <img class="buy" src="<?php echo get_bloginfo('template_directory'); ?>/img/slide back.jpg" onclick="onClick(this)" style="cursor:pointer">
</div>
<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
        <img id="img01" style="width:100%">
    </div>
</div>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>

<?php get_footer(); ?>