<?php


namespace Tests\Unit;


use PHPUnit\Framework\TestCase;
use App\Providers\Router;

class RouterTest extends TestCase
{
    /** @test */
    public function it_registers_a_route(): void 
    {
        // given that we have a router object
        $router = new Router();

        // when we call a register method
        $router->register('get', '/payment/create', ['Payment', 'create']);

        // then we assert route was registered
        $expected = [
            'get' => [
                ['/payment/create']     
            ]
        ];
        $this->assertEquals($expected, $router->routes());
    }

}