
<?php $__env->startSection('mainContent'); ?>
<style>
.flex-1{
  margin-bottom: 17px;
      float: right;
      display: none;
}
.relative{
  color:black;
}
.relative svg{
  width: 32px;;
}

    .progress_bar
    {
        border-radius: 15px !important;
        height: 20px !important;
    }
    .col-lg-3
    {
      max-width: 20% !important;
    }
    .heading
    {
        font-family: "Gotham Medium", Sans-serif;
        font-size: 17px;
    }
    @media only screen and (max-width: 600px)
    {
        .mobile_view_heading
       {
           width:35%!important;
       }
    }
    .buttoncolor{
    background: #00bcd4 !important
    }
</style>
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 mobile_view_heading">
                <h2 class="text-black heading">EMPLOYEES

                </h2>
            </div>

        </div>
    </div>
    <?php $message = session('message'); ?>
    <?php if($message): ?>
     <div class="alert alert-success">
         <?php echo e($message); ?>

     </div>
 <?php endif; ?>



    <div class="container-fluid">
        <!-- Basic Examples -->
        <form action="<?php echo e(route('employees')); ?>" method="get">
      <div class="row pl-3">

            <div class="col-lg-3 col-md-3 col-sm-3 mobile_view_heading">

                <select name="sort" class="form-control mt-2" style="height: 38px;" id="sort">
                    <option value="email" <?php echo e($sort == 'email'?'selected':''); ?>>Email</option>
                    <option value="username" <?php echo e($sort == 'username'?'selected':''); ?>>Username</option>
                </select>

                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 mobile_view_heading">
                  <button type="submit" class="btn btn-round btn-info waves-effect buttoncolor">Sort</button>
                </div>

          <div class="col-lg-4"></div>
        <div class="col-lg-3 col-md-4 col-sm-12 mobile_view_heading  text-right">
          <a href="<?php echo e(route('add_employee')); ?>"><button type="button" name="button" class="btn btn-round btn-info waves-effect buttoncolor">Add Employee</button></a>
        </div>

      </div>
      </form>
    </div>
        <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card bg-white text-black">

                    <div class="body bg-white">
                        <div class="table-responsive text-black">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable font_family">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Uers Name </th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                  <tbody>
                                <?php $i=1; ?>
                                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $id=$employee->id; ?>

                                      <tr>
                                          <td><?php echo e($i); ?></td>
                                          <td><?php echo e($employee->username); ?></td>
                                          <td><?php echo e($employee->email); ?></td>
                                          <td><?php echo e($employee->phone_no); ?></td>
                                          <td><?php echo e($employee->gender); ?></td>
                                          <td><a  href="<?php echo e(route('edit_employee',['id'=>$id])); ?>" class="btn btn-default btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                          <a  href="<?php echo e(route('delete_employee',['id'=>$id])); ?>" class="btn btn-default btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-delete"></i></a>
                                          </td>
                                     </tr>
                                       <?php $i++; ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($employees->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employee-data\resources\views/employees.blade.php ENDPATH**/ ?>