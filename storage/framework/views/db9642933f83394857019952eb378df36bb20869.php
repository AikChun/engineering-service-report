<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Your Service Reports</h1>
            <ul class="list-group">
                <?php foreach($serviceReports as $serviceReport): ?>
                    <li class="list-group-item">
                        <a href="/service_reports/<?php echo e($serviceReport['id']); ?>"><?php echo e($serviceReport['id']); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Add a Service Report</h3>
            <form method="POST" action="/service_reports/create">
                <?php echo e(csrf_field()); ?>

                <fieldset class="form-group">
                    <label for="customerName">Customer Name</label>
                    <input class="form-control" id="customerName" type="text" name="customer_name"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="contactPerson">Contact Person</label>
                    <input class="form-control" id="contactPerson" type="text" name="contact_person"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" type="email" name="email"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="telephone">Telephone</label>
                    <input class="form-control" id="telephone" type="text" name="telephone"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="fax">Fax</label>
                    <input class="form-control" id="fax" type="text" name="fax"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="referenceNumber">Reference Number</label>
                    <input class="form-control" id="referenceNumber" type="text" name="reference_number"/>
                </fieldset>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>