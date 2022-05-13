<?php

namespace WappoVendor\Egulias\EmailValidator\Warning;

class IPV6BadChar extends \WappoVendor\Egulias\EmailValidator\Warning\Warning
{
    const CODE = 74;
    public function __construct()
    {
        $this->message = 'Bad char in IPV6 domain literal';
        $this->rfcNumber = 5322;
    }
}
