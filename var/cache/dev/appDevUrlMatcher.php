<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        if (0 === strpos($pathinfo, '/a')) {
            // app_catalog_addorder
            if (0 === strpos($pathinfo, '/addOrder') && preg_match('#^/addOrder/(?P<user_id>[^/]++)/(?P<product_id>[^/]++)/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_catalog_addorder')), array (  '_controller' => 'AppBundle\\Controller\\CatalogController::addOrderAction',));
            }

            // app_catalog_allproducts
            if (rtrim($pathinfo, '/') === '/allProducts') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_catalog_allproducts');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::allProductsAction',  '_route' => 'app_catalog_allproducts',);
            }

        }

        // app_default_getproduct
        if (0 === strpos($pathinfo, '/test') && preg_match('#^/test/(?P<subId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_getproduct')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::getProductAction',));
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
