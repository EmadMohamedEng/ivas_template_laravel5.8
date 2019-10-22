<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="<?php echo e(url('assets/bootstrap/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('assets/font-awesome/css/font-awesome.min.css')); ?>">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="<?php echo e(url('css/flaty.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('css/flaty-responsive.css')); ?>">

        <link rel="shortcut icon" href="img/favicon.png">
    </head>
    <body class="login-page">

        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
        <?php echo $__env->make('partial.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- BEGIN Login Form -->
                <?php echo Form::open(['url'=>'password/reset']); ?>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <?php echo Form::hidden("token",$token); ?>

                    <h3>Reset password form</h3>
                    <?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <hr/>
                    <div class="form-group">
                        <div class="controls">
                            <?php echo Form::email("email",old('email') ,['class'=>'form-control','placeholder'=>'Email']); ?><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <?php echo Form::password('password' ,['class'=>'form-control','placeholder'=>'password']); ?><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <?php echo Form::password('password_confirmation' ,['class'=>'form-control','placeholder'=>'Confirm password']); ?><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <?php echo Form::submit('Reset password',['class'=>'btn btn-primary form-control']); ?>

                        </div>
                    </div>
                    <hr/>
                <?php echo Form::close(); ?>

            <!-- END Login Form -->

        </div>
        <!-- END Main Content -->


        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <script>window.jQuery || document.write('<script src="<?php echo e(url('assets/jquery/jquery-2.1.4.min.js')); ?>"><\/script>')</script>
        <script src="<?php echo e(url('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>

        <script type="text/javascript">
            function goToForm(form)
            {
                $('.login-wrapper > form:visible').fadeOut(500, function(){
                    $('#form-' + form).fadeIn(500);
                });
            }
            $(function() {
                $('.goto-login').click(function(){
                    goToForm('login');
                });
                $('.goto-forgot').click(function(){
                    goToForm('forgot');
                });
                $('.goto-register').click(function(){
                    goToForm('register');
                });
            });
        </script>
    </body>
</html>
<?php /**PATH /home/dev/public_html/ivas_template_laravel5.8/resources/views/auth/passwords/reset.blade.php ENDPATH**/ ?>