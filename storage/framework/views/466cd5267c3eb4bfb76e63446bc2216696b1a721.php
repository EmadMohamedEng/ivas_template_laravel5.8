
                                        <td class="visible-md visible-lg">
                                            <div class="btn-group">
                                                <a class="btn btn-sm btn-success show-tooltip" title="Add Post" href="<?php echo e(url("post/create?content_id=".$value->id."&title=".$value->title)); ?>" data-original-title="Add Post"><i class="fa fa-plus"></i></a>
                                                <?php if(count($value->operators) > 0): ?>
                                                <a class="btn btn-sm show-tooltip" title="Show Posts" href="<?php echo e(url("content/$value->id")); ?>" data-original-title="show Posts"><i class="fa fa-step-forward"></i></a>
                                                <?php endif; ?>
                                                <a class="btn btn-sm show-tooltip" href="<?php echo e(url("content/$value->id/edit")); ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-sm show-tooltip btn-danger" onclick="return ConfirmDelete();" href="<?php echo e(url("content/$value->id/delete")); ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                                <?php if($value->type->id == 4): ?>
                                                <a class="btn btn-sm btn-info show-tooltip" title="Add Rbt" href="<?php echo e(url("rbt/create?content_id=".$value->id."&title=".$value->title)); ?>" data-original-title="Add RBt"><i class="fa fa-plus"></i></a>
                                                <?php endif; ?>
                                                <?php if(count($value->rbt_operators) > 0): ?>
                                                <a class="btn btn-sm show-tooltip" title="Show Rbt Code" href="<?php echo e(url("rbt/$value->id")); ?>" data-original-title="show RBt_code"><i class="fa fa-step-forward"></i></a>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    <?php /**PATH D:\xampp7.3\htdocs\ivas_template_laravel5.8\resources\views/content/c_inner.blade.php ENDPATH**/ ?>