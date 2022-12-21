<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Event <small>Event Update</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Event</li>
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
                                <h3 class="box-title">Event Update</h3>
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
                        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="news_title">Event Name *</label>
                                        <input type="text" class="form-control" name="event_name" id="event_name" placeholder="Event Name" value="<?php echo $event->event_name;?>" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="news_title">Short Details *</label>
                                        <textarea class="form-control" name="short_details" placeholder="Short Details" required><?php echo $event->short_details;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="news_title">Location *</label>
                                        <input type="text" class="form-control" name="location" id="location" placeholder="Location" value="<?php echo $event->location;?>" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="news_title">Event Date *</label>
                                        <input type="date" class="form-control" name="event_date" id="event_date" value="<?php echo $event->event_date;?>" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="news_title">URL *</label>
                                        <input type="text" class="form-control" name="url" id="url" placeholder="Url" value="<?php echo $event->url;?>" required/>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="event_id" value="<?php echo $event->event_id;?>" required/>
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