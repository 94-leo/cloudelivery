<?php $__env->startSection('info'); ?>
    <!-- <div style="padding: 20px 30px; background: rgb(243, 156, 18); z-index: 999999; font-size: 16px; font-weight: 600;">
        <a class="pull-right" href="#" data-toggle="tooltip" data-placement="left" title=""
           style="color: rgb(255, 255, 255); font-size: 20px;" data-original-title="Never show me this again!">×</a><a
                href="https://themequarry.com"
                style="color: rgba(255, 255, 255, 0.9); display: inline-block; margin-right: 10px; text-decoration: none;">Ready
            to sell your theme? Submit your theme to our new marketplace now and let over 200k visitors see it!</a><a
                class="btn btn-default btn-sm" href="https://themequarry.com"
                style="margin-top: -5px; border: 0px; box-shadow: none; color: rgb(243, 156, 18); font-weight: 600; background: rgb(255, 255, 255);">Let's
            Do It!</a></div> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title', 'Cloudelivery - Painel','Subtítulo'); ?>

<?php $__env->startSection('content_header'); ?>

        <h1>
            Painel
            <small>Preview of UI elements</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">UI</a></li>
            <li class="active"><?php echo e(var_dump(Route::getFacadeRoot()->current()->uri())); ?></li>
        </ol>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-tag"></i> Color Palette</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Primary</h4>

                    <div class="color-palette-set">
                        <div class="bg-light-blue disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-light-blue color-palette"><span>#3c8dbc</span></div>
                        <div class="bg-light-blue-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Info</h4>

                    <div class="color-palette-set">
                        <div class="bg-aqua disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-aqua color-palette"><span>#00c0ef</span></div>
                        <div class="bg-aqua-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Success</h4>

                    <div class="color-palette-set">
                        <div class="bg-green disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-green color-palette"><span>#00a65a</span></div>
                        <div class="bg-green-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Warning</h4>

                    <div class="color-palette-set">
                        <div class="bg-yellow disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-yellow color-palette"><span>#f39c12</span></div>
                        <div class="bg-yellow-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Danger</h4>

                    <div class="color-palette-set">
                        <div class="bg-red disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-red color-palette"><span>#f56954</span></div>
                        <div class="bg-red-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Gray</h4>

                    <div class="color-palette-set">
                        <div class="bg-gray disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-gray color-palette"><span>#d2d6de</span></div>
                        <div class="bg-gray-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Navy</h4>

                    <div class="color-palette-set">
                        <div class="bg-navy disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-navy color-palette"><span>#001F3F</span></div>
                        <div class="bg-navy-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Teal</h4>

                    <div class="color-palette-set">
                        <div class="bg-teal disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-teal color-palette"><span>#39CCCC</span></div>
                        <div class="bg-teal-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Purple</h4>

                    <div class="color-palette-set">
                        <div class="bg-purple disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-purple color-palette"><span>#605ca8</span></div>
                        <div class="bg-purple-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Orange</h4>

                    <div class="color-palette-set">
                        <div class="bg-orange disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-orange color-palette"><span>#ff851b</span></div>
                        <div class="bg-orange-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Maroon</h4>

                    <div class="color-palette-set">
                        <div class="bg-maroon disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-maroon color-palette"><span>#D81B60</span></div>
                        <div class="bg-maroon-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Black</h4>

                    <div class="color-palette-set">
                        <div class="bg-black disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-black color-palette"><span>#111111</span></div>
                        <div class="bg-black-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>