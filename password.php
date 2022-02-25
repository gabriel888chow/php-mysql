<?php
// password_hash is encrypt the password
// 123 password was encrypt in mysql staff table
echo $hashedPassword = password_hash("123", PASSWORD_BCRYPT);

// password_verify is a function to match the encrypted password
if (password_verify("123",$hashedPassword))
{
    echo '<br>password right';
} else {
    echo '<br>password wrong';
}