<?php


function UserChecked(Users $user)
{
    // Database
    $db = connection();
    $UserCheckedManager = new UsersCheckedManager($db);
    return $UserCheckedManager->UserChecked($user);
 
}

function checkedBool($checked)
{
    if ($checked == 0) {
        return "unVerified";
    } elseif ($checked == 1) {
        return "Verified";
    }
}





























?>