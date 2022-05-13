<?php

namespace Wappointment\Controllers;

use Wappointment\Helpers\Translations;
use Wappointment\Services\Wappointment\EmailList;
use Wappointment\Services\Wappointment\Contact;
use Wappointment\Validators\HttpRequest\SubscribeAdmin;
use Wappointment\Validators\HttpRequest\ContactAdmin;
use Wappointment\Services\Settings;
class WappointmentController extends \Wappointment\Controllers\RestController
{
    public function subscribe(\Wappointment\Validators\HttpRequest\SubscribeAdmin $request)
    {
        $result = (new \Wappointment\Services\Wappointment\EmailList())->subscribe($request->get('email'), $request->get('list'));
        if ($result) {
            return ['result' => $result, 'message' => $result === true ? 'Already subscribed' : (isset($result['response']->status) && $result['response']->status > 0 ? "Great, we'll keep you posted as soon as this is out!" : 'Great we\'ve sent you an email, just quickly check your inbox and confirm!')];
        }
        throw new \WappointmentException("Couldn't subscribe you.", 1);
    }
    public function contact(\Wappointment\Validators\HttpRequest\ContactAdmin $request)
    {
        $result = (new \Wappointment\Services\Wappointment\Contact())->sendMessage($request);
        if ($result) {
            return ['result' => $result, 'message' => __('Great your message has been sent, we\'ll get back to you soon', 'wappointment')];
        }
        throw new \WappointmentException(\Wappointment\Helpers\Translations::get('error_sending'), 1);
    }
    /**
     * Legacy TODO remove
     */
    public function sendIgnoreBooking()
    {
        \Wappointment\Services\Settings::save('show_welcome', false);
        return ['result' => true, 'message' => "Have fun!"];
    }
}
