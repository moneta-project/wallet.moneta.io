<?php
session_start();

define("WITHDRAWALS_ENABLED", true); //Disable withdrawals during maintenance

include('jsonRPCClient.php');
include('classes/Client.php');
include('classes/User.php');

// function by wallet to modify the number to bitcoin format ex. 0.00120000
function satoshitize($satoshitize) {
   return sprintf("%.8f", $satoshitize);
}

// function by wallet to trim trailing zeroes and decimal if need
function satoshitrim($satoshitrim) {
   return rtrim(rtrim($satoshitrim, "0"), ".");
}

$server_url = "http://wallet.moneta.io/";  // website url

$db_host = "localhost";
$db_user = " ";
$db_pass = " ";
$db_name = " ";

$rpc_host = "127.0.0.1";
$rpc_port = "10332";
$rpc_user = "monetarpc";
$rpc_pass = "your_password";


$fullname = "MONETA"; //Website Title (Do Not include 'wallet')
$short = "MONET"; //Coin Short (BTC)
$blockchain_url = "http://explorer.moneta.io/_block/index.php?transaction="; //Blockchain Url
$support = "support@moneta.io"; //Your support eMail
$hide_ids = array(1); //Hide account from admin dashboard
$donation_address = "MDosfdRi1uefbULktVYeU9PjD44tKJtFHc"; //Donation Address
?>
