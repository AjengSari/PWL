<?php
    class Matakuliah{
        public $kode;
        public $nama;
        public $sks;
        public $nim;

        function setData($kode, $nama, $sks, $nim)
        {
            $this->kode = $kode;
            $this->nama = $nama;
            $this->sks = $sks;
            $this->nim = $nim;

        }
}