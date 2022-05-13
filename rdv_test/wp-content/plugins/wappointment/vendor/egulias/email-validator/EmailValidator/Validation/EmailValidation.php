<?php

namespace WappoVendor\Egulias\EmailValidator\Validation;

use WappoVendor\Egulias\EmailValidator\EmailLexer;
use WappoVendor\Egulias\EmailValidator\Exception\InvalidEmail;
use WappoVendor\Egulias\EmailValidator\Warning\Warning;
interface EmailValidation
{
    /**
     * Returns true if the given email is valid.
     *
     * @param string     $email      The email you want to validate.
     * @param EmailLexer $emailLexer The email lexer.
     *
     * @return bool
     */
    public function isValid($email, \WappoVendor\Egulias\EmailValidator\EmailLexer $emailLexer);
    /**
     * Returns the validation error.
     *
     * @return InvalidEmail|null
     */
    public function getError();
    /**
     * Returns the validation warnings.
     *
     * @return Warning[]
     */
    public function getWarnings();
}
