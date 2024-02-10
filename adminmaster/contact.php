<?php include("header.php");?>
<?php include("include/config.php");?>
<div class="right_col" role="main">
          <div class="x_title">
              <h2>View Contact</h2>
              <div class="clearfix"></div>
          </div>
         <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              <th>Sr.No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile No</th>
              <th>Message</th>
              <th>Contacted Date</th>
            </tr>
        </thead>
        <tbody>
          <?php $get_postsList = 'SELECT * FROM contact';
                        $posts = array();
                     $get_data = $con->query($get_postsList);

                     if ($get_data->num_rows > 0) {
                      $count=1;
                      while($row_prod = $get_data->fetch_assoc()){ ?>
            <tr>
               <td ><?php echo $count;?></td>

                        <td style="width:20%"><?php echo $row_prod['full_name'];?></td>
                        <td ><?php echo $row_prod['email'];?></td>
                        <td ><?php echo $row_prod['mob_no'];?></td>
                        <td><?php echo $row_prod['message']?></td>
                        <td><?php echo $row_prod['enquiry_date']?></td>

            </tr>
            <?php  $count++;  }
                      }
                      else{

                        echo "<tr><td colspan=7>No Contact Available...!!</td></tr>";
                      }
                    
                   ?>
        </tbody>
    </table>

        </div>
        <?php include("footer.php");?>