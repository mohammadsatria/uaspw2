<div class="col-md-12 top-20 padding-0 animated fadeInRight">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
          <h3>List Of Employee</h3>
      </div>
      <div class="panel-body">
        <a href="<?php echo base_url('employee/add')?>" class="btn btn-primary"/><span class="fa fa-plus"></span>  New Employee</a>

        <br />
        <br />
        <div class="responsive-table">
        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                $empdata = array();
                foreach ($employee->result() as $key => $val) {
                    $empdata[$val->emp_id] = $val;
            ?>
            <tr>
              <td width="10"><?php echo $no ?></td>
              <td width="90"><?php echo $val->emp_id ?></td>
              <td><?php echo $val->emp_name?></td>
              <td width="80">
                  <a data-toggle="modal" href="#" onclick="get_employee('<?php echo $val->emp_id?>')" data-target="#modalnya" data-toggle="tooltip" data-placement="top" title="Detail Employee"><span class="fa fa-address-book"></span></a>
                  &nbsp;
                  <a href="<?php echo base_url() ?>/employee/edit/<?php echo $val->emp_id ?>" style="font-size: 15px;" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-pencil"></span></a>
                  &nbsp;
                  <a href="<?php echo base_url() ?>/employee/delete/<?php echo $val->emp_id ?>" onclick="return confirm('Are you sure you want to delete this data?');" style="font-size: 15px;" data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span></a>
              </td>
            </tr>

            <?php
                    $no++;
                }
            ?>
        </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
</div>


    <div id = "modalnya" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Detail Employee</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                    <div class="col-md-3 text-center">
                            <img src="<?php echo base_url()?>assets/template/img/male.png" width="150" height="150" />
                    </div>

                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <table class="detail-emp">
                            <tr>
                                <td>Employee ID</td>
                                <td>:</td>
                                <td id="emp_id">11203498</td>
                            </tr>
                            <tr>
                                <td>Employee Name</td>
                                <td>:</td>
                                <td id="emp_name">Mohammad Satria</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:</td>
                                <td id="gender">Male</td>
                            </tr>
                            <tr>
                                <td>Birthdate</td>
                                <td>:</td>
                                <td id="birthdate">Jakarta, 27 Juni 1992</td>
                            </tr>
                            <tr>
                                <td>Religion</td>
                                <td>:</td>
                                <td id="religion">Islam</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td id="address">Sukabumi</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td id="email">mohammad.satria3498@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Grade</td>
                                <td>:</td>
                                <td id="grade">Board Of Director (BOD)</td>
                            </tr>
                        </table>
                    </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<script>
    function get_employee(emp_id)
    {
        var religion = { "I": "Islam", "H": "Hindu", "P": "Protestan", "K": "Katolik", "B": "Budha" };
        var gender = ["Male", "Female" ];
        $.ajax({
            method: "post",
            url: "<?php echo base_url('employee/getdata')?>",
            dataType: "json",
            data: { 'emp_id' : emp_id },
            success: function(resp){
                $("#emp_id").html(resp.emp_id);
                $("#emp_name").html(resp.emp_name);
                $("#gender").html(gender[resp.emp_gender]);
                $("#religion").html(religion[resp.emp_religion]);
                $("#address").html(resp.emp_address);
                $("#email").html(resp.emp_email);
                $("#grade").html(resp.grade_desc);

                var date = resp.emp_birthdate.split("-");
                resp.emp_birthdate = date[2] + "/" + date[1] + "/" + date[0];
                $("#birthdate").html(resp.emp_birthplace + ", " + resp.emp_birthdate);


            }
        });
    }
</script>
