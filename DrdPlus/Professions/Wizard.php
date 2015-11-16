<?php
namespace DrdPlus\Professions;

use DrdPlus\Properties\Base\Intelligence;
use DrdPlus\Properties\Base\Will;

class Wizard extends AbstractProfession
{
    const WIZARD = 'wizard';

    /**
     * @param string $propertyCode
     * @return bool
     */
    public function isPrimaryProperty($propertyCode)
    {
        return in_array($propertyCode, [Will::WILL, Intelligence::INTELLIGENCE]);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return self::WIZARD;
    }

}
