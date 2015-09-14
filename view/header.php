<?php if (!defined("IN_WALLET")) { die("u can't touch this."); } ?>
<!DOCTYPE HTML>

<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- Bootstrap include stuff -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/wallet.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.6.0/moment.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- End Bootstrap include stuff-->
        <title><?=$fullname?> Wallet</title>
        <link rel="shortcut icon" href="favicon.ico">
<script LANGUAGE="JavaScript">
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=640,height=480');");
}
</script>
    </head>
<style>
@import url(http://fonts.googleapis.com/css?family=Ubuntu:200,400,600);
.sexytabs > ul {
  text-align: center;
  font-weight: 20;
  margin: 50px 0 0;
  padding: 0;
  position: relative;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  z-index: 1;
}
.sexytabs > ul > li {
  display: inline-block;
  background: #fafafa;
  padding: 0.6em 0;
  position: relative;
  width: 25%;
  margin: 0 0 0 -4px;
}
.sexytabs > ul > li:before, .sexytabs > ul > li:after {
  opacity: 0;
  transition: 0.5s ease;
}
.sexytabs > ul > li.ui-tabs-active:before, .sexytabs > ul > li.ui-tabs-active:after, .sexytabs > ul > li.ui-state-hover:before, .sexytabs > ul > li.ui-state-hover:after, .sexytabs > ul > li.ui-state-focus:before, .sexytabs > ul > li.ui-state-focus:after {
  opacity: 1;
}
.sexytabs > ul > li:before, .sexytabs > ul > li.ui-state-active.ui-state-hover:before, .sexytabs > ul > li.ui-state-active.ui-state-focus:before {
  content: "";
  position: absolute;
  z-index: -1;
  box-shadow: 0 2px 3px rgba(22, 195, 255, 0.5);
  top: 50%;
  bottom: 0px;
  left: 5px;
  right: 5px;
  border-radius: 100px / 10px;
}
.sexytabs > ul > li:after, .sexytabs > ul > li.ui-state-active.ui-state-hover:after, .sexytabs > ul > li.ui-state-active.ui-state-focus:after {
  content: "";
  background: #fafafa;
  position: absolute;
  width: 12px;
  height: 12px;
  left: 50%;
  bottom: -6px;
  margin-left: -6px;
  transform: rotate(45deg);
  box-shadow: inset 3px 3px 3px rgba(22, 195, 255, 0.5), inset 1px 1px 1px rgba(0, 0, 0, 0.3);
}
.sexytabs > ul > li.ui-state-hover:before, .sexytabs > ul > li.ui-state-focus:before {
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
}
.sexytabs > ul > li.ui-state-hover:after, .sexytabs > ul > li.ui-state-focus:after {
  box-shadow: inset 3px 3px 3px rgba(0, 0, 0, 0.2), inset 1px 1px 1px rgba(0, 0, 0, 0.3);
}
.sexytabs > ul > li.ui-state-focus a {
  text-decoration: underline;
}
.sexytabs > ul > li:focus {
  outline: none;
}
.sexytabs > ul > li a {
  color: #444;
  text-decoration: none;
}
.sexytabs > ul > li a:focus {
  outline: none;
}
.sexytabs > ul > li a span {
  position: relative;
  top: -0.5em;
}

.sexytabs.dark > ul {
  border-bottom-color: rgba(255, 255, 255, 0.3);
}
.sexytabs.dark > ul > li {
  background: #333;
}
.sexytabs.dark > ul > li:before, .sexytabs.dark > ul > li.ui-state-active.ui-state-hover:before, .sexytabs.dark > ul > li.ui-state-active.ui-state-focus:before {
  box-shadow: 0 2px 3px rgba(255, 255, 255, 0.3);
}
.sexytabs.dark > ul > li:after, .sexytabs.dark > ul > li.ui-state-active.ui-state-hover:after, .sexytabs.dark > ul > li.ui-state-active.ui-state-focus:after {
  background: #333;
  box-shadow: inset 3px 3px 3px rgba(255, 255, 255, 0.3), inset 1px 1px 1px rgba(255, 255, 255, 0.5);
}
.sexytabs.dark > ul > li.ui-state-hover:before, .sexytabs.dark > ul > li.ui-state-focus:before {
  box-shadow: none;
}
.sexytabs.dark > ul > li.ui-state-hover:after, .sexytabs.dark > ul > li.ui-state-focus:after {
  box-shadow: inset 1px 1px 0px rgba(255, 255, 255, 0.4);
}
.sexytabs.dark > ul > li a {
  color: white;
}

img {
  width: 75px;
  float: left;
  margin: 0 1em 1em 0;
  border-radius: 3px;
}
img.logo {
   width: 200px;
  float: left;
  margin: 0 1em 1em 0;
  border-radius: 3px;

}

.sexytabs {
  width: 100%;
  min-width: 200px;
  margin: auto;
}

.contents {
  padding: 20px 20px;
  min-height: 360px;
}

.darkpage {
  background: #333;
  color: white;
}

.darkpage,
.lightpage {
  padding: 50px 0;
}

@media screen and (min-width: 1000px) {
  .darkpage,
  .lightpage {
    width: 95%;
    float: left;
    padding: 0;
  }
}

</style>    
    
    <body>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
  <script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 11,
            time: 1000
        });
    });
  </script>


<!--        <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><?=$fullname?> Wallet</a>
            </div>
          </div>
<!-- </.container-fluid-->
     <!--/nav-->

        <div class="jumbotron" style="background-color:#fff">
            <div class="container">


<!-- Use the following button code for the new window -->

