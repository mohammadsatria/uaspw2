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
                              <div class="col-sm-5"><input type="text" name="emp_id" maxlength="10" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Employee Name</label>
                              <div class="col-sm-5"><input type="text" maxlength="35" name="emp_name" required class="form-control"></div>
                          </div>
                          <div class="form-group" style="height: 43px;">
                              <label class="col-sm-2 control-label text-right">Birthdate</label>
                                   <div class="col-sm-5 input-group date classdate" style="margin-top: -10px;" data-date-format="yyyy-mm-dd" data-link-format="yyyy-mm-dd">
                                       <input class="form-control" size="10" type="text" name="emp_birthdate" value="" required readonly>
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                   					   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                   </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Birth Place</label>
                              <div class="col-sm-5"><input type="text" maxlength="35" name="emp_birthplace" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Gender</label>
                                 <div class="col-sm-5 form-animate-radio">
                                     <label class="radio">
                                       <input type="radio" value="0" name="emp_gender"/>
                                       <span class="outer">
                                         <span class="inner"></span></span> Male
                                     </label>
                                     <label class="radio">
                                       <input type="radio" value="1" name="emp_gender"/>
                                       <span class="outer">
                                         <span class="inner"></span></span> Female
                                     </label>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Religion</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="emp_religion" required style="margin-top: 0px !important">
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
                              <div class="col-sm-5"><input type="text" maxlength="50" name="emp_email" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Address</label>
                              <div class="col-sm-5"><input type="text" name="emp_address" class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Grade</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="emp_grade" required style="margin-top: 0px !important">
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
