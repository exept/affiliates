<div class="row-fluid">
<!--<div class="btn-toolbar">
    <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
    <a href="#myModal" data-toggle="modal" class="btn">Delete</a>
  <div class="btn-group">
  </div>
</div>-->
<div class="well">
   
    <div id="myTabContent" class="tab-content">
        <table class="table table-bordered">
            <thead class="span3">
            <tr>
                <th>Affiliate Program Details</th>
                
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Commission Rate</td>
                <td><?php echo $productInfo['commision'];?>%</td>
            </tr>
            <tr>
                <td>Affiliate Information URL</td>
                <td><?php echo $productInfo['service_url'];?></td>
            </tr>
            <tr>
                <td>Product Description</td>
                <td><?php echo $productInfo['product_description'];?></td>
            </tr>
            <tr>
                <td>Total Validity Days</td>
                <td><?php echo $productInfo['validity_ends'];?></td>
            </tr>
            <tr>
                <td>Country Allowed</td>
                <td><?php echo $productInfo['country_allowed'];?></td>
            </tr>
            <tr>
                <td>Promotion Method</td>
                <td><?php echo $productInfo['promotional_methods'];?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>Active</td>
            </tr>
            <tr>
                <td>Banner Name</td>
                <td><?php echo $productInfo['banner_name'];?></td>
            </tr>
            </tbody>
        </table>
        <p><span>I Want This  </span><span class="btn btn-success"><a href="aff-promote.php?id=<?php echo $productInfo['product_id'];?>">Promote</a></span></p>
        <p><span><a href="<?php echo BASEURL?>affiliate" class="btn btn-mini">Back</a> To Affiliate List</span></p>
        <a href="#myModal1" data-toggle="modal">Promote This for affiliate</a></span></p>

        
  </div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
    <h3 id="myModalLabel">Delete Confirmation</h3>
  </div>
  <div class="modal-body">
    
    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
  </div>
</div>
<style>
    .gap
    {
        clear: both;
        height: 5px;
    }
</style>
<div class='gap'></div>

<div class="modal small hide fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
    <form action='affiliate-programs.php' method='POST'>
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Promote Confirmation</h3>
        </div>
        <div class="modal-body">

        <p class="error-text">Merchant Name: <span><?php echo $data['merchnt_name'];?></span> </p>
        <input type='hidden' name='marchant_id' value='<?php echo $data['merchantId'];?>'>
        <input type='hidden' name='aff_url' value='<?php echo $data['aff_url'];?>'>
        <input type='hidden' name='service_url' value='<?php echo $data['service_url'];?>'>
        <div class='gap'></div>
        <p class="error-text">Product Description: <span><?php echo $data['product_description'];?></span> </p><div class='gap'></div>
        <p class="error-text">Product Commission: <span><?php echo $data['product_comission'];?>%</span> </p><div class='gap'></div>
        <p class="error-text">Merchant's Website: <span><?php echo $data['service_url'];?></span> </p><div class='gap'></div>
        <h3><p class="error-text">Your affliate address: <span><?php echo $data['aff_url'];?></span> </p></h3><div class='gap'></div>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class='btn-success btn-large' type="submit">Save</button>
        </div>
    </form>
    
</div>
 
