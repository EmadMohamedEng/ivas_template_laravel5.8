<div id="rbt">
  <?php if(isset($_REQUEST['content_id'])): ?>
  <div class="form-group">
      <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Content<span class="text-danger">*</span></label>
      <div class="col-sm-9 col-lg-10 controls">
          <select  name="content_id" class="form-control chosen-rtl">
              <option id="category_<?php echo e($_REQUEST['content_id']); ?>" value="<?php echo e($_REQUEST['content_id']); ?>"><?php echo e($_REQUEST['title']); ?></option>
          </select>
      </div>
  </div>
  <?php else: ?>
  <div class="form-group">
      <label class="col-sm-3 col-lg-2 control-label">Content<span class="text-danger">*</span></label>
      <div class="col-sm-9 col-lg-10 controls">
          <?php echo Form::select('content_id',$contents->pluck('title','id'),null,['class'=>'form-control chosen-rtl','required']); ?>

      </div>
  </div>
  <?php endif; ?>

  <?php if(!$rbt): ?>
  <div class="row">
    <div class="col-md-2 col-md-offset-5">
      <button type="button" class="btn btn-success add_rbt_code"  name="button"> <i class="fa fa-plus"></i> Add Rbt </button>
    </div>
  </div>
  <?php endif; ?>

  <?php if($rbt): ?>
  <div class="form-group">
      <label class="col-sm-3 col-lg-2 control-label">Operator<span class="text-danger">*</span></label>
      <div class="col-sm-9 col-lg-10 controls">
        <select class="form-control chosen-rtl"  name="operator_id" required>
          <?php $__currentLoopData = $operators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($operator->id); ?>" <?php if($rbt): ?> <?php if($rbt->operator_id == $operator->id): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($operator->name); ?>-<?php echo e($operator->country->title); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
  </div>

  <div class="form-group">
      <label class="col-sm-3 col-lg-2 control-label">Provider<span class="text-danger">*</span></label>
      <div class="col-sm-9 col-lg-10 controls">
        <select class="form-control chosen-rtl"  name="provider_id" required>
          <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($provider->id); ?>" <?php if($rbt): ?> <?php if($rbt->provider_id == $provider->id): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($provider->name); ?>-<?php echo e($provider->country->title); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
  </div>
  
    <div class="form-group">
        <label class="col-sm-3 col-lg-2 control-label">rbt_code <span class="text-danger">*</span></label>
        <div class="col-sm-9 col-lg-10 controls">
            <?php echo Form::number('rbt_code',null,['placeholder'=>'rbt_code','class'=>'form-control','min'=>0 , 'required']); ?>

        </div>
    </div>

  <?php endif; ?>

</div>

<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <?php echo Form::submit($buttonAction,['class'=>'btn btn-primary']); ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/rbt/input.blade.php ENDPATH**/ ?>