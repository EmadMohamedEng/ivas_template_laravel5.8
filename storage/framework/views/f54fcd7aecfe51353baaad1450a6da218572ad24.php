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
<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">Operator<span class="text-danger">*</span></label>
    <div class="col-sm-9 col-lg-10 controls">
      <select class="form-control chosen-rtl"  name="operator_id[]" required <?php if(!$post): ?> multiple <?php endif; ?>>
        <?php $__currentLoopData = $operators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($operator->id); ?>" <?php if($post): ?> <?php if($post->operator_id == $operator->id): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($operator->name); ?>-<?php echo e($operator->country->title); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
        <!-- <?php echo Form::select('operator_id[]',$operators->pluck('name','id'),null,['class'=>'form-control chosen-rtl','id' => 'first_select','required' ,'multiple']); ?> -->
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">Published Date <span class="text-danger">*</span></label>
    <div class="col-sm-9 col-lg-10 controls">
        <?php echo Form::text('published_date',null,['placeholder'=>'published_date','class'=>'form-control js-datepicker' ,'value' => 'date("Y-m-d")' , 'autocomplete' => 'off' ]); ?>

    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">Status<span class="text-danger">*</span></label>
    <div class="col-sm-9 col-lg-10 controls">
        <?php echo Form::select('active',array('1' => 'Active' , '0' => 'Not Active'),null,['class'=>'form-control chosen-rtl','required']); ?>

    </div>
</div>


<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        <?php echo Form::submit($buttonAction,['class'=>'btn btn-primary']); ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ivas_template_laravel5.8\resources\views/post/input.blade.php ENDPATH**/ ?>