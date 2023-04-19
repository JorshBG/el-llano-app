<?php

// encrypt a password to send to dataase


$password = "password";

$hash = password_hash($password,  PASSWORD_DEFAULT);

print($hash);

// This is a crypt password, how to make some like this $2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi from password = "password"

// check password
// $password = "password";
// $hash = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi";
if (password_verify($password, $hash)) {
    print("Password is valid!");
} else {
    print("Invalid password.");
}
