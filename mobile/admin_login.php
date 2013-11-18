<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>AIDAN PORTFOLIO Mobile</title>
  
  
  <link rel="stylesheet" href="css/themes/themeroller1.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" /> 
  <!-- <link rel="stylesheet" href="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.css"> -->
  
  <!-- Extra Codiqa features -->
  <link rel="stylesheet" href="codiqa.ext.css">
  
  <!-- jQuery and jQuery Mobile -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
  <script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

  <!-- Extra Codiqa features -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/codiqa.ext.js"></script>
   
</head>
<body>
<div data-role="page" id="page1">
    <div data-theme="a" data-role="header">
        <h3 id="title-bar">
            AIDAN PORTFOLIO
        </h3>
        <div id="nav-bar" data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="index.html#page1"  data-theme="" data-icon="home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="index.html#page2"  data-theme="" data-icon="info">
                        About
                    </a>
                </li>
                <li>
                    <a href="index.html#page3"  data-theme="" data-icon="">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="index.html#page4"  data-theme="" data-icon="">
                        Services
                    </a>
                </li>
                <li>
                    <a href="https://github.com/CureMango"  data-theme="" data-icon="">
                        GitHub
                    </a>
                </li>
                <li>
                    <a href="index.html#page5"  data-theme="" data-icon="">
                        Contact
                    </a>
                </li>
				<li>
					<a href="admin_login.php"  data-theme="" data-icon="" class="ui-btn-active ui-state-persist">
                        Business Contacts 
                    </a>
				</li>
            </ul>
        </div>
        <div>
            <a href="" >
            </a>
        </div>
    <div data-role="content">
		<h3>
            Business Contacts
        </h3>
<?php
	require_once('connectvars.php');
	
	// Connect to the database 
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	$query = "SELECT * FROM business_contacts ORDER BY name ASC";
    $data = mysqli_query($dbc, $query);
	
	while ($row = mysqli_fetch_array($data)) { 
		echo '<span name="name">Name: '.$row['name'].'</span><br>';
		echo '<span name="phone">Phone: '.$row['phone'].'</span><br>';
		echo '<span name="address">Address: '.$row['address'].'</span><br><br>';
	}
	
	mysqli_close($dbc);
?>
    </div>
	</div>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h3>
            c COPYRIGHT AIDAN HUTCHINSON-CHEE 2013
        </h3>
    </div>
</div>