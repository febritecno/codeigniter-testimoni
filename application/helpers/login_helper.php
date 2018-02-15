<?php

function cek_ses()
{
    $CI= & get_instance();
    $session=$CI->session->userdata('id');
    if(!$session)
    {
        redirect('login');
    }
}

?>
