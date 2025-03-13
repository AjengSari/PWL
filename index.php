<?php

include 'Mahasiswa.php';
include 'Matakuliah.php';


$mahasiswaTi = new Mahasiswa();
$mahasiswaTi2 = new Mahasiswa();
$matkul1 = new Matakuliah();
$matkul2 = new Matakuliah();


$mahasiswaTi->setData("A11.2023.15127","Ajeng Pembayun Kartika Sari");
$matkul1->setData("A11.4416","PWL",4,"A11.2023.15127");
//$mahasiswaTi->dataMatkul($matkul1->nama,$matkul1->sks,'A');
$mahasiswaTi2->setData("A11.2023.15119","Monica Esty Vania");
$matkul2->setData("A11.4403","Jaringan Komputer",3,"A11.2023.15119");


echo date ("Y M d"),"<br>";
echo "<h2>Hello, " . $mahasiswaTi->nama . "!</h2>";
echo "Berikut adalah Data Mahasiswa anda:";
echo "<h3>Data Mahasiswa</h3>";
$mahasiswaTi->printData($mahasiswaTi->getData());
echo "<h3>Data Mata Kuliah</h3>";
echo "Kode      : " . $matkul1->kode . "<br>";
echo "Matkul    : " . $matkul1->nama . "<br>";
echo "SKS       : " . $matkul1->sks . "<br>";
echo "Nilai     : A" ."<br>";
echo "<h3>Data Mahasiswa 2</h3>";
$mahasiswaTi2->printData($mahasiswaTi2->getData());
echo "<h3>Data Mata Kuliah</h3>";
echo "Kode      : " . $matkul2->kode . "<br>";
echo "Matkul    : " . $matkul2->nama . "<br>";
echo "SKS       : " . $matkul2->sks . "<br>";
echo "Nilai     : A" ."<br>";
