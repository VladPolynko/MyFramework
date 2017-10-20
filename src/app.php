<?php
use Symfony\Component\Routing;
use first\src\calendar\controller\LeapYearController;

$routes = new Routing\RouteCollection();

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => array(new LeapYearController(), 'indexAction'),
)));

return $routes;
