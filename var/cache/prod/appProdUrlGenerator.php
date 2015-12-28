<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_address_get' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddressController::getAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/getAddress',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_address_add' => array (  0 =>   array (    0 => 'city',    1 => 'street',    2 => 'dom',    3 => 'flat',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddressController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'flat',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dom',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'street',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'city',    ),    4 =>     array (      0 => 'text',      1 => '/addAddress',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_address_check' => array (  0 =>   array (    0 => 'city',    1 => 'street',    2 => 'dom',    3 => 'flat',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AddressController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'flat',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dom',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'street',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'city',    ),    4 =>     array (      0 => 'text',      1 => '/checkAddress',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_catalog_get' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CatalogController::getAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getCatalog/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_catalog_getproduct' => array (  0 =>   array (    0 => 'subId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CatalogController::getProductAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'subId',    ),    1 =>     array (      0 => 'text',      1 => '/getProduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_catalog_getsub' => array (  0 =>   array (    0 => 'catId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CatalogController::getSubAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'catId',    ),    1 =>     array (      0 => 'text',      1 => '/getSub',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_catalog_addorder' => array (  0 =>   array (    0 => 'user_id',    1 => 'product_id',    2 => 'count',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CatalogController::addOrderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'count',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'product_id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'user_id',    ),    3 =>     array (      0 => 'text',      1 => '/addOrder',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_user_add' => array (  0 =>   array (    0 => 'name',    1 => 'password',    2 => 'phone',    3 => 'email',    4 => 'city',    5 => 'street',    6 => 'dom',    7 => 'flat',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'flat',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dom',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'street',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'city',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    5 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'phone',    ),    6 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'password',    ),    7 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    8 =>     array (      0 => 'text',      1 => '/addUser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_user_get' => array (  0 =>   array (    0 => 'email',    1 => 'password',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::getAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'password',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    2 =>     array (      0 => 'text',      1 => '/getUser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'easyadmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_easyadmin_render_css' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdminController::renderCssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/_css/admin.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
