<?php $__env->startSection('content'); ?>
<style>
    .main h2 {
        text-align: center;
        color: #f3e5b8;
        margin-bottom: 10%;
    }

    /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
    #map {
        height: 55vh;
        width: 100%;
        border: 3px solid #f5c52a;
    }

    .gm-style .gm-style-iw {
        text-align: right !important
    }

</style>

<!-- main content -->
<div class="main">
    <div class="container">
        <h2>اقرب مسجد</h2>
        <div id="map"></div>

    </div>
</div>
<!-- end main content -->
<?php $__env->stopSection(); ?>
<!--====================== Modal =================== -->
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(url('assets/front/')); ?>/js/mosque.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkPbH3-wDpLOsruf4eBsae2q3xnb6153s&libraries=places&callback=initMap&language=ar" async defer></script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/front/mosque.blade.php ENDPATH**/ ?>