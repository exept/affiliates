

<div id="widget2container" class="block-body collapse in">
            <table class="table">
                <thead>
                    <tr>
                        <th>Program Name</th>
                        <th>Commission Rate</th>
                        <th>Statistics</th>
                    </tr>
                </thead>
              <tbody>
                  <?php 
                  $i =1;
            foreach ($result as $key=>$promotions)
            {
                ?>
                <tr>
                      <td>
                          <p><i class="icon-user"></i>affiliate<?php echo $i;?></p>
                      </td>
                      <td>
                          <p>Total sales: $1,247</p>
                      </td>
                      <td>
                          <a href='<?php echo $promotions['aff_url'];?>'><?php echo $promotions['aff_url'];?></a><br>
                      </td>
                  </tr>
          <?php
           $i++; }
                ?>
                  
                 
                  
              </tbody>
            </table>
            <p><a href="merchants_view_more.html">More...</a></p>
        </div>

