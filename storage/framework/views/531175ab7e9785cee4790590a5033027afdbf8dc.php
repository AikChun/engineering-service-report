<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1><?php echo e($serviceReport->id); ?></h1>
            <ul class="list-group">
                <li class="list-group-item"><?php echo e($serviceReport->customer_name); ?></li>
                <li class="list-group-item"><?php echo e($serviceReport->contact_person); ?></li>
                <li class="list-group-item"><?php echo e($serviceReport->email); ?></li>
                <li class="list-group-item"><?php echo e($serviceReport->telephone); ?></li>
                <li class="list-group-item"><?php echo e($serviceReport->fax); ?></li>
                <li class="list-group-item"><?php echo e($serviceReport->user_id); ?></li>
                <li class="list-group-item"><?php echo e($serviceReport->reference_number); ?></li>
            </ul>
            <input type="button" class="btn btn-success" value="Create" href="/service_reports/create"/>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>