<?php

function emptyInputSignup($studentId, $firstName, $middleName, $lastName, $email, $phone, $password) {
    $isInputEmpty = empty($studentId) || empty($firstName) || empty($middleName) || empty($lastName) || empty($email) || empty($phone) || empty($password);
    if ($isInputEmpty) {
        return true;
    }
    return false;
}

function nameValidation($name) {
    $regex = "[A-Za-z]{1,15}";
    if (!preg_match($regex, $name)) {
        return true;
    }
    return false;
}

function emailValidation($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}

function emptyInputLogin($username, $password) {
    if (empty($username) || empty($password)) {
        return true;
    }
    return false;
}

function invalidUsername($username) {
    $regex = "(^[A-Za-z0-9]+@student.buksu.edu.ph)|([0-9]){0,}";
    if (!preg_match($regex, $username)) {
        return true;
    }
    return false;
}

function invalidPassword($password) {
    $regex = "^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$";
    if (!preg_match($regex, $password)) {
        return true;
    }
    return false;
}