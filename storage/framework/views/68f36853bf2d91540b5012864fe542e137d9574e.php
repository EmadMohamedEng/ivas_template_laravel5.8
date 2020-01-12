<?php $__env->startSection('content'); ?>
<style>
.main h6 {
    text-align: center;
    color: #f3e5b8;
    margin-bottom: 15%;
}

.main .video_content a video {
    width: 100%;
    border: 2px solid #f3e5b8;
    border-radius: 5px;
}
.video_content .over{
    height: 130px;
}
.video_content a img{
    height: 130px;
}
</style>
<!-- main content -->


<div class="main">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item[0]->content_type_id == 5): ?>
            <div class="col-6">
                <div class="video_content">
                    <div class="over"></div>
                    <a href="<?php echo e(url('view_content/'.$item[0]->id)); ?>">
                        <div class="play_icon"><i class="far fa-play-circle fa-2x"></i></div>

                        <div class="title_content">
                            <img src="<?php echo e($item[0]->image_preview); ?>" alt="">
                        </div>
                    </a>
                </div>
                <h6><?php echo e($item[0]->title); ?></h6>
            </div>
            <?php elseif($item[0]->content_type_id == 3): ?>
            <div class="col-6">
                <div class="video_content">
                    <a href="<?php echo e(url('view_content/'.$item[0]->id)); ?>">
                        <div class="over"></div>
                        <img src="<?php echo e($item[0]->path); ?>" alt="<?php echo e($item[0]->title); ?>">
                    </a>
                </div>
                <h6><?php echo e($item[0]->title); ?></h6>
            </div>
            <?php elseif($item[0]->content_type_id == 4): ?>
            <div class="col-6">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>اختر</th>
                            <th>تشغيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="<?php echo e(url('view_content/'.$item[0]->id)); ?>">
                                    <span><?php echo e($item[0]->title); ?></span>
                                </a>
                            </td>
                            <td>
                                <div class="np-play play-status">
                                    <span class="fa fa-play" data-src="<?php echo e($item[0]->path); ?>"></span>
                                </div>
                                <audio id="audio_test" controls="controls" style="display:none">
                                    <source id="audioSource" src="">
                                </audio>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php elseif($item[0]->content_type_id == 6): ?>
            <div class="col-6">
                <div class="video_content">
                    <div class="over"></div>
                    <a href="<?php echo e(url('view_content/'.$item[0]->id)); ?>">
                        <div class="play_icon"><i class="far fa-play-circle fa-2x"></i></div>
                        <div class="title_content">
                            <img src="<?php echo e($item[0]->image_preview); ?>" alt="">
                        </div>
                    </a>
                </div>
                <h6><?php echo e($item[0]->title); ?></h6>
            </div>
            <?php else: ?>
            <div class="col-6">
                <a href="<?php echo e(url('view_content/'.$item[0]->id)); ?>">
                    <?php echo $item[0]->path; ?>

                </a>
                <h6><?php echo e($item[0]->title); ?></h6>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<!-- end main content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/front/opid.blade.php ENDPATH**/ ?>