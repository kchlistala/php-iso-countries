<?php

namespace IsoCountries;

class Country
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $numericCode;

    /** @var string */
    protected $alpha2Code;

    /** @var string */
    protected $alpha3Code;

    /** @var string */
    protected $continent;

    /**
     * Country constructor.
     * @param string $name
     * @param string $numericCode
     * @param string $alpha2Code
     * @param string $alpha3Code
     * @param string $continent
     */
    public function __construct(string $name, string $numericCode, string $alpha2Code, string $alpha3Code, string $continent)
    {
        $this->name = $name;
        $this->numericCode = $numericCode;
        $this->alpha2Code = $alpha2Code;
        $this->alpha3Code = $alpha3Code;
        $this->continent = $continent;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNumericCode(): string
    {
        return $this->numericCode;
    }

    /**
     * @return string
     */
    public function getAlpha2Code(): string
    {
        return $this->alpha2Code;
    }

    /**
     * @return string
     */
    public function getAlpha3Code(): string
    {
        return $this->alpha3Code;
    }

    /**
     * @return string
     */
    public function getContinent(): string
    {
        return $this->continent;
    }
}
