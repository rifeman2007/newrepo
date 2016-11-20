<?php

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrderController
 */
class OrderController
{
    protected $container;

    /**
     * @param $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param array $args
     */
    public function get(ServerRequestInterface $request, ResponseInterface $response, array $args = array())
    {
        $order = $this->container->get('order_manager')->getFind($args['id']);

        if (is_null($order)) {
            return $response->withJson([
                'success'   => false
            ], 404);
        }

        return $response->withJson([
            'success'   => true,
            'order'     => $order
        ], 200);
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param array $args
     */
    public function patchCancel(ServerRequestInterface $request, ResponseInterface $response, array $args = array())
    {
        $order = $this->container->get('order_manager')->getFind($args['id']);

        if (is_null($order)) {
            return $response->withJson([
                'success'   => false,
                'message'   => 'Not found.'
            ], 404);
        }

        if ($order->status == Order::STATUS_CANCELLED) {
            return $response->withJson([
                'success'   => false,
                'message'   => 'Order already been cancelled.'
            ], 302);
        }

        $this->container->get('order_manager')->markAsCancelled($order);

        return $response->withJson([
            'order' => $order
        ], 200);
    }
}