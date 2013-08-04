 <div class="row-fluid">
<div class="row-fluid">

    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Welcome Back:</strong> Merchants Admin!
    </div>

    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">Latest Statistics</a>
        <div id="page-stats" class="block-body collapse in">

            <div class="stat-widget-container">
                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">2,500</p>
                        <p class="detail">Affiliates</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">3,299</p>
                        <p class="detail">Sales</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">$1,500</p>
                        <p class="detail">Total Commissions</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">$12,675</p>
                        <p class="detail">Unpaid Commissions</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="block span6">
        <a href="#tablewidget" class="block-heading" data-toggle="collapse">Affiliate Programmer<span class="label label-warning">+<?php echo count($merchantInfo);?></span></a>
        <div id="tablewidget" class="block-body collapse in">
            <table class="table">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  foreach ($affliateInfo as $affliateList)
                  {
                      ?>
                        <tr>
                            <td><?php echo $affliateList['aff_name']?></td>
                            <td><?php echo $affliateList['aff_lname']?></td>
                            <td><?php echo $affliateList['aff_username']?></td>
                        </tr>  
                       <?php
                  }
                  ?>
                
                
              </tbody>
            </table>
            <p><a href="affiliate_view_more.html">More...</a></p>
        </div>
    </div>
    <div class="block span6">
        <div class="block-heading">
            <span class="block-icon pull-right">
                <a href="#" class="demo-cancel-click" rel="tooltip" title="Click to refresh"><i class="icon-refresh"></i></a>
            </span>

            <a href="#widget2container" data-toggle="collapse">Merchants history</a>
        </div>
        <div id="widget2container" class="block-body collapse in">
            <table class="table">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Sales</th>
                        <th>Statics</th>
                    </tr>
                </thead>
              <tbody>
                  <?php 
                    foreach ($merchantInfo as $merchantList)
                    {
                        ?>
                          <tr>
                                <td>
                                    <p><i class="icon-user"></i><?php echo $merchantList['marchant_username'];?></p>
                                </td>
                                <td>
                                    <p>Total sales: $1,247</p>
                                </td>
                                <td>
                                    <a href="#">View Details</a>
                                </td>
                            </tr>  
                         <?php
                    }
                  ?>
              </tbody>
            </table>
            <p><a href="merchants_view_more.html">More...</a></p>
        </div>
    </div>
</div>