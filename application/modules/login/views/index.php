<h1>Login</h1>
<?php if(isset($msg)){
    echo $msg;
} ?>
<form method="post" action="<?php echo base_url('login/auth')?>">
    Username: <input type="text" name="username"><br/>
    Password: <input type="password" name="password"><br/>
    <input type="submit">
</form>