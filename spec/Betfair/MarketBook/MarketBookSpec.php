<?php

namespace spec\Betfair\MarketBook;

use Betfair\Adapter\AdapterInterface;
use Betfair\Client\BetfairJsonRpcClientInterface;
use Betfair\CredentialInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MarketBookSpec extends ObjectBehavior
{
    function let(
        CredentialInterface $credentials,
        AdapterInterface $adapterInterface,
        BetfairJsonRpcClientInterface $jsonRPCClient
    )
    {

        $this->beConstructedWith($credentials, $jsonRPCClient, $adapterInterface);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('Betfair\MarketBook\MarketBook');
    }
}
