<?php
namespace ElegantTechnologies\Validations\Contracts;


interface ArrayableShallow
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toShallowArray() : array;
}