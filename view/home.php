<?php if (!defined("IN_WALLET")) { die("u can't touch this."); } ?>
<!-- <h2>Welcome to <?=$fullname?> wallet!</h2> -->
<a href="/" title='<?=$fullname?> wallet!' ><img class="logo" src="assets/img/logo.png" width="150px" alt="Moneta Wallet"></a>

                <?php
                if (!empty($error))
                {
                    echo "<p style='font-weight: bold; color: red;'>" . $error['message']; "</p>";
                }
                ?>
		<br /><br />
                <p>Log in...</p>
                <form action="index.php" method="POST" class="clearfix">
                    <input type="hidden" name="action" value="login" />
                    <div class="col-md-2"><input type="text" class="form-control" name="username" placeholder="Username"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="password" placeholder="Password"></div>
                    <div class="col-md-2"><button type="submit" class="btn btn-default">Log in</button></div>
                </form>
                                <p></p>
 	                <p>...or create a new account:</p>
                <form action="index.php" method="POST" class="clearfix">
                    <input type="hidden" name="action" value="register" />
                    <div class="col-md-2"><input type="text" class="form-control" name="username" placeholder="Username"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="password" placeholder="Password"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="confirmPassword" placeholder="Confirm password"></div>
                    <div class="col-md-2"><button type="submit" class="btn btn-default">Sign up</button></div>
                </form>
