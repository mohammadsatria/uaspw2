<div class="form-element animated fadeInRight">
    <div class="col-md-12">
      <div class="panel form-element-padding">
        <div class="panel-heading">
         <h4>Edit Employee</h4>
        </div>
             <div class="panel-body" style="padding-bottom:30px;">
                  <div class="col-md-12">
                      <form action = "<?php echo base_url('employee/update')?>" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Employee ID</label>
                              <div class="col-sm-5"><input type="text" name="emp_id" maxlength="10" readonly value="<?php echo $employee->emp_id?>" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Employee Name</label>
                              <div class="col-sm-5"><input type="text" maxlength="35" name="emp_name" value="<?php echo $employee->emp_name?>" required class="form-control"></div>
                          </div>
                          <div class="form-group" style="height: 43px;">
                              <label class="col-sm-2 control-label text-right">Birthdate</label>
                                   <div class="col-sm-5 input-group date classdate" style="margin-top: -10px;" data-date-format="yyyy-mm-dd">
                                       <input class="form-control" size="10" value="<?php echo $employee->emp_birthdate?>" type="text" name="emp_birthdate" value="" required readonly>
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                   					   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                   </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Birth Place</label>
                              <div class="col-sm-5"><input type="text" maxlength="35" name="emp_birthplace" value="<?php echo $employee->emp_birthplace?>" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Gender</label>
                              <?php
                                $male = '';
                                $female = '';
                                if($employee->emp_gender == "0"){
                                    $male = 'checked';
                                }else{
                                    $female = 'checked';
                                }
                              ?>
                                 <div class="col-sm-5 form-animate-radio">
                                     <label class="radio">
                                       <input type="radio" value="0" <?php echo $male ?> name="emp_gender"/>
                                       <span class="outer">
                                         <span class="inner"></span></span> Male
                                     </label>
                                     <label class="radio">
                                       <input type="radio" <?php echo $female ?> value="1" name="emp_gender"/>
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
                                            if($key == $employee->emp_religion){
                                                echo "<option selected value='$key'>$val</option>";
                                            }else{
                                                echo "<option value='$key'>$val</option>";
                                            }
                                        }
                                      ?>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Email</label>
                              <div class="col-sm-5"><input type="text" maxlength="50" name="emp_email" value="<?php echo $employee->emp_email ?>" required class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Address</label>
                              <div class="col-sm-5"><input type="text" name="emp_address" value="<?php echo $employee->emp_address ?>" class="form-control"></div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label text-right">Grade</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="emp_grade" required style="margin-top: 0px !important">
                                      <option value=""></option>
                                      <?php
                                        foreach ($grade->result() as $key => $val) {
                                            if($val->grade_id == $employee->emp_grade){
                                                echo "<option selected value='$val->grade_id'>$val->grade_desc</option>";
                                            }else{
                                                echo "<option value='$val->grade_id'>$val->grade_desc</option>";
                                            }
                                        }
                                      ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <a href="<?php echo base_url('employee/')?>" class="btn btn-warning"/>Back</a>
                              &nbsp;
                              &nbsp;
                              <input type="submit" class="btn btn-info" value="Update"/>
                          </div>
                      </form>
                  </div>
            </div>
        </div>
    </div>
</div>
