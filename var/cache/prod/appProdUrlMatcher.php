<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // app_address_get
        if (0 === strpos($pathinfo, '/getAddress') && preg_match('#^/getAddress/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_address_get')), array (  '_controller' => 'AppBundle\\Controller\\AddressController::getAction',));
        }

        // app_address_add
        if (0 === strpos($pathinfo, '/addAddress') && preg_match('#^/addAddress/(?P<city>[^/]++)/(?P<street>[^/]++)/(?P<dom>[^/]++)/(?P<flat>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_address_add')), array (  '_controller' => 'AppBundle\\Controller\\AddressController::addAction',));
        }

        // app_address_check
        if (0 === strpos($pathinfo, '/checkAddress') && preg_match('#^/checkAddress/(?P<city>[^/]++)/(?P<street>[^/]++)/(?P<dom>[^/]++)/(?P<flat>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_address_check')), array (  '_controller' => 'AppBundle\\Controller\\AddressController::checkAction',));
        }

        if (0 === strpos($pathinfo, '/get')) {
            // app_catalog_get
            if (rtrim($pathinfo, '/') === '/getCatalog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_catalog_get');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::getAction',  '_route' => 'app_catalog_get',);
            }

            // app_catalog_getproduct
            if (0 === strpos($pathinfo, '/getProduct') && preg_match('#^/getProduct/(?P<subId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_catalog_getproduct')), array (  '_controller' => 'AppBundle\\Controller\\CatalogController::getProductAction',));
            }

            // app_catalog_getsub
            if (0 === strpos($pathinfo, '/getSub') && preg_match('#^/getSub/(?P<catId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_catalog_getsub')), array (  '_controller' => 'AppBundle\\Controller\\CatalogController::getSubAction',));
            }

        }

        // app_catalog_addorder
        if (0 === strpos($pathinfo, '/addOrder') && preg_match('#^/addOrder/(?P<user_id>[^/]++)/(?P<product_id>[^/]++)/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_catalog_addorder')), array (  '_controller' => 'AppBundle\\Controller\\CatalogController::addOrderAction',));
        }

        // app_default_index
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_default_index',);
        }

        // app_user_add
        if (0 === strpos($pathinfo, '/addUser') && preg_match('#^/addUser/(?P<name>[^/]++)/(?P<password>[^/]++)/(?P<phone>[^/]++)/(?P<email>[^/]++)/(?P<city>[^/]++)/(?P<street>[^/]++)/(?P<dom>[^/]++)/(?P<flat>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_add')), array (  '_controller' => 'AppBundle\\Controller\\UserController::addAction',));
        }

        // app_user_get
        if (0 === strpos($pathinfo, '/getUser') && preg_match('#^/getUser/(?P<email>[^/]++)/(?P<password>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_get')), array (  '_controller' => 'AppBundle\\Controller\\UserController::getAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            // _easyadmin_render_css
            if ($pathinfo === '/admin/_css/admin.css') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::renderCssAction',  '_route' => '_easyadmin_render_css',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
