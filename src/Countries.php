<?php

namespace IsoCountries;

use IsoCountries\Exception\CountryNotFoundException;

class Countries implements \IteratorAggregate
{
    /** @var Country[] */
    private $countries;

    /**
     * @param Country $country
     */
    public function addCountry(Country $country)
    {
        $this->countries[] = $country;
    }

    /**
     * @param string $alpha2Code
     * @return Country
     * @throws CountryNotFoundException
     */
    public function getByAlpha2Code(string $alpha2Code): Country
    {
        foreach ($this->countries as $country) {
            if ($country->getAlpha2Code() == $alpha2Code) {
                return $country;
            }
        }

        throw CountryNotFoundException::notFoundByAlpha2Code($alpha2Code);
    }

    /**
     * @param string $alpha3Code
     * @return Country
     * @throws CountryNotFoundException
     */
    public function getByAlpha3Code(string $alpha3Code): Country
    {
        foreach ($this->countries as $country) {
            if ($country->getAlpha3Code() == $alpha3Code) {
                return $country;
            }
        }

        throw CountryNotFoundException::notFoundByAlpha3Code($alpha3Code);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->countries);
    }
}
