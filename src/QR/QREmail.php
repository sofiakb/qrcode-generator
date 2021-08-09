<?php
/**
 * This file contains QREmail class.
 * Created by PhpStorm.
 * User: Sofiakb <contact.sofiak@gmail.com>
 * Date: 07/08/2021
 * Time: 22:16
 */

namespace Sofiakb\QRCode\QR;


class QREmail extends QR
{
    protected ?string $prefix = 'mailto';
}