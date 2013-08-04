<h1 style="text-align:right">Login Area</h1>
<div class="row">
<div class="span12">
	<ul id="myTab" class="nav nav-tabs">
	  <li class="active"><a href="#s1" data-toggle="tab">Member Login</a></li>
	  <li class=""><a href="#s2" data-toggle="tab">I'm New Merchants</a></li>
	  <li class=""><a href="#s3" data-toggle="tab">I'm New Affiliate</a></li>
	</ul>
	</div>
<div class="span12">
	<div id="myTabContent" class="tab-content">
	  <div class="tab-pane active in" id="s1">
        <div class="row">
		<div class="span6">
		<h3>Enter Your Login Information</h3>
		<form method="POST" class="form-horizontal" action="login.php">
                    <fieldset>
                      <div class="control-group">
                          <label>User or Email id: </label>
                          <input type="text" placeholder="email" name="email" class="input-xlarge"/>
                      </div>
                      <div class="control-group">
                          <label>Password: </label>
                          <input type="password" placeholder="password" name="password" class="input-xlarge"/>
                      </div>
                        <div class="control-group">
                            <h3>Please chose an option of bellow</h3>
                            <select name="who_are" class="selectpicker" class="required">
                            <option value="1">
                                Affiliate
                            </option>
                            <option value="2">
                                Marchant
                            </option>
                            <option value="3">
                                Admin
                            </option>
                        </select>
                        </div>
                        
                      <button class="btn btn-active btn-success" type="submit">Log In</button>
                    </fieldset>
                  </form>

		</div>
		<div class="span6">
          <h3>Our Best service</h3>
		  <div class="row">
            <div class="span2">
                <img alt="loginpage"  src="themes/css/images/loginpage.jpg"/>
            </div>
            <div class="span4">
               <h5>Food truck fixie locavore, accusamus mcsweeney's marfa</h5>
			   <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table </p>
            </div>
          </div>
         


</div>
</div>
</div>

<div class="tab-pane fade" id="s2">
<div class="row">
<div class="span12">
    <form action="sign-up-affiliate.php" method="POST">
       <div class="row">
      <div class="span2">
          First Name:
      </div>
      <div class="span4">
          <input type='text' name="marchant_fname" placeholder="First name"/>
      </div>
    </div>
    <div class="row">
        <div class="span2">
            Last name:
        </div>
        <div class="span4">
            <input type='text' name="marchant_lname" placeholder="Last name"/>
        </div>
    </div>
    <div class="row">
        <div class="span2">
            Email Address:
        </div>
        <div class="span4">
            <input type='text' name="marchant_email" placeholder="Email"/>
        </div>
    </div>
    <div class="row">
        <div class="span2">
            Confirm Email:
        </div>
        <div class="span4">
            <input type='text' name="marchant_email" placeholder="Confirm email"/>
        </div>
    </div>
    <div class="row">
        <div class="span2">
            Password:
        </div>
        <div class="span4">
            <input type='password' name="marchant_password" placeholder="password"/>
        </div>
    </div>
    <div class="row">
        <div class="span2">
            Confirm Password
        </div>
        <div class="span4">
            <input type='text' name='marchant_password' placeholder="Confirm passsword"/>
        </div>
    </div>
    <div class="row">
        <div class="span2">
            User Name:
        </div>
        <div class="span4">
            <input type='text' name="marchant_username" placeholder="User name"/>
        </div>
    </div>

    <h3>Account Details</h3>
    <div class="row">
      <div class="span2">
          Company:
      </div>
      <div class="span4">
          <input type='text' name="company" placeholder="company name"/>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          Your Website:
      </div>
      <div class="span4">
          <input type='text' name="website" value="http://"/>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          Address:
      </div>
      <div class="span4">
          <input type='text' name="address" placeholder="address"/>
      </div>
    </div>
   
    <div class="row">
      <div class="span2">
          Country:
      </div>
      <div class="span4">
          <select class="dropdown" name="country">
              <option>fs</option>
              <option>fs</option>
              <option>fs</option>
          </select>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          City:
      </div>
      <div class="span4">
          <select class="dropdown" name="city">
              <option>fs</option>
              <option>fs</option>
              <option>fs</option>
          </select>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          State/Province:
      </div>
      <div class="span4">
          <input type='text' name="state" placeholder="State or Province"/>
      </div>
    </div>
    <div class="row">
      <div class="span2" name="marchant_name">
          ZIP:
      </div>
      <div class="span4">
          <input type='number' name="zip" placeholder="zip"/>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          Phone:
      </div>
      <div class="span4">
          <input type='number' name="marchant_contact" placeholder="phone number"/>
      </div>
    </div>
    <div class="row">
      <div class="span2">
         
      </div>
      <div class="span4">
          <button class='btn-success btn-large'>Sign Up</button>
      </div>
    </div>
     
    </form>
    <h3>Merchants Details</h3>
    <div class='row'>
        <br>
    </div>
