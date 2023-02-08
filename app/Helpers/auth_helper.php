<?php

function Auth()
{
    $PenggunaModel = new \App\Models\PenggunaModel();
    if (session()->get('userId')) {
        return true;
    }
    return false;
}
