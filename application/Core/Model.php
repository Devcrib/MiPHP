<?php
/**
 * Created by PhpStorm.
 * @author tomiiide
 * @email ayotomiiide@gmail.com
 * Date: 5/26/2017
 * Time: 12:20 PM
 */

namespace Core;



class Model
{
    protected $db;

    public function __construct(){
        $this->db = Database::connection();
}
}