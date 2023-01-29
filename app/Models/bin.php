<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bin extends Model
{
    use HasFactory;

    protected $table = 'bin';
    protected $primaryKey = 'id';
    protected $fillable = [ 'location','compartment','remainding','status'];

}