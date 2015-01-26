<?php
namespace Respect\Validation\Rules;

class Phone extends AbstractRule
{
    public function validate($input)
    {
        return !empty($input) && preg_match('/[0-9 -+()]{4,12}/', $input);
    }
}
