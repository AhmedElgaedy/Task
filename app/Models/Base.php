<!-- #region Base Model -->                 
<?php   

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    public static function getTableName()
    {
        return with(new static())->getTable();
    }
}     