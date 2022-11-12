<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppImage extends Model
{
    use HasFactory;

    public const TABLE = 'app_images';
    public const FILE_NAME_COLUMN = 'file_name';

    protected $table = self::TABLE;

    public $timestamps = false;

    public function getFileName(): string
    {
        return $this->getAttribute(self::FILE_NAME_COLUMN);
    }
}
