<?php

function show($status,$message,$data =[])
{
    return [
        'status' => intval($status),
        'messige' => $message,
        'data' => $data,
    ];

}
