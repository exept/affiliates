<div class="row-fluid"><div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">Latest Statistics</a>
        <div id="page-stats" class="block-body collapse in">

            <div class="stat-widget-container">
                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">30</p>
                        <p class="detail">Affiliate Clicks</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">9</p>
                        <p class="detail">Average Clicks / Day</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">$1,500</p>
                        <p class="detail">Commissions</p>
                    </div>
                </div>

                <div class="stat-widget">
                    <div class="stat-button">
                        <p class="title">35</p>
                        <p class="detail">Affiliate Referrals</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    
    <div class="block span12">
        <div class="block-heading">
            <span class="block-icon pull-right">
                <a href="#" class="demo-cancel-click" rel="tooltip" title="Click to refresh"><i class="icon-refresh"></i></a>
            </span>

            <a href="#widget2container" data-toggle="collapse">Latest Affiliate Programs</a>
        </div>
        <div id="widget2container" class="block-body collapse in">
            <table class="table">
                <thead>
                    <tr>
                        <th>Program Name</th>
                        <th>Commission Rate</th>
                        <th>Statics</th>
                    </tr>
                </thead>
              <tbody>
                  <?php 
                  foreach ($products as $product)
                  {
                      ?>
                         <tr>
                            <td>
                                <p><i class="icon-user"></i><?php echo $product['banner_name'];?></p>
                            </td>
                            <td>
                                <p><?php echo $product['commision'];?>%</p>
                            </td>
                            <td>
                                <a href="affiliate-programs.php?id=<?php echo $product['product_id'];?>">View Details</a>
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