<?php

/** @var string $action */
?>

<div class="container">
    <form action="<?=$action?>" method="post" id="authform">
        <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input type="text" class="form-control" name="login" id="login">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <a class="btn start" href="/">BACK</a>
        <button type="submit" class="btn btn-primary start">OK</button>
    </form>
</div>
<script src="public/js/auth.js"></script>
