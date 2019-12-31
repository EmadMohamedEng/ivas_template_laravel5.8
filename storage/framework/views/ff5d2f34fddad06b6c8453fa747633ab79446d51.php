<td>
     <input type="text"  id="url_h<?php echo e($value->id); ?><?php echo e($key); ?><?php echo e($value->pivot->id); ?>" value="<?php echo e($value->pivot->url); ?>">
     <span class="btn"><?php echo e($value->country->title); ?>-<?php echo e($value->name); ?></span>
     <span class="btn" onclick="x = document.getElementById('url_h<?php echo e($value->id); ?><?php echo e($key); ?><?php echo e($value->pivot->id); ?>'); x.select();document.execCommand('copy')"> <i class="fa fa-copy"></i> </span>
     <br>
</td>
<?php /**PATH D:\xampp7.3\htdocs\ivas_template_laravel5.8\resources\views/post/urls.blade.php ENDPATH**/ ?>