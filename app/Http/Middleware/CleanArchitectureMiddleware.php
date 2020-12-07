<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;

class CleanArchitectureMiddleware
{
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        if (!property_exists($this, 'data') || $this->data === null) {
            return $response;
        }

        return $this->router->prepareResponse($this->router->getCurrentRequest(), $this->data);
    }
}
