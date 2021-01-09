<?php

namespace SlashEquip\Sumy;

use SlashEquip\Sumy\Exceptions\NaNException;

class Sumy
{
    /** @var float */
    protected $original;

    /** @var float */
    protected $current;
    
    public function __construct($number = 0)
    {
        $this->load($number);
    }

    public function set($number): Sumy
    {
        $this->load($number);

        return $this;
    }

    public function get(): float
    {
        return $this->current;
    }

    public function reset(): Sumy
    {
        $this->load($this->original);

        return $this;
    }

    public function add($number): Sumy
    {
        $this->current += $this->parse($number);

        return $this;
    }
  
    public function subtract($number): Sumy
    {
        $this->current -= $this->parse($number);

        return $this;
    }

    public function multiply($number): Sumy
    {
        $this->current *= $this->parse($number);

        return $this;
    }

    public function divide($number): Sumy
    {
        $this->current /= $this->parse($number);

        return $this;
    }

    public function sqrt(): Sumy
    {
        $this->current = sqrt($this->current);

        return $this;
    }

    public function pow($number): Sumy
    {
        $this->current = $this->current ** $this->parse($number);

        return $this;
    }

    protected function load($number): void
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

    protected function parse($number): float
    {
        if( !$this->isNumber($number) ) {
            $this->throwNaNException($number);
        }

        return floatval($number);
    }

    protected function isNumber($number): bool
    {
        return is_numeric($number);
    }

    /**
     * @throws NaNException
     */
    protected function throwNaNException($var): void
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