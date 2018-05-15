<div class="form-element animated fadeInRight">
    <div class="col-md-12">
      <div class="panel form-element-padding">
        <div class="panel-heading">
         <h4>Add New Employee</h4>
        </div>
             <div class="panel-body" style="padding-bottom:30px;">
                  <div class="col-md-12">
                      <form action = "<?php echo base_url('employee/save')?>" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Employee ID</label>
                              <div class="col-sm-5"><input type="text" name="emp_id" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Employee Name</label>
                              <div class="col-sm-5"><input type="text" name="emp_name" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Birthdate</label>
                              <div class="col-sm-5">
                                       <input type="text" class="dateAnimate" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Birth Place</label>
                              <div class="col-sm-5"><input type="text" name="emp_name" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Gender</label>
                              <div class="col-sm-12 padding-0">
                                  <input type="radio" name="option"> Male
                                </div>
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="option"> Female
                                </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Religion</label>
                              <div class="col-sm-5">
                                  <select class="form-control" style="margin-top: 0px !important">
                                      <option value=""></option>
                                      <?php
                                      $religion = array("I" => "Islam", "P" => "Protestan", "K" => "Katolik", "B" => "Budha", "H" => "Hindu");
                                        foreach ($religion as $key => $val) {
                                            echo "<option value='$key'>$val</option>";
                                        }
                                      ?>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Email</label>
                              <div class="col-sm-5"><input type="text" name="emp_id" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Address</label>
                              <div class="col-sm-5"><input type="text" name="emp_id" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Grade</label>
                              <div class="col-sm-5">
                                  <select class="form-control" style="margin-top: 0px !important">
                                      <option value=""></option>
                                      <?php
                                        foreach ($grade->result() as $key => $val) {
                                            echo "<option value='$val->grade_id'>$val->grade_desc</option>";
                                        }
                                      ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <a href="<?php echo base_url('employee/')?>" class="btn btn-warning"/>Back</a>
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
