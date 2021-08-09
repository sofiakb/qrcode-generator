<?php
/**
 * This file contains QRInterface class.
 * Created by PhpStorm.
 * User: Sofiakb <contact.sofiak@gmail.com>
 * Date: 08/08/2021
 * Time: 10:50
 */

namespace Sofiakb\QRCode;


interface QRInterface
{
    public function generate();
    
    public function size(int $size);
    
    public function withoutBorder();
    
    public function border(int $borderSize);
}