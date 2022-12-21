<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Podcasts <small>Podcasts update</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Podcasts</li>
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
                                <h3 class="box-title">Podcasts update</h3>
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px;">
                                <?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?php echo $action; ?>" method="post" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="news_title">Name *</label>
                                        <input type="text" class="form-control" name="podcasts_name" id="podcasts_name" placeholder="Podcasts Name" value="<?php echo $podcasts->podcasts_name;?>" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="news_title">Youtube Url *</label>
                                        <input type="text" class="form-control" name="youtube_url" id="youtube_url" placeholder="URl" value="<?php echo $podcasts->youtube_url;?>" required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="podcasts_id"  value="<?php echo $podcasts->podcasts_id;?>" required/>
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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