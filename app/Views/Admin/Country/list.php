<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Country <small>Country List</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Country</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-lg-9">
                                <h3 class="box-title">Country List</h3>
                            </div>
                            <div class="col-lg-3">
                                <a href="<?php echo base_url('Admin/Country/create') ?>"
                                   class="btn btn-block btn-primary">Add</a>
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px;">
                                <?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?>
                            </div>
                        </div>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped text-capitalize">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            foreach ($country as $val) { ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $val->country_name; ?></td>
                                    <td width="180">
                                        <!--                                        <a href="-->
                                        <?php //echo base_url('Admin/People/view/'.$val->people_id)?><!--" class="btn btn-primary btn-xs">View</a>-->
                                        <a href="<?php echo base_url('Admin/Country/update/' . $val->country_id) ?>" class="btn btn-warning btn-xs">Update</a>
                                        <a href="<?php echo base_url('Admin/Country/delete/' . $val->country_id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to Delete?')">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>

                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>