<?php

namespace ValueObjects\Number;

interface NumberInterface
{
    /** Returns a PHP native implementation of the Number value */
    public function toNative();
}
