<?php

function generatePassword($passwordLength)
{
  $passwordCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=";
  $password = '';

  for ($i = 0; $i < $passwordLength; $i++) {
    $random = rand(0, strlen($passwordCharacters) - 1);
    $password .= substr($passwordCharacters, $random, 1);
  }

  return $password;
}

// var_dump($passwordLength);
// var_dump($password);
