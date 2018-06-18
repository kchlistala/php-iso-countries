<?php

namespace IsoCountries\Exception;

class CountryNotFoundException extends IsoCountriesException
{
    /**
     * @param string $alpha2Code
     * @return CountryNotFoundException
     */
    public static function notFoundByAlpha2Code(string $alpha2Code): CountryNotFoundException
    {
        return new CountryNotFoundException(sprintf("Country with Alpha-2 Code '%s' was not found.", $alpha2Code));
    }

    /**
     * @param string $alpha3Code
     * @return CountryNotFoundException
     */
    public static function notFoundByAlpha3Code(string $alpha3Code): CountryNotFoundException
    {
        return new CountryNotFoundException(sprintf("Country with Alpha-3 Code '%s' was not found.", $alpha3Code));
    }
}
