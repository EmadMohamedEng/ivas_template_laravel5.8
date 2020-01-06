<!-- loading -->
<div class="loading-overlay">
    <div class="spinner">
        
        <img src="<?php echo e(url('').'/'. DB::table('settings')->where('key','like','%Loading Image%')->first()->value); ?>"
            alt="loading">
    </div>
</div>
<!-- end loading -->

<style>
a:hover {
    color: #f3e5b8;
    text-decoration: none;
}
</style>

<!-- footer -->
<footer>

</footer>
<!-- end footer -->

<!-- script -->
<script src="<?php echo e(url('assets/front/')); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo e(url('assets/front/')); ?>/js/popper.min.js"></script>
<script src="<?php echo e(url('assets/front/')); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(url('assets/front/')); ?>/js/wow.min.js"></script>
<script src="<?php echo e(url('assets/front/')); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo e(url('assets/front/')); ?>/js/player_audio.js"></script>
<script src="<?php echo e(url('assets/front/')); ?>/js/merath_calculation.js"></script>
<script src="<?php echo e(url('assets/front/')); ?>/js/script.js"></script>
<script>
/* Start Active Menu */
$(function() {
    // this will get the full URL at the address bar
    var url = window.location.href;
    // passes on every "a" tag
    $("ul li a").each(function() {
        // checks if its the same on the address bar
        if (url == (this.href)) {
            $("#home").removeClass("active");
            //console.log('hi omar')
            $(this).closest("li a").addClass("active");
            $(this).closest(".submenu").css("display", "block");
        }
    });
});
/* End Active Menu */
</script>

<?php echo $__env->yieldContent('script'); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/front/footer.blade.php ENDPATH**/ ?>