<?php
$nilai = 85;

if ($nilai >= 70) {
    echo "Lulus";

    if ($nilai >= 90) {
        echo " dengan predikat A";
    } else 
    if ($nilai >= 80) {
        echo " dengan predikat B";
    } else {
        echo " dengan predikat C";
    }

} else {
    echo "Remidi";
}