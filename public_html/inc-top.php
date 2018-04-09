<?php
// Set page title
$site = 'NDC New Employee Orientation &amp; Onboarding';

// Set conference page descriptions
if(!isset($description)) 
    {
        $description = $year . $title; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="Description" content="<? echo $description ?>" />
<title><? echo $pagetitle . $site ?></title>

<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <nav class="ndc lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo"><img src="images/logo.png" style="height:58px; width:auto;"></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Welcome</a></li>
                <li><a href="before-you-start.php">Before You Start</a></li>
                <li><a href="your-first-days.php">Your First Days</a></li>
                <li><a href="your-first-months.php">Your First Months</a></li>
                <li><a href="#">Your First Year</a></li>
                <li><a href="#">Your NDC</a></li>
                <li><a href="#">Your Benefits</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            
            <ul id="nav-mobile" class="side-nav">
                <li><a href="index.php">Welcome</a></li>
                <li><a href="before-you-start.php">Before You Start</a></li>
                <li><a href="your-first-days.php">Your First Days</a></li>
                <li><a href="your-first-months.php">Your First Months</a></li>
                <li><a href="#">Your First Year</a></li>
                <li><a href="#">Your NDC</a></li>
                <li><a href="#">Your Benefits</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>