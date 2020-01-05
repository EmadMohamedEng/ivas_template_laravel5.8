<?php $__env->startSection('content'); ?>

<style>
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
        <?php if($main_video): ?>
        <a href="<?php echo e(url('view_content/'.$main_video->id)); ?>">
        <div class="video">
            

            <img src="<?php echo e($main_video->image_preview); ?>" style="width:100%;height:200px" >

        </div>
        <h6 style="color: #f3e5b8; margin:10px;text-align:center"><?php echo e($main_video->title); ?></h6>
    </a>


        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            <h5 class="modal-title" id="exampleModalLabel">مواقيت الصلاة</h5>
                        </div>
                        <div class="modal-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo e($hjrri_date->day.' - '.$hjrri_date->month .' - '.$hjrri_date->year); ?></th>
                                        <th><?php echo e(date('d/m/Y')); ?></th>
                                    </tr>
                                    <tr>
                                        <th>الصلاة</th>
                                        <th>الوقت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $prayer_times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key); ?></td>
                                        <td><?php echo e($value); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" data-toggle="modal" data-target="#exampleModal2">اقرب مسجد</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->



            <!-- Modal2 -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            <h5 class="modal-title" id="exampleModalLabel">اقرب مسجد</h5>
                        </div>
                        <div class="modal-body">
                            <div id="map"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal" data-toggle="modal" data-target="#exampleModal">مواقيت الصلاة</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal2 -->

        <?php endif; ?>
        <!------------------------------------------------------------->

        <div class="el_shuo5">
            <div class="row">
                <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6">
                    <a href="<?php echo e(url('list_services/'.$provider->id)); ?>">
                        <img src="<?php echo e(url($provider->image)); ?>" alt="<?php echo e($provider->title); ?>">
                        <h6><?php echo e($provider->title); ?></h6>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

        <!---------------------------------------------------------------------->
        


        <!-------------------------------------------------------------------------------->
        <div class="el_5damat el_5damat_2">
            <h2>الموضوعات</h2>
            <div class="row">
                <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-4">
                    <a href="<?php echo e(url('list_contents/'.$topic->id)); ?>">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="<?php echo e(url($topic->image)); ?>" alt="<?php echo e($topic->title); ?>">
                        <h6><?php echo e($topic->title); ?></h6>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<!--====================== Modal =================== -->
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(url('assets/front/')); ?>/js/mosque.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkPbH3-wDpLOsruf4eBsae2q3xnb6153s&libraries=places&callback=initMap&language=ar" async defer></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/front/home.blade.php ENDPATH**/ ?>