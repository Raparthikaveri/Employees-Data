
<?php $__env->startSection('mainContent'); ?>
<style type="text/css">
    .form-control{
        border-radius: 0px;

    }
    .padding1{
      padding: 0px !important;
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
.brder{
  border-radius: 0px !important;
}
@media only screen and (max-width: 600px)
{
    .mobile_view_heading
   {
       width:35%!important;
   }
}
.inputpadding{
  padding: 21px;
}
.buttoncolor{
background: #00bcd4 !important
}
.submit_btn
    {
        background-color: #d0b26c !important;
    }
    .col-sm-4
    {
        max-width: 32.333% !important;
    }
     .bg-white .content .text, .bg-white .content .number{
        color: #333 !important;
        padding: 2px !important;
    }
    .font_family
    {
       font-family: "Gotham Medium", Sans-serif!important;
        font-size: 19px!important;
        font-weight:400!important;
    }
    .head_font_family
    {
       font-family: "Gotham Medium", Sans-serif!important;
        font-size: 13px;
    }
    span {
        font-family: "Gotham Medium", Sans-serif!important;
        font-size: 14px;
    }
    .heading {
        font-family: "Gotham Medium", Sans-serif!important;
        font-size: 17px;
    }
     a {
        font-family: "Gotham Medium", Sans-serif!important;
        font-size: 17px;
    }
    .hover:hover
    {
        color:#d0b26c !important;
    }
    @media only screen and (max-width: 600px)
    {
       .mobile_view_benefits
       {
           margin-left:-10px !important;
       }
       .col-sm-4
       {
           max-width: 90.333% !important;
       }
       .mobile_view_minamt
       {
           margin-left: 18px !important;
       }
       .mobile_view_maxamt
       {
           margin-left: 18px !important;
       }
       .mobile_view_rewname
       {
           margin-left:0px!important;
       }
       .mobile_view_bentable
       {
           margin-left:-14px!important;
       }
       .mobile_view_documents
       {
           padding:0px !important;
           margin-top: 18px !important;
       }
       .mobile_view_ben
       {
           width:104% !important;
           margin-left: -14px!important;
       }
       .mobile_view_heading
       {
           width:40%!important;
       }
    }
</style>
<section class="content">
    <div class="block-header mb-3">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 mobile_view_heading">
                <h2 class="text-black heading">ADD EMPLOYEE
                </h2>
            </div>

        </div>
    </div>
    <div class="block-header">
     <div class="row">


     </div>
 </div>
 <div class="container-fluid">
   <form action="<?php echo e(route('save_employees')); ?>" method="post" enctype="multipart/form-data">
     <?php echo csrf_field(); ?>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                     <div class="body bg-white padding1">



                        <div class="row clearfix p-4 mb-4 rewards_section" style="box-shadow: 0px 0px 10px #ddd;margin-bottom: -0.5rem!important ">
                            <div class="w-100 mb-3 reward">
                            <div class="row">

                             <div class="col-sm-8 mb-2 pl-2">
                                            <div class="row clearfix" style="margin-bottom:-30px">
                                                <div class="col-sm-3 pr-0" style="margin-top: 5px;">
                                                    <span class="text-black font_family mobile_view_rewname " style="margin-left: 10px;">User Name</span>
                                                </div>
                                              <div class="col-sm-6 pl-0">

                                                <div class="form-group">

                                                    <input type="text" class="form-control btn-round brder" name="username" placeholder="">
                                                </div>

                                            </div>
                                          </div>
                                        </div>
                          </div>
                      </div>
                      <div class="w-100 mb-3 reward">
                      <div class="row">

                       <div class="col-sm-8 mb-2 pl-2">
                                      <div class="row clearfix" style="margin-bottom:-30px">
                                          <div class="col-sm-3 pr-0" style="margin-top: 5px;">
                                              <span class="text-black font_family mobile_view_rewname " style="margin-left: 10px;">Email</span>
                                          </div>
                                        <div class="col-sm-6 pl-0">

                                          <div class="form-group">

                                              <input type="text" class="form-control btn-round brder" name="email" placeholder="">
                                          </div>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                                  <div class="w-100 mb-3 reward">
                                  <div class="row">

                                   <div class="col-sm-8 mb-2 pl-2">
                                                  <div class="row clearfix" style="margin-bottom:-30px">
                                                      <div class="col-sm-3 pr-0" style="margin-top: 5px;">
                                                          <span class="text-black font_family mobile_view_rewname " style="margin-left: 10px;">Phone Number</span>
                                                      </div>
                                                    <div class="col-sm-6 pl-0">

                                                      <div class="form-group">

                                                          <input type="text" class="form-control btn-round brder" name="phone_no" placeholder="">
                                                      </div>

                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                              <div class="w-100 mb-3 reward">
                                              <div class="row">

                                               <div class="col-sm-8 mb-2 pl-2">
                                                              <div class="row clearfix" style="margin-bottom:-30px">
                                                                  <div class="col-sm-3 pr-0" style="margin-top: 5px;">
                                                                      <span class="text-black font_family mobile_view_rewname " style="margin-left: 10px;">Gender</span>
                                                                  </div>
                                                                <div class="col-sm-6 pl-0">

                                                                  <div class="form-group">

                                                                      <select type="text" class="form-control btn-round brder" name="gender" placeholder="">
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                        <option value="Other">Other</option>
                                                                      </select>
                                                                  </div>

                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
                    </div>
                  </div>

                    </div>
                </div>


                </div>
      <div class="row">
            <div class="col-lg-9 col-md-6 col-sm-12 mobile_view_heading">
            </div>
        <div class="col-lg-3 col-md-4 col-sm-12 mobile_view_heading text-right">
          <a href=""><button type="submit" name="button" class="btn btn-round btn-info waves-effect buttoncolor">Submit</button></a>
        </div>

      </div>
            </div>

<form>
 </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employee-data\resources\views/add_employee.blade.php ENDPATH**/ ?>