<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Rpc;

/**
 */
class UserClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Rpc\LoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Login(\Rpc\LoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/rpc.User/Login',
        $argument,
        ['\Rpc\LoginResponse', 'decode'],
        $metadata, $options);
    }

}
