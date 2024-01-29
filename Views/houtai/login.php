<?php

$title = "登录";

if (isset($errorMessage))
    echo $errorMessage;
?>

<form action="auth" method="POST">
    <table>
        <tr>
            <td><label for="name">账号 :</label></td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><label for="password">密码 :</label></td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="登录"></td>
        </tr>
    </table>
</form>