<div class="form-element animated fadeInRight">
    <div class="col-md-12">
      <div class="panel form-element-padding">
        <div class="panel-heading">
         <h4>Add New Grade</h4>
        </div>
             <div class="panel-body" style="padding-bottom:30px;">
                  <div class="col-md-12">
                      <form action = "<?php echo base_url('grade/save')?>">
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Grade</label>
                              <div class="col-sm-5"><input type="text" name="grade_desc" class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Grade Order</label>
                              <div class="col-sm-1"><input type="text" name="grade_order" class="form-control"></div>
                          </div>

                          <div class="form-group">
                              <a href="<?php echo base_url('grade/')?>" class="btn btn-warning"/>Back</a>
                              &nbsp;
                              &nbsp;
                              <input type="submit" class="btn btn-info" value="Save"/>
                          </div>
                      </form>


                  </div>
            </div>
        </div>
    </div>
</div>
