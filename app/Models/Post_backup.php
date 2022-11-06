<?php

namespace App\Models;

class Post
{
    private static $data_kamar = [
        [
            "nama_kamar" => "Kamar 1",
            "status_kamar" => "tersedia",
            "harga_kamar" => "390",
            "deskripsi_kamar" => "Lorem ipsum dolor sit amet consectetur."
        ],
        [
            "nama_kamar" => "Kamar 2",
            "status_kamar" => "terisi",
            "harga_kamar" => "400",
            "deskripsi_kamar" => "Lorem ipsum dolor sit amet consectetur."
        ],
        [
            "nama_kamar" => "Kamar 3",
            "status_kamar" => "tersedia",
            "harga_kamar" => "410",
            "deskripsi_kamar" => "Lorem ipsum dolor sit amet consectetur."
        ]
    ];

    public static function all()
    {
        return self::$data_kamar;
    }
}