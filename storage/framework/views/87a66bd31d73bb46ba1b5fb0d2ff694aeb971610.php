<?php $__env->startSection('title', 'Cloudelivery - Painel'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Painel</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>You are logged in!</p>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>