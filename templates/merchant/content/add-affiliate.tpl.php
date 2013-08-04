<div class="header">
            
            <h1 class="page-title">Add New Affiliate Program</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li><a href="users.html">Users</a> <span class="divider">/</span></li>
            <li class="active">User</li>
        </ul>

        <div class="container-fluid">
 <div class="row-fluid">
                    
<div class="btn-toolbar">
    <button class="btn btn-primary"><i class="icon-save"></i> Save All</button>
    
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#step1" data-toggle="tab">Step 1</a></li>
      <li><a href="#step2" data-toggle="tab">Step 2</a></li>
      <li><a href="#step3" data-toggle="tab">Step 3</a></li>
    </ul>
   <form action="add-affiliate.php" method="POST" enctype="multipart/form-data">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="step1">
 
        <h3>Default Sale Commission</h3>
        <p>This number should be expressed as it is spoken. Such as, if you would like to pay 10% of each sale, please enter in the amount as the number 10. (Not .10). If you want to pay a flat amount per sale, please enter in the dollar amount here. NO DOLLAR SIGNS PLEASE.</p>
        <label>Per Sale Commission Rate</label>
        <input type="text" name="commision" value="" class="input-xlarge"> %
        <h3>Affiliate Information URL</h3>
        <p>This is the URL of the page on your site that describes your affiliate program. If you do not have a page on your site, you can leave this field blank.</p>
        <label>Site URL</label>
        <input type="text" name="service_url" value="" class="input-xlarge">
        <h3>Your Program Description</h3>
        <p>Describe your affiliate program here. You should include things like a general description of your product, the commissions offered, the average sale amount, etc. Remember, you are trying to get affiliates to join your program over the other quality programs on the ShareASale.com Network, so you should take some time to write this up - and make sure to include the details that are relevant to the affiliate (i.e., commission amounts, etc...) You may place HTML in this box.</p>
        <label>Product Description</label>
        <textarea value="Smith" rows="4" name="product_description" class="input-xlarge">        </textarea>
  
      </div>
      <div class="tab-pane fade" id="step2">
          <h3>Tracking Gap (Advanced) Default is 60 Days</h3>
          <p>This is defined as the amount of time allowed from the original click-through, to the time of the sale. For example, if a buyer clicks on an affiliate banner, but chooses not to buy at that moment, if he returns to your site within the "Tracking Gap" and makes a purchase, the affiliate is still rewarded for that transaction. The minimum is 30 days.</p>
          <label>Total Validity Days</label>
          <select name="validity_ends">
              <option value="15">15 Days</option>
              <option value="15">30 Days</option>
              <option value="15">45 Days</option>
              <option value="15">60 Days</option>
              <option value="15">75 Days</option>
              <option value="15">90 Days</option>
          </select>
          <h3>Auto-Approve Country Affiliates</h3>
          <p>If you have chosen "Auto-By-Country" please choose the following countries to auto-approve from. All other countries will be set to "Manual Approve" and you will need to approve those affiliates using the affiliate management center.</p>
          <label>Country Allowed</label>
          <select name="country_allowed">
              <option>USA</option>
              <option>Australia</option>
              <option>UK</option>
              <option>India</option>
              <option>Bangladesh</option>
          </select>
          <h3>Promotional Method</h3>
          <p>This for choice what type of promotional method you like</p>
          <label>Promotion Method</label>
          <select name="promotional_methods">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
          </select>
      </div>
        <div class="tab-pane fade" id="step3">
            <h3>Manage Banner</h3>
            <p>Merchant can manage banner for his add</p>
            <label>Status</label>
            <select name="is_active">
                <option value="1">active</option>
                <option value="0">inactive</option>
            </select>
            <label>Banner Name</label>
            <input type='text' name="banner_name"/>
            <label>Banner Width</label>
            <input type='digit' name="banner_width"/>
            <label>Banner Height</label>
            <input type="digit" name="banner_height"/>
            <label>Upload Banner Image</label>
            <input type="file" name="photo"/>
            <div style="clear: both;height: 5px;"></div>
                <div class="span">
                <button class='btn-success btn-large' type="submit">Save</button>
                </div>
        </div>
   
  </div>
        </form>
           

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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