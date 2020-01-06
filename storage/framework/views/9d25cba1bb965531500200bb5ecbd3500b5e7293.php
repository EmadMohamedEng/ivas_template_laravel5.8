<?php $__env->startSection('content'); ?>
<?php
preg_match("/iPhone|iPad|iPod/", $_SERVER['HTTP_USER_AGENT'], $matches);
$os = current($matches);

switch ($os) {
    case 'iPhone':
        if (preg_match('/OS 8/', $_SERVER['HTTP_USER_AGENT']) || preg_match('/OS 9/', $_SERVER['HTTP_USER_AGENT'])) {
            $Att = '&body=';
        } else {
            $Att = ';';
        }
        break;
    case 'iPad': $Att = '&body=';
        break;
    case 'iPod': $Att = '&body=';
        break;
    default : $Att = '?body=';
        break;
}?>
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
<?php if($content->content_type_id == 5): ?>
<div class="main">
    <div class="container">
        <div class="video_page">
            <div class="title_content">
                <h6><?php echo e($content->title); ?></h6>
                <img src="<?php echo e(url($content->image_preview)); ?>" alt="<?php echo e($content->title); ?>">
            </div>

            <div class="video">
                <video class="mx-auto d-block text-center" id="myVideo" width="100%" controls>
                    <source src="<?php echo e(url($content->path)); ?>" type="video/mp4">
                </video>
                <h6><?php echo e($content->title); ?></h6>
            </div>

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

            <div class="btns">
            <a class="btn" href="<?php echo e(url('list_contents/'.$content->category_id)); ?>">المزيد</a>
            </div>
        </div>
    </div>
</div>
<?php elseif($content->content_type_id == 4): ?>
<div class="main">
    <div class="container">
        <div class="audio_page">

            <div class="title_content">
                <h6><?php echo e($content->title); ?></h6>
            </div>
            <div class="audio">
                <div class="audio-player">
                    <audio id="player" src="<?php echo e(url($content->path)); ?>"></audio>

                    <div class="time-holder cf">
                        <div class="duration">00:50</div>
                        <div>/</div>
                        <div class="current-time">00:00</div>
                    </div>

                    <div class="audio-controls flex-container">
                        <div class="play-btn flex-col-1">
                            <span class="fa fa-play"></span>
                        </div>
                    </div>

                    <div class="seek-bar">
                        <div class="seek-bar-track"></div>
                        <div class="seek-bar-thumb"></div>
                    </div>
                </div>
            </div>

            <div class="btns">
            <a class="btn" href="<?php echo e(url('list_contents/'.$content->category_id)); ?>">المزيد</a>
            </div>

        </div>
    </div>
</div>
<?php elseif($content->content_type_id == 3): ?>
<div class="main">
    <div class="container">
        <div class="image_page">
            <div class="title_content">
                <h6><?php echo e($content->title); ?></h6>
            </div>

            <div class="video">
                <img src="<?php echo e(url($content->path)); ?>" alt="" class="mx-auto d-block text-center" width="100%">
            </div>

            <div class="btns">
                <a class="btn" href="<?php echo e(url('list_contents/'.$content->category_id)); ?>">المزيد</a>
            </div>
            <div class="btns">
                <a class="btn" href="<?php echo e(url($content->path)); ?>"download>تحميل</a>
            </div>
        </div>
    </div>
</div>
<?php elseif($content->content_type_id == 6): ?>
<div class="main">
    <div class="container">
        <div class="image_page">
            <div class="title_content">
                <h6><?php echo e($content->title); ?></h6>
            </div>

            <div class="video">
            <iframe style="width: 100%" src="<?php echo e(url($content->path)); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="btns">
            <a class="btn" href="<?php echo e(url('list_contents/'.$content->category_id)); ?>">المزيد</a>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="main">
    <div class="container">
        <div class="image_page">
            <div class="title_content">
                <h6><?php echo e($content->title); ?></h6>
            </div>

            <?php echo $content->path; ?>



            <div class="btns">
            <a class="btn" href="<?php echo e(url('list_contents/'.$content->category_id)); ?>">المزيد</a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<!--====================== Modal =================== -->
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(url('assets/front/')); ?>/js/mosque.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkPbH3-wDpLOsruf4eBsae2q3xnb6153s&libraries=places&callback=initMap&language=ar" async defer></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/front/play_video.blade.php ENDPATH**/ ?>