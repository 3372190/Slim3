<?php

use function DI\get;
use App\Models\User;
use Interop\Container\ContainerInterface;
use Slim\Views\Twig as View;
use Slim\Views\TwigExtension;

return [

  'router' => get(Slim\Router::class),

  Twig::class => function(ContainerInterface $container){
      $view = new View(__DIR__ . '/../resources/views', [
        'cache' => false,
      ]);

      $view->addExtension(new TwigExtension(
          $container->get('router'),
          $container->get('request')->getUri()
      ));

      return $view;
  },

];
