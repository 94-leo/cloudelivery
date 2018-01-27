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
            <li><a href="#"><i class="fa fa-dashboard"></i> Opção</a></li>
            <li><a href="#">Sub opção</a></li>
            <li class="active">Tela</li>
        </ol>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>