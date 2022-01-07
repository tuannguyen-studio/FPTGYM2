<?php
global $conn;
function connect_db()
{
    global $conn;
    if (!$conn) {
        $conn = mysqli_connect('localhost', 'root', '', 'fptgym')
            or die('Can\'t not connect database');
        mysqli_set_charset($conn, 'utf8');
    }
}

function disconnect_db()
{
    global $conn;
    if ($conn) {
        mysqli_close($conn);
    }
}