<?php

namespace Wappointment\Services\Wappointment;

use Wappointment\Validators\HttpRequest\ContactAdmin;
class Contact extends \Wappointment\Services\Wappointment\API
{
    public function sendMessage(\Wappointment\Validators\HttpRequest\ContactAdmin $request)
    {
        $response = $this->client->setForm($this->prepareData($request->getData()))->post($this->call('/api/ticket/create'));
        $result = $this->processResponse($response);
        return ['response' => $result];
    }
    private function prepareData($data)
    {
        $data['message'] = \nl2br($data['message']);
        return $data;
    }
}
