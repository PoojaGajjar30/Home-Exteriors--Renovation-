<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">View Profile</h4>
                    </div>
                </div>
                <div class="container">
      <div class="row">
     
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
              <?php if(isset($_SESSION['deletesucssmsg'])) {  ?>
 <div class="alert alert-danger" role="alert">
  <?php 
  echo $_SESSION['deletesucssmsg']; 
  unset($_SESSION['deletesucssmsg']);
  ?>
</div>
    <?php } ?>
              <div class="row">
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <?php
                        $sql = "SELECT * FROM `admin_profile_tbl`";
                        $result = mysqli_query($con,$sql);
                        while ($row = mysqli_fetch_assoc($result))
                        {
                          $admin_Id  = $row['admin_Id'];
                          $firstname = $row['firstname'];
                          $lastname = $row['lastname'];
                          $address = $row['Address'];
                          $city = $row['City'];
                          $state = $row['State'];
                          $emailid = $row['Email'];
                          $password = $row['password'];
                          $mobilenum = $row['mobilenum'];
                          $dob = $row['Dob'];
                          $gender = $row['Gender'];
                          $isactive = $row['Isactive'];                        
                        ?>
                         <?php } ?>                  
                      <tr>
                        <td>#</td>
                        <td><?php echo $admin_Id?></td>
                      </tr>
                      <tr>
                        <td>First Name:</td>
                        <td><?php echo $firstname?></td>
                      </tr>
                      <tr>
                        <td>Last Name:</td>
                        <td><?php echo $lastname?></td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td><?php echo $address?></td>
                      </tr>
                      <tr>
                        <td>City:</td>
                        <td><?php echo $city?></td>
                      </tr>
                      <tr>
                        <td>State:</td>
                        <td><?php echo $state?></td>
                      </tr>
                      <tr>
                        <td>Email Id:</td>
                        <td><?php echo $emailid?></td>
                      </tr>
                      <tr>
                        <td>Password:</td>
                        <td><?php echo $password?></td>
                      </tr>
                      <tr>
                        <td>Mobile No.:</td>
                        <td><?php echo $mobilenum?></td>
                      </tr>
                      <tr>
                        <td>Date Of Birth:</td>
                        <td><?php echo $dob?></td>
                      </tr>
                      <tr>
                        <td>Gender:</td>
                        <td><?php  
                        if ($gender==0){
                            echo "Female";
                           }
                        else {
                            echo "Male";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td>Is-Active:</td>
                        <td><?php if($isactive==1) 
                                                    { 
                                                        echo "Active"; 
                                                    } 
                                                    else {
                                                        echo "Inactive"; 
                                                    } ?>                            
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-sign-in"></i> Submit</a>
                        <span class="pull-right">
                            <a href="" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                            <a href="index.php?page=addprofile&did=<?php echo $admin_Id; ?>" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i> </a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
            </div>
         
        </div>
    </div>
  <style type="text/css">
      .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}


  </style>



  <script type="text/javascript">
      $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
  </script>