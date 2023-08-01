<?php 
$sql = mysqli_query($con,"select * from `quotation` where `Quotation_Id` = '".$_GET['id']."' ");
$result = mysqli_fetch_array($sql);
?>
<div class="content">
 <div class="container">
    <div class="row">
       <?php
       include_once('./header/sidebar.php');
       ?>
       <div class="col-xl-9 col-md-8">
          <h4 class="mb-4">Provide Quotation</h4>
          <div class="col-12">
            <form action="index.php?page=provider-quotation-action" method="post">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="contact-queries">
                    <div class="row">
                        <div class="form-group col-xl-6">

                            <div class="form-group">
                                <label>Service Name <span class="text-danger">*</span></label>
                                <input class="form-control" name="service_name" type="text" placeholder="Enter a service name" value="<?php echo $result['service_name']; ?>" readonly autocomplete="off">
                            </div> 
                        </div>
                        <div class="form-group col-xl-6">
                            <div class="form-group">
                                <label>Service Category<span class="text-danger">*</span></label>
                                <input class="form-control hasDatepicker" type="text" placeholder="Enter Category" name="category" value="<?php echo $result['category']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group col-xl-6">
                            <div class="form-group">
                                <label>Address<span class="text-danger">*</span></label>
                                <input class="form-control hasDatepicker" type="text" name="address" value="<?php echo $result['location']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group col-xl-6">
                            <div class="form-group">
                                <label>State<span class="text-danger">*</span></label>
                                <input class="form-control hasDatepicker" type="text" name="state" value="<?php echo $result['State_Id']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group col-xl-6">
                            <div class="form-group">
                                <label>City<span class="text-danger">*</span></label>
                                <input class="form-control hasDatepicker" type="text" name="city" value="<?php echo $result['City_Id']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group col-xl-6">
                            <div class="form-group">
                                <label>Area<span class="text-danger">*</span></label>
                                <input class="form-control hasDatepicker" type="text" name="area" value="<?php echo $result['Area_Id']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group col-xl-6">
                            <label class="mr-sm-2">Booking Date</label>
                            <input class="form-control" name="booking_date" type="text" value="<?php echo $result['booking_date']; ?>" readonly>
                        </div>
                        <div class="form-group col-xl-6">
                            <label class="mr-sm-2">Booking Time</label>
                            <input class="form-control" name="time_slot" type="text" value="<?php echo $result['time_slot']; ?>" readonly>
                        </div>
                        <div class="form-group col-xl-12">
                            <label class="mr-sm-2">Work Details</label>
                            <textarea class="form-control" name="message" readonly><?php echo $result['work_details']; ?></textarea>
                        </div>
                        <div class="form-group col-xl-12">
                            <label class="mr-sm-2">Send Quotation Price</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter Price For Quotation">
                        </div>
                        <div class="col-xl-12 mt-4">
                            <button class="btn btn-primary btn-lg pl-5 pr-5" name="quotation" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>