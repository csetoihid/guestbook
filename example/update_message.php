<?php
    require_once '../class/user.php';
    require_once 'config.php';


    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $parent_id = filter_input(INPUT_POST, 'parent_id', FILTER_SANITIZE_STRING);

    if($user->saveMessage($message, $parent_id)) {
        print 'Message is saved';
        die;
    } else {
        $user->printMsg();
        die;
    }
