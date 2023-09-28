<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TabelOtsuka extends Model
{
    use HasFactory;
    protected $table = 'tableOtsuka';
    protected $primaryKey = 'id_table';
    public $incrementing = true;
    protected $fillable = ['ItemCode', 'description1', 'description2','volume','destination','GTINNumbers','Pabrik','Kemasan'];
    public $timestamps = false;
}