</div>
</div>
		 </div>
            
            <!---Tab-3: Affilliate SignUp start form here-->
		 
	  <div class="tab-pane fade" id="s3">
              <div class="row">
<div class="span12">
    <form action="signup-affialiate.php" method="POST">
    
    <h3>Affiliate Details</h3>
    <div class="row">
      <div class="span2">
          First Name:
      </div>
      <div class="span4">
          <input type='text' name="aff_name" placeholder="First name"/>
      </div>
    </div>
    <div class="row">
        <div class="span2">
            Last name:
        </div>
        <div class="span4">
            <input type='text'name="aff_lname" placeholder="Last name"/>
        </div>
    </div>
    <div class="row">
        <div class="span2"> 
            Email Address:
        </div>
        <div class="span4">
            <input type='text' name="aff_email" placeholder="Email"/>
        </div>
    </div>
    <div class="row">
        <div class="span2">
            Confirm Email:
        </div>
        <div class="span4">
            <input type='text'name="aff_email" placeholder="Confirm email"/>
        </div>
    </div>
    <div class="row">
        <div class="span2">
            Password:
        </div>
        <div class="span4">
            <input type='password' name='aff_password' placeholder="password"/>
        </div>
    </div>
    <div class="row">
        <div class="span2">
            Confirm Password
        </div>
        <div class="span4">
            <input type='text' name='aff_password' placeholder="Confirm passsword"/>
        </div>
    </div>
    <div class="row">
        <div class="span2">
            User Name:
        </div>
        <div class="span4">
            <input type='text' name="aff_username" placeholder="User name"/>
        </div>
    </div>

    <h3>Account Details</h3>
    <div class="row">
      <div class="span2">
         Payable To:
      </div>
      <div class="span4">
          <input type='text'name="payment" placeholder="payment way"/>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          Your Website:
      </div>
      <div class="span4">
          <input type='text'name="website" value="http://"/>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          Address:
      </div>
      <div class="span4">
          <input type='text'name="address" placeholder="address"/>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          Country:
      </div>
      <div class="span4">
          <select class="dropdown" name="country">
              <option>fs</option>
              <option>fs</option>
              <option>fs</option>
          </select>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          City:
      </div>
      <div class="span4">
          <select class="dropdown" name="city">
              <option>fs</option>
              <option>fs</option>
              <option>fs</option>
          </select>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          State/Province:
      </div>
      <div class="span4">
          <input type='text'name="state" placeholder="State or Province"/>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          ZIP:
      </div>
      <div class="span4">
          <input type='number' name="zip" placeholder="zip"/>
      </div>
    </div>
    <div class="row">
      <div class="span2">
          Phone:
      </div>
      <div class="span4">
          <input type='number'name="aff_contact" placeholder="phone number"/>
      </div>
    </div>
    <div class="row">
      <div class="span2">
         
      </div>
      <div class="span4">
          <button class='btn-success btn-large'>Sign Up</button>
      </div>
    </div>
    <div class='row'>
        <br>
    </div>
    </form>
</div>
</div>
	  </div>
	</div>
	</div>

</div>