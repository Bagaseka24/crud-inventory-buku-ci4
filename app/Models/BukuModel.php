<?php namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    /**
     * table name
     */
    protected $table = "buku";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'namabuku',
        'jenisbuku',
        'tahunterbit',
        'penulis',
        'penerbit',
        'isbn'
    ];
}