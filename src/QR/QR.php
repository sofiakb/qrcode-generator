<?php
/**
 * This file contains QR class.
 * Created by PhpStorm.
 * User: Sofiakb <contact.sofiak@gmail.com>
 * Date: 07/08/2021
 * Time: 22:14
 */

namespace Sofiakb\QRCode\QR;


use Sofiakb\QRCode\QRInterface;

/**
 * Class QR
 * @package Sofiakb\QRCode\QR
 * @author Sofiakb <contact.sofiak@gmail.com>
 */
class QR implements QRInterface
{
    /**
     * @var string
     */
    private string $QRclass;
    
    /**
     * @var string
     */
    private string $QRdata;
    
    /**
     * @var string|null
     */
    protected ?string $prefix = null;
    
    /**
     * @var int $size
     */
    protected int $size = QRCODE_DEFAULT;
    
    /**
     * @var int $border
     */
    protected int $border = 1;
    
    /**
     * @var string|null $filepath
     */
    protected ?string $filepath;
    
    /**
     * QR constructor.
     * @param string $QRdata
     * @param string|null $filepath
     */
    public function __construct(string $QRdata, string $filepath = null)
    {
        $this->QRclass = \QRcode::class;
        $this->QRdata = ($this->prefix ? $this->prefix . ':' : '') . $QRdata;
        
        $this->filepath = $filepath;
    }
    
    /**
     * Generate QRcode.
     */
    public function generate()
    {
        $this->QRclass::png($this->QRdata, $this->filepath, QR_ECLEVEL_L, $this->size, $this->border);
    }
    
    /**
     * @param int $size
     */
    public function size(int $size)
    {
        $this->size = $size;
    }
    
    /**
     * @return $this
     */
    public function small(): QR
    {
        $this->size(QRCODE_SMALL);
        return $this;
    }
    
    /**
     * @return $this
     */
    public function medium(): QR
    {
        $this->size(QRCODE_MEDIUM);
        return $this;
    }
    
    /**
     * @return $this
     */
    public function large(): QR
    {
        $this->size(QRCODE_LARGE);
        return $this;
    }
    
    /**
     * @return $this
     */
    public function withoutBorder(): QR
    {
        $this->border(1);
        return $this;
    }
    
    /**
     * @param int $borderSize
     */
    public function border(int $borderSize)
    {
        $this->border = $borderSize;
    }
}