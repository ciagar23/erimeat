<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>
<?=$error?>
<br>
<form action="process.php?action=login" method="POST">

					<input class="form-control" placeholder="User Name" name="username" required> <br>

                    <input class="form-control" placeholder="Password" name="password" type="password" required>
               <br>
                <button type="submit" >Login</button>

</form>
