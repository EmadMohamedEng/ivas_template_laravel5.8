<?php $__env->startSection('page_title'); ?>
  Content
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>Content Form</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <?php if($content): ?>
                    <?php echo Form::model($content,["url"=>"content/$content->id","class"=>"form-horizontal","method"=>"patch","files"=>"True"]); ?>

                    <?php echo $__env->make('content.input',['buttonAction'=>'Edit','required'=>'  (optional)'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                    <?php echo Form::open(["url"=>"content","class"=>"form-horizontal","method"=>"POST","files"=>"True"]); ?>

                    <?php echo $__env->make('content.input',['buttonAction'=>'Save'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                    <?php echo Form::close(); ?>

                </div>
            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $('#contents').addClass('active');
        $('#contents_create').addClass('active');

        $('#first_select').on('change', function() {
            if (this.value == 1) {
              $('#advanced').show(1000);
              $('#normal').hide('slow').find('input').prop('disabled',true);
              $('#image').hide('slow').find('input').prop('disabled',true);
              $('#audio').hide('slow').find('input').prop('disabled',true);
              $('#video').hide('slow').find('input').prop('disabled',true);
              $('#external').hide('slow').find('input').prop('disabled',true);
            }
            if (this.value == 2) {
              $('#normal').show(1000).find('input').prop('disabled',false);
              $('#advanced').hide('slow');
              $('#image').hide('slow').find('input').prop('disabled',true);
              $('#audio').hide('slow').find('input').prop('disabled',true);
              $('#video').hide('slow').find('input').prop('disabled',true);
              $('#external').hide('slow').find('input').prop('disabled',true);
            }
            if (this.value == 3) {
              $('#image').show(1000).find('input').prop('disabled',false);
              $('#advanced').hide('slow');
              $('#normal').hide('slow').find('input').prop('disabled',true);
              $('#audio').hide('slow').find('input').prop('disabled',true);
              $('#video').hide('slow').find('input').prop('disabled',true);
              $('#external').hide('slow').find('input').prop('disabled',true);
            }
            if (this.value == 4) {
              $('#audio').show(1000).find('input').prop('disabled',false);
              $('#advanced').hide('slow');
              $('#image').hide('slow').find('input').prop('disabled',true);
              $('#normal').hide('slow').find('input').prop('disabled',true);
              $('#video').hide('slow').find('input').prop('disabled',true);
              $('#external').hide('slow').find('input').prop('disabled',true);
            }
            if (this.value == 5) {
              $('#video').show(1000).find('input').prop('disabled',false);
              $('#advanced').hide('slow');
              $('#image').hide('slow').find('input').prop('disabled',true);
              $('#audio').hide('slow').find('input').prop('disabled',true);
              $('#normal').hide('slow').find('input').prop('disabled',true);
              $('#external').hide('slow').find('input').prop('disabled',true);
            }

            if (this.value == 6) {
              $('#external').show(1000).find('input').prop('disabled',false);
              $('#advanced').hide('slow');
              $('#image').hide('slow').find('input').prop('disabled',true);
              $('#audio').hide('slow').find('input').prop('disabled',true);
              $('#normal').hide('slow').find('input').prop('disabled',true);
              $('#video').hide('slow').find('input').prop('disabled',true);
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp7.3\htdocs\ivas_template_laravel5.8\resources\views/content/form.blade.php ENDPATH**/ ?>