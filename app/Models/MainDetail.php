<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainDetail extends Model
{
    use HasFactory;
    protected $table = 'main_details';

    // protected $with = ['file'];

    // public function file()
    // {
    //     return $this->belongsTo(File::class);
    // }
}
