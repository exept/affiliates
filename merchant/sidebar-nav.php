<?php include_once '../include/config.php';?>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="../stylesheets/theme.css">
    <link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>
<div class="sidebar-nav">
        <form class="search form-inline">
            <input type="text" placeholder="Search...">
        </form>

        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="<?php echo BASEURL?>merchant">Home</a></li>
            <li class="active"><a href="users.html">Sample List</a></li>
            <li ><a href="user.html">Sample Item</a></li>
            <li ><a href="media.html">Media</a></li>
            <li ><a href="calendar.html">Calendar</a></li>
            
        </ul>
        
        <a href="#members-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>Members<span class="label label-info">+3</span></a>
        <ul id="members-menu" class="nav nav-list collapse">
            <li ><a href="merchants_view_more.html">Member Admins</a></li>
            <li ><a href="affiliate_view_more.html">Manage Affiliate Members</a></li>
        </ul>

        <a href="#program-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>Affiliate program</a>
        <ul id="program-menu" class="nav nav-list collapse">
            <li ><a href="add-affiliate.php">Add Affiliate</a></li>
            <li ><a href="privacy-policy.html">View Affiliate</a></li>
        </ul>

        <a href="#configure-menu" class="nav-header collapse" data-toggle="collapse"><i class="icon-question-sign"></i>Configuration</a>
        <ul id="configure-menu" class="nav nav-list collapse">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Setup Referral Tracking</a></li>
            <li><a href="#">Test Tracking Setup</a></li>
            <li><a href="#">Affiliate CP</a></li>
        </ul>
        <a href="faq.html" class="nav-header" ><i class="icon-comment"></i>Faq</a>
    </div>