<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_register' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::register'), array(), array(array('text', '/register')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'app_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/logout')), array(), array()),
        'app_site_index' => array(array(), array('_controller' => 'App\\Controller\\SiteController::index'), array(), array(array('text', '/site/index')), array(), array()),
        'app_site_postcategory' => array(array('slug'), array('_controller' => 'App\\Controller\\SiteController::postcategory'), array(), array(array('variable', '/', '[^/]++', 'slug', true), array('text', '/site/postcategory')), array(), array()),
        'app_site_post' => array(array('title'), array('_controller' => 'App\\Controller\\SiteController::post'), array(), array(array('variable', '/', '[^/]++', 'title', true), array('text', '/site/post')), array(), array()),
        'app_site_search' => array(array(), array('_controller' => 'App\\Controller\\SiteController::search'), array(), array(array('text', '/site/search')), array(), array()),
        'send_notification' => array(array(), array('_controller' => 'App\\Controller\\SiteController::sendNotification'), array(), array(array('text', '/send-notification')), array(), array()),
        'app.swagger' => array(array(), array('_controller' => 'nelmio_api_doc.controller.swagger'), array(), array(array('text', '/api/doc.json')), array(), array()),
        'sonata_admin_redirect' => array(array(), array('_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'), array(), array(array('text', '/admin/')), array(), array()),
        'sonata_admin_dashboard' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'), array(), array(array('text', '/admin/dashboard')), array(), array()),
        'sonata_admin_retrieve_form_element' => array(array(), array('_controller' => 'sonata.admin.action.retrieve_form_field_element'), array(), array(array('text', '/admin/core/get-form-field-element')), array(), array()),
        'sonata_admin_append_form_element' => array(array(), array('_controller' => 'sonata.admin.action.append_form_field_element'), array(), array(array('text', '/admin/core/append-form-field-element')), array(), array()),
        'sonata_admin_short_object_information' => array(array('_format'), array('_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'), array('_format' => 'html|json'), array(array('variable', '.', 'html|json', '_format', true), array('text', '/admin/core/get-short-object-description')), array(), array()),
        'sonata_admin_set_object_field_value' => array(array(), array('_controller' => 'sonata.admin.action.set_object_field_value'), array(), array(array('text', '/admin/core/set-object-field-value')), array(), array()),
        'sonata_admin_search' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'), array(), array(array('text', '/admin/search')), array(), array()),
        'sonata_admin_retrieve_autocomplete_items' => array(array(), array('_controller' => 'sonata.admin.action.retrieve_autocomplete_items'), array(), array(array('text', '/admin/core/get-autocomplete-items')), array(), array()),
        'admin_app_category_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_list'), array(), array(array('text', '/admin/app/category/list')), array(), array()),
        'admin_app_category_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_create'), array(), array(array('text', '/admin/app/category/create')), array(), array()),
        'admin_app_category_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_batch'), array(), array(array('text', '/admin/app/category/batch')), array(), array()),
        'admin_app_category_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/category')), array(), array()),
        'admin_app_category_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/category')), array(), array()),
        'admin_app_category_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/category')), array(), array()),
        'admin_app_category_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_export'), array(), array(array('text', '/admin/app/category/export')), array(), array()),
        'admin_app_tag_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_list'), array(), array(array('text', '/admin/app/tag/list')), array(), array()),
        'admin_app_tag_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_create'), array(), array(array('text', '/admin/app/tag/create')), array(), array()),
        'admin_app_tag_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_batch'), array(), array(array('text', '/admin/app/tag/batch')), array(), array()),
        'admin_app_tag_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/tag')), array(), array()),
        'admin_app_tag_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/tag')), array(), array()),
        'admin_app_tag_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/tag')), array(), array()),
        'admin_app_tag_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_export'), array(), array(array('text', '/admin/app/tag/export')), array(), array()),
        'admin_app_comment_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_list'), array(), array(array('text', '/admin/app/comment/list')), array(), array()),
        'admin_app_comment_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_create'), array(), array(array('text', '/admin/app/comment/create')), array(), array()),
        'admin_app_comment_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_batch'), array(), array(array('text', '/admin/app/comment/batch')), array(), array()),
        'admin_app_comment_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/comment')), array(), array()),
        'admin_app_comment_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/comment')), array(), array()),
        'admin_app_comment_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/comment')), array(), array()),
        'admin_app_comment_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_export'), array(), array(array('text', '/admin/app/comment/export')), array(), array()),
        'admin_app_post_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_list'), array(), array(array('text', '/admin/app/post/list')), array(), array()),
        'admin_app_post_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_create'), array(), array(array('text', '/admin/app/post/create')), array(), array()),
        'admin_app_post_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_batch'), array(), array(array('text', '/admin/app/post/batch')), array(), array()),
        'admin_app_post_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/post')), array(), array()),
        'admin_app_post_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/post')), array(), array()),
        'admin_app_post_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/post')), array(), array()),
        'admin_app_post_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_export'), array(), array(array('text', '/admin/app/post/export')), array(), array()),
        'admin_app_user_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_list'), array(), array(array('text', '/admin/app/user/list')), array(), array()),
        'admin_app_user_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_create'), array(), array(array('text', '/admin/app/user/create')), array(), array()),
        'admin_app_user_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_batch'), array(), array(array('text', '/admin/app/user/batch')), array(), array()),
        'admin_app_user_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/user')), array(), array()),
        'admin_app_user_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/user')), array(), array()),
        'admin_app_user_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/user')), array(), array()),
        'admin_app_user_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_export'), array(), array(array('text', '/admin/app/user/export')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        'notification_list' => array(array('notifiable'), array('_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction'), array(), array(array('variable', '/', '[^/]++', 'notifiable', true), array('text', '/notifications')), array(), array()),
        'notification_mark_as_seen' => array(array('notifiable', 'notification'), array('_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction'), array(), array(array('variable', '/', '[^/]++', 'notification', true), array('text', '/mark_as_seen'), array('variable', '/', '[^/]++', 'notifiable', true), array('text', '/notifications')), array(), array()),
        'notification_mark_as_unseen' => array(array('notifiable', 'notification'), array('_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction'), array(), array(array('variable', '/', '[^/]++', 'notification', true), array('text', '/mark_as_unseen'), array('variable', '/', '[^/]++', 'notifiable', true), array('text', '/notifications')), array(), array()),
        'notification_mark_all_as_seen' => array(array('notifiable'), array('_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction'), array(), array(array('text', '/markAllAsSeen'), array('variable', '/', '[^/]++', 'notifiable', true), array('text', '/notifications')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
