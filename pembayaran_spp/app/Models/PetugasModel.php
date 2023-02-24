<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasModel extends Model
{
    use HasFactory;

    protected $table = "petugas";
    protected $primaryKey = "id_petugas";
    protected $fillable = [
        'nama_petugas',
        'id_users'
    ];
    public $timestamp = true;
}
