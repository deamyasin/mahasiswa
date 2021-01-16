<?php

namespace App\Models;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'organization_id',
        'npm',
        'name',
        'slug',
        'class',
        'alamat'
    ];
    public function Organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
