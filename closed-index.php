<?php
require_once($_SERVER["DOCUMENT_ROOT"] . '/../Support/configEnglishContestNational.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>LSA-<?php echo "$contestTitle";?> Writing Contests</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="LSA-English Writing Contests">
  <meta name="keywords" content="LSA-English, Hopwood, Writing, UniversityofMichigan">
  <meta name="author" content="LSA-MIS_rsmoke">
  <link rel="icon" href="img/favicon.ico">
  <style>
    html {
    background: url(img/evaluateImage.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='img/evaluateImage.jpg', sizingMethod='scale');
    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='img/evaluateImage.jpg', sizingMethod='scale')";
  }
  .text-center {
      color: black;
      font-weight: bold;
      text-align: center;
  }
  #headerBlock {
      position: fixed;
      width: 100%;
      background-color: white;
  }

   footer {
    font-size: .8rem;
      position: fixed;
      bottom: 10px;
      width: 100%;
      background-color: white;
  }
  </style>
</head>

<body>

  <div id="headerBlock">
    <h1 class="text-center">The Final Judging section of the Hopwood writing contests is currently not available.<br>Please
    check back.</h1>
  </div>
<footer>
  <div class="text-center" >
    <address>
      <a href="mailto:<?php echo strtolower($addressEmail);?>" alt="<?php echo strtolower($addressEmail);?>">Department of <?php echo $deptLngName;?></a>
      <br><?php echo $addressBldg;?>, <?php echo $address2;?>
      <br><?php echo $addressStreet;?>
      <br>Ann Arbor, MI
      <br><?php echo $addressZip;?>
      <br><?php echo $addressPhone;?>
    </address>
      <img class="img" src="img/michigan.png" alt="LSA at the University of Michigan">
  </div>

  <div class="text-center">
    <a href="http://www.regents.umich.edu">© 2014 Regents of the University of Michigan</a>
  </div>
</footer>
</body>
