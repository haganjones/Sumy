<?php
namespace SlashEquip\Sumy;

use SlashEquip\Sumy\Exceptions\NaNException;

class Sumy {
    
    private $original;
    private $current;
    
    public function __construct($number = 0)
    {
        $this->load($number);
    }

    public function set($number)
    {
        $this->load($number);
        return $this;
    }

    public function get()
    {
        return $this->current;
    }

    public function reset()
    {
        $this->load($this->original);
        return $this;
    }

    public function add($number)
    {
        $this->current += $this->parse($number);
        return $this;
    }
  
    public function subtract($number)
    {
        $this->current -= $this->parse($number);
        return $this;
    }

    public function multiply($number)
    {
        $this->current *= $this->parse($number);
        return $this;
    }

    public function divide($number)
    {
        $this->current /= $this->parse($number);
        return $this;
    }

    public function sqrt()
    {
        $this->current = sqrt($this->current);
        return $this;
    }

    public function pow($number)
    {
        $this->current = $this->current ** $this->parse($number);
        return $this;
    }


    private function load($number)
    {
        if( $number instanceof Sumy ) {
            $number = $number->get();
        } elseif( is_null($number) ) {
            $number = 0;
        } elseif( !$this->isNumber($number) ) {
            $this->throwNaNException($number);
        }

        $this->original = $this->parse($number);
        $this->current = $this->parse($number);
    }

    private function parse($number)
    {
        if( !$this->isNumber($number) ) {
            $this->throwNaNException($number);
        }

        return floatval($number);
    }

    private function isNumber($number)
    {
        return is_numeric($number);
    }

    private function throwNaNException($var)
    {
        $type = gettype($var);

        if( in_array($type, ['string', 'integer', 'double']) ) {
            $message = "'{$var}' is not numeric";
        } else {
            $message = "'{$type}' is not numeric";
        }

        throw new NaNException($message);
    }
}