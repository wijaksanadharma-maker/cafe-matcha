<?php

function formatRupiah($angka){
    return "Rp " . number_format($angka,0,',','.');
}

function judulWebsite(){
    return "Cafe Matcha";
}

?>