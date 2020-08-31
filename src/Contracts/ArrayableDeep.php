<?php
namespace SchoolTwist\Validations\Contracts;

interface ArrayableDeep
{
    /**
     * Get the instance as an array, but lots of meta - only really makes sense when used in constract to ArraybelShallow.
     *
     * @return array
     */
    public function toDeepArray() : array;
}