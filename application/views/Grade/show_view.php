<div class="col-md-12 top-20 padding-0 animated fadeInRight">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
          <h3>List Of Grade</h3>
      </div>
      <div class="panel-body">
        <a href="<?php echo base_url('grade/add')?>" class="btn btn-primary"/><span class="fa fa-plus"></span>  New Grade</a>

        <br />
        <br />
        <div class="responsive-table">
        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Grade</th>
            <th>Grade Order</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($grade->result() as $key => $val) {
            ?>
            <tr>
              <td width="10"><?php echo $no ?></td>
              <td><?php echo $val->grade_desc ?></td>
              <td width="100" class="text-center"><?php echo $val->grade_order?></td>
              <td width="20">
                  <a href="<?php echo base_url() ?>/grade/edit/<?php echo $val->grade_id ?>" style="font-size: 15px;" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-pencil"></span></a>
                  &nbsp;
                  <a href="<?php echo base_url() ?>/grade/delete/<?php echo $val->grade_id ?>" onclick="return confirm('Are you sure you want to delete this data?');" style="font-size: 15px;" data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span></a>
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
