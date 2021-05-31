<?php

$conn = mysqli_connect('localhost', 'root', '', 'shop');

if (!$conn) {
    die ("Koneksi gagal. " . mysqli_connect_error()); // close koneksi
}