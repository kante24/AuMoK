<?php


function UserChecked(Users $user)
{
    // Database
    $db = connection();
    $UserCheckedManager = new UsersCheckedManager($db);
    return $UserCheckedManager->UserChecked($user);
 
}

function StatusCheck($checked)
{
    if ($checked == 0) {
        echo "bg-danger";
    } elseif ($checked == 1) {
        echo "bg-success";
    }
}





























?>