<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirim dari form.html
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $operator = $_POST["operator"];
    
    // Lakukan operasi aritmatika sesuai dengan operator yang dipilih
    if ($operator == "+") {
        $hasil = $nilai1 + $nilai2;
    } elseif ($operator == "-") {
        $hasil = $nilai1 - $nilai2;
    } elseif ($operator == "*") {
        $hasil = $nilai1 * $nilai2;
    } elseif ($operator == "/") {
        $hasil = $nilai1 / $nilai2;
    }
    
    // Tampilkan hasil operasi aritmatika
    echo "Hasil dari $nilai1 $operator $nilai2 adalah $hasil.";
}
?>
