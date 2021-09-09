<?php

use Rpc\LoginRequest;
use Rpc\UserClient;

class UserController
{

    public function grpc()
    {
        $client = new UserClient('0.0.0.0:8081', [
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ]);

        $request = new LoginRequest();
        $request->setName('world');
        $request->setPassword('hello');
        $call = $client->Login($request);

        list($response, $status) = $call->wait();

        var_dump($response->getName(), $response->getGender(), $status);
    }
}
