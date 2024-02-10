<?php include("header.php");?>
<?php include("include/config.php");?>
 <div class="right_col" role="main"><br><br><br><br><br>
    <div class="panel panel-primary" style="max-width: 700px;margin:auto">
      <div class="panel-heading"><b>Add Gallery Images</b></div>
      <div class="panel-body">
            <div id="div"></div>
        <form  method="POST" enctype="multipart/form-data" action="submit_img.php">
          <div class="form-group">
            <label for="">Add images</label>
            <input type="file" class="form-control" name="gallery_img" id="adimges">

          </div>
          <button id="adimg" class="btn btn-success btn-sm">SUBMIT</button>
        </form>
            <div class="col col-md-12" >

      </div>
    </div>
   </div>

<div class="panel" style="margin-top:30px;">
   <div class="panel-body">
      <div id="local"></div>
        <table class="table " id="example">
          <thead style="background-color: #172d44;color:white;">
            <tr>
              <th>Sr.no</th>
              <th>Img Preview</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $getallimg = 'SELECT * FROM gallery';
              $img = mysqli_query($con,$getallimg);
                if ($img) 
                  {
                    $count=1;
                      while ($getimg = mysqli_fetch_array($img)) 
                        {?>
                          <tr>
                            <td><?php echo $count; ?></td>
                            <td><img src="images/gallery_img/<?php echo $getimg['img_name']?>" alt="Not available" height="100" width="150" ></td>
                            <td><?php echo $getimg['img_created']?></td>
                            <td><a href="delete_img.php?mode=delete&id=<?php echo $getimg['id'];?>"><i class="fa fa-trash"></i> Delete</a> </td>
                          </tr>
                          <?php $count++;
                        } 
                  }
                else
                  {?>
                    <tr><td colspan="4">No Image Available...!!!</td></tr>
                    <?php 
                  }?>       
          </tbody>
        </table>
    </div>
  </div>
</div>
<?php include("footer.php");?>
<!--   <script>
    $('#adimges').on('change',function(){
        if(this.files[0].size > 200000){
        alert('Please select images less than 200kb!');
     $("#adimges").on(event, ".selFile", removeFile);}
     preview_image(event);
    })

    function preview_image(event) 
    {
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById('pre');
      output.src = reader.result;
     }
     reader.readAsDataURL(event.target.files[0]);
    }
</script> -->