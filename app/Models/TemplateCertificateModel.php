<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateCertificateModel extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'tb_generate_certification';
    protected $fillable = [
        'id' ,
        'id_user',
        'template'
    ];
}
