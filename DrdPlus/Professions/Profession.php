<?php
namespace DrdPlus\Professions;

use Doctrineum\Scalar\Enum;

abstract class Profession extends Enum
{
    const PROFESSION = 'profession';

    public static function getIt()
    {
        return new static(static::getCode());
    }

    /**
     * @param string $propertyCode
     * @return bool
     */
    abstract public function isPrimaryProperty($propertyCode);

    /**
     * @return string
     */
    public static function getCode()
    {
        $classBaseName = preg_replace('~.+\\\(\w+)$~', '$1', static::class);
        $underscored = preg_replace('~([a-z])([A-Z])~', '$1_$2', $classBaseName);
        $constantLike = strtolower($underscored);

        return $constantLike;
    }
}
