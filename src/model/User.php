<?php


class User extends Model
{
    protected static $tableName = 'usuario';
    protected static $columns = [
        'id',
        'email',
        'password'
    ];
    
}




?>