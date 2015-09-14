
<?php if (!defined("IN_WALLET")) { die("u can't touch this."); } ?>
<?php
if (!empty($error))
{
    echo "<p style='font-weight: bold; align: center; color: red;'>" . $error['message']; "</p>";
}
?>

<div class="lightpage">
<div align="right">
Hello, <strong><?php echo $user_session; ?></strong>! <?php if ($admin) {?><strong><font color="red">[Admin]</font><?php }?></strong>
<form action="index.php" method="POST">
<form>
        <input type="hidden" name="action" value="logout" />
        <button type="submit" class="btn btn-default"><strong>LOGOUT</strong></button>
</form>
</form>
</div>
<h2>Balance:<br/> <span class="counter" style="font-weight: bold; color:#0896FE;"><b><?php echo satoshitize($balance); ?></b></span> <?=$short?></h2>
<div class="sexytabs">
  <ul>
   <li><a href="#Withdraw">
      <span><b>Send </b></span></a></li>
    <li><a href="#Receive">
      <span><b>Receive</b></span></a></li>
    <li><a href="#Transactions">
      <span><b>Transactions</b></span></a></li>
     <li><a href="#Settings">
      <span><b>Settings</b></span></a></li>
  </ul>
  <div class="contents">
  <div id="Withdraw">

 <img src="/assets/img/wallet.png" alt="Send" title="Send">

    <h2>Send</h2>
    <!-------------Withdraw----------------->

    <p>Send funds:    <button type="button" class="btn btn-default" style="zoom:75%;" id="donate">Donate to <?=$fullname?> developers!</button></p>
<br />
<br />
<p id="donateinfo" style="display: none;">Type the amount you want to donate and click SEND</p>
<form action="index.php" method="POST" class="clearfix" id="withdrawform">
    <input type="hidden" name="action" value="withdraw" />
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <div class="col-md-4"><input type="text" class="form-control" name="address" placeholder="Address"></div>
    <div class="col-md-2"><input type="text" class="form-control" name="amount" placeholder="Amount"></div>
<div class="col-md-2"><button type="submit" class="btn btn-default"><strong>SEND</strong></button></div>
</form>

<p id="withdrawmsg"></p>

            </p>

  </div>
  <div id="Receive">
<img src="/assets/img/receive.png" alt="Receive" title="Receive">

    <h2>Receive</h2>
        <!-------------Receive----------------->

<form action="index.php" method="POST" id="newaddressform">
        <input type="hidden" name="action" value="new_address" />
        <button type="submit" class="btn btn-default"><strong>+ GET A NEW ADDRESS</strong></button>
</form>
<p id="newaddressmsg"></p>
<table class="table table-bordered table-striped" id="alist">
<thead>
<tr>
<td>Address:</td>
</tr>
</thead>
<tbody>
<?php
foreach ($addressList as $address)
{
echo "<tr><td>".$address."</td></tr>\n";
}
?>
</tbody>
</table>

</p>
    
  </div>
            <!-------------Transactions----------------->

  <div id="Transactions">
 <img src="/assets/img/transaction.png" alt="Transactions" title="Transactions">

    <h2>Last 10 transactions:</h2>
<table class="table table-bordered table-striped" id="txlist">
<thead>
   <tr>
      <td nowrap>Date</td>
      <td nowrap>Address</td>
      <td nowrap>Type</td>
      <td nowrap>Amount</td>
      <td nowrap>Fee</td>
      <td nowrap>Confs</td>
      <td nowrap>Info</td>
   </tr>
  </thead>
<tbody>

   <?php
   $bold_txxs = "";
   foreach($transactionList as $transaction) {
      if($transaction['category']=="send") { $tx_type = '<b style="color: #FF6600;">Sent</b>'; } else { $tx_type = '<b style="color: #01DF01;">Received</b>'; }
      echo '<tr>
               <td>'.date('n/j/Y h:i a',$transaction['time']).'</td>
               <td>'.$transaction['address'].'</td>
               <td>'.$tx_type.'</td>
               <td>'.abs($transaction['amount']).'</td>
               <td>'.$transaction['fee'].'</td>
               <td>'.$transaction['confirmations'].'</td>
               <td>
 <a href="' . $blockchain_url,  $transaction['txid'] . '"  target="_blank">Info</a>



</td>
            </tr>';
   }
   ?>
   </tbody>
</table>

  </div>
    
                    <!-------------Settings----------------->

  <div id="Settings">
 <img src="/assets/img/settings.png" alt="Settings" title="Settings">

    <h2>Settings</h2>
  
<form action="index.php" method="POST">

<?php
if ($admin)
{
  ?>
<h4>Admin Links:</h4>
  <a href="?a=home" class="btn btn-default">Admin Dashboard</a>
<h4>User Links:</h4>
  <?php
}
?>
<form>
        <input type="hidden" name="action" value="logout" />
        <button type="submit" class="btn btn-default"><span>LOGOUT</span></button>
</form>
<form action="index.php" method="POST">
<input type="hidden" name="action" value="support" action="index.php"/>
<button type="submit" class="btn btn-default"><span>SUPPORT</span></button>
</form>
<br>

<br />
<p>Update your password:</p>
<form action="index.php" method="POST" class="clearfix" id="pwdform">
    <input type="hidden" name="action" value="password" />
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <div class="col-md-2"><input type="password" class="form-control" name="oldpassword" placeholder="Current password"></div>
    <div class="col-md-2"><input type="password" class="form-control" name="newpassword" placeholder="New password"></div>
    <div class="col-md-2"><input type="password" class="form-control" name="confirmpassword" placeholder="Confirm new password"></div>
    <div class="col-md-2"><button type="submit" class="btn btn-default"><span>UPDATE PASSWORD</span></button></div>
</form>
<p id="pwdmsg"></p>
<br />

    
  </div>
  </div>

</div>




</div>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js'></script>

        <script type="text/javascript">
      $('.sexytabs').tabs({
    show: {
        effect: 'slide',
        direction: 'left',
        duration: 200,
        easing: 'easeOutBack'
    },
    hide: {
        effect: 'slide',
        direction: 'right',
        duration: 200,
        easing: 'easeInQuad'
    }
});
      //@ sourceURL=pen.js
    </script>  
</div>


<script type="text/javascript">
var blockchain_url = "<?=$blockchain_url?>";
$("#withdrawform input[name='action']").first().attr("name", "jsaction");
$("#newaddressform input[name='action']").first().attr("name", "jsaction");
$("#pwdform input[name='action']").first().attr("name", "jsaction");
$("#donate").click(function (e){
  $("#donateinfo").show();
  $("#withdrawform input[name='address']").val("<?=$donation_address?>");
  $("#withdrawform input[name='amount']").val("0.01");
});
$("#withdrawform").submit(function(e)
{
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
            var json = $.parseJSON(data);
            if (json.success)
            {
              $("#withdrawform input.form-control").val("");
            	$("#withdrawmsg").text(json.message);
            	$("#withdrawmsg").css("color", "green");
            	$("#withdrawmsg").show();
            	updateTables(json);
            } else {
            	$("#withdrawmsg").text(json.message);
            	$("#withdrawmsg").css("color", "red");
            	$("#withdrawmsg").show();
            }
            if (json.newtoken)
            {
              $('input[name="token"]').val(json.newtoken);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //ugh, gtfo    
        }
    });
    e.preventDefault();
});
$("#newaddressform").submit(function(e)
{
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
            var json = $.parseJSON(data);
            if (json.success)
            {
            	$("#newaddressmsg").text(json.message);
            	$("#newaddressmsg").css("color", "green");
            	$("#newaddressmsg").show();
            	updateTables(json);
            } else {
            	$("#newaddressmsg").text(json.message);
            	$("#newaddressmsg").css("color", "red");
            	$("#newaddressmsg").show();
            }
            if (json.newtoken)
            {
              $('input[name="token"]').val(json.newtoken);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //ugh, gtfo    
        }
    });
    e.preventDefault();
});
$("#pwdform").submit(function(e)
{
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
            var json = $.parseJSON(data);
            if (json.success)
            {
               $("#pwdform input.form-control").val("");
               $("#pwdmsg").text(json.message);
               $("#pwdmsg").css("color", "green");
               $("#pwdmsg").show();
            } else {
               $("#pwdmsg").text(json.message);
               $("#pwdmsg").css("color", "red");
               $("#pwdmsg").show();
            }
            if (json.newtoken)
            {
              $('input[name="token"]').val(json.newtoken);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //ugh, gtfo    
        }
    });
    e.preventDefault();
});

function updateTables(json)
{
	$("#balance").text(json.balance.toFixed(8));
	$("#alist tbody tr").remove();
	for (var i = json.addressList.length - 1; i >= 0; i--) {
		$("#alist tbody").prepend("<tr><td>" + json.addressList[i] + "</td></tr>");
	}
	$("#txlist tbody tr").remove();
	for (var i = json.transactionList.length - 1; i >= 0; i--) {
		var tx_type = '<b style="color: #01DF01;">Received</b>';
		if(json.transactionList[i]['category']=="send")
		{
			tx_type = '<b style="color: #FF6600;">Sent</b>';
		}
		$("#txlist tbody").prepend('<tr> \
               <td>' + moment(json.transactionList[i]['time'], "X").format('l hh:mm a') + '</td> \
               <td>' + json.transactionList[i]['address'] + '</td> \
               <td>' + tx_type + '</td> \
               <td>' + Math.abs(json.transactionList[i]['amount']) + '</td> \
               <td>' + json.transactionList[i]['fee'] + '</td> \
               <td>' + json.transactionList[i]['confirmations'] + '</td> \
               <td><a href="' + blockchain_url.replace("%s", json.transactionList[i]['txid']) + '" target="_blank">Info</a></td> \
            </tr>');
	}
}
</script>

