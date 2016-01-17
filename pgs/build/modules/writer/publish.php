<!-- Left side column. contains the logo and sidebar -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper overflow-y">
    <!-- Main content -->
    <section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Compose New Message</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <input class="form-control" placeholder="To:">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Subject:">
                </div>
                <div class="form-group">
                    <div id="compose-textarea" contenteditable="true" class="form-control" style="height: 10em">
                    </div>
                </div>
                <div class="form-group">
                    <a class="btn  btn-default emoji-caller" data-fred-action="insertEmoji" title="插入表情"
                       tabindex="-1" href="javascript:;" unselectable="on">
                        <span class="fa fa-smile-o"></span>
                    </a>


                    <div class="emoji-panel-parent ">
                        <div class="btn-group bg-gray-light emoji-panel">
                        </div>
                    </div>


                    <div class="btn btn-default btn-file">
                        <i class="fa  fa-picture-o"></i>
                        <input type="file" name="">
                    </div>
                    <p class="help-block">Max. 32MB</p>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <div class="pull-right">
                    <button class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
                <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div><!-- /.box-footer -->
        </div><!-- /. box -->
    </div><!-- /.col -->
</div><!-- /.row -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->