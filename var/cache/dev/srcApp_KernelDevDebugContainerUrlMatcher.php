<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/register' => array(array(array('_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'), null, null, null, false, null)),
            '/login' => array(array(array('_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, null)),
            '/logout' => array(array(array('_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null, false, null)),
            '/site/index' => array(array(array('_route' => 'app_site_index', '_controller' => 'App\\Controller\\SiteController::index'), null, null, null, false, null)),
            '/site/search' => array(array(array('_route' => 'app_site_search', '_controller' => 'App\\Controller\\SiteController::search'), null, null, null, false, null)),
            '/send-notification' => array(array(array('_route' => 'send_notification', '_controller' => 'App\\Controller\\SiteController::sendNotification'), null, null, null, false, null)),
            '/api/doc.json' => array(array(array('_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'), null, array('GET' => 0), null, false, null)),
            '/admin' => array(array(array('_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'), null, null, null, true, null)),
            '/admin/dashboard' => array(array(array('_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'), null, null, null, false, null)),
            '/admin/core/get-form-field-element' => array(array(array('_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'), null, null, null, false, null)),
            '/admin/core/append-form-field-element' => array(array(array('_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'), null, null, null, false, null)),
            '/admin/core/set-object-field-value' => array(array(array('_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'), null, null, null, false, null)),
            '/admin/search' => array(array(array('_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'), null, null, null, false, null)),
            '/admin/core/get-autocomplete-items' => array(array(array('_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'), null, null, null, false, null)),
            '/admin/app/category/list' => array(array(array('_route' => 'admin_app_category_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_list'), null, null, null, false, null)),
            '/admin/app/category/create' => array(array(array('_route' => 'admin_app_category_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_create'), null, null, null, false, null)),
            '/admin/app/category/batch' => array(array(array('_route' => 'admin_app_category_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_batch'), null, null, null, false, null)),
            '/admin/app/category/export' => array(array(array('_route' => 'admin_app_category_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_export'), null, null, null, false, null)),
            '/admin/app/tag/list' => array(array(array('_route' => 'admin_app_tag_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_list'), null, null, null, false, null)),
            '/admin/app/tag/create' => array(array(array('_route' => 'admin_app_tag_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_create'), null, null, null, false, null)),
            '/admin/app/tag/batch' => array(array(array('_route' => 'admin_app_tag_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_batch'), null, null, null, false, null)),
            '/admin/app/tag/export' => array(array(array('_route' => 'admin_app_tag_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_export'), null, null, null, false, null)),
            '/admin/app/comment/list' => array(array(array('_route' => 'admin_app_comment_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_list'), null, null, null, false, null)),
            '/admin/app/comment/create' => array(array(array('_route' => 'admin_app_comment_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_create'), null, null, null, false, null)),
            '/admin/app/comment/batch' => array(array(array('_route' => 'admin_app_comment_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_batch'), null, null, null, false, null)),
            '/admin/app/comment/export' => array(array(array('_route' => 'admin_app_comment_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_export'), null, null, null, false, null)),
            '/admin/app/post/list' => array(array(array('_route' => 'admin_app_post_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_list'), null, null, null, false, null)),
            '/admin/app/post/create' => array(array(array('_route' => 'admin_app_post_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_create'), null, null, null, false, null)),
            '/admin/app/post/batch' => array(array(array('_route' => 'admin_app_post_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_batch'), null, null, null, false, null)),
            '/admin/app/post/export' => array(array(array('_route' => 'admin_app_post_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_export'), null, null, null, false, null)),
            '/admin/app/user/list' => array(array(array('_route' => 'admin_app_user_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_list'), null, null, null, false, null)),
            '/admin/app/user/create' => array(array(array('_route' => 'admin_app_user_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_create'), null, null, null, false, null)),
            '/admin/app/user/batch' => array(array(array('_route' => 'admin_app_user_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_batch'), null, null, null, false, null)),
            '/admin/app/user/export' => array(array(array('_route' => 'admin_app_user_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_export'), null, null, null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/site/post(?'
                        .'|category/([^/]++)(*:37)'
                        .'|/([^/]++)(*:53)'
                    .')'
                    .'|/admin/(?'
                        .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:125)'
                        .'|app/(?'
                            .'|c(?'
                                .'|ategory/([^/]++)/(?'
                                    .'|edit(*:168)'
                                    .'|delete(*:182)'
                                    .'|show(*:194)'
                                .')'
                                .'|omment/([^/]++)/(?'
                                    .'|edit(*:226)'
                                    .'|delete(*:240)'
                                    .'|show(*:252)'
                                .')'
                            .')'
                            .'|tag/([^/]++)/(?'
                                .'|edit(*:282)'
                                .'|delete(*:296)'
                                .'|show(*:308)'
                            .')'
                            .'|post/([^/]++)/(?'
                                .'|edit(*:338)'
                                .'|delete(*:352)'
                                .'|show(*:364)'
                            .')'
                            .'|user/([^/]++)/(?'
                                .'|edit(*:394)'
                                .'|delete(*:408)'
                                .'|show(*:420)'
                            .')'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:462)'
                        .'|wdt/([^/]++)(*:482)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:528)'
                                .'|router(*:542)'
                                .'|exception(?'
                                    .'|(*:562)'
                                    .'|\\.css(*:575)'
                                .')'
                            .')'
                            .'|(*:585)'
                        .')'
                    .')'
                    .'|/notifications/([^/]++)(?'
                        .'|(*:621)'
                        .'|/mark(?'
                            .'|_as_(?'
                                .'|seen/([^/]++)(*:657)'
                                .'|unseen/([^/]++)(*:680)'
                            .')'
                            .'|AllAsSeen(*:698)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            37 => array(array(array('_route' => 'app_site_postcategory', '_controller' => 'App\\Controller\\SiteController::postcategory'), array('slug'), null, null, false, null)),
            53 => array(array(array('_route' => 'app_site_post', '_controller' => 'App\\Controller\\SiteController::post'), array('title'), null, null, false, null)),
            125 => array(array(array('_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'), array('_format'), null, null, false, null)),
            168 => array(array(array('_route' => 'admin_app_category_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_edit'), array('id'), null, null, false, null)),
            182 => array(array(array('_route' => 'admin_app_category_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_delete'), array('id'), null, null, false, null)),
            194 => array(array(array('_route' => 'admin_app_category_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_show'), array('id'), null, null, false, null)),
            226 => array(array(array('_route' => 'admin_app_comment_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_edit'), array('id'), null, null, false, null)),
            240 => array(array(array('_route' => 'admin_app_comment_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_delete'), array('id'), null, null, false, null)),
            252 => array(array(array('_route' => 'admin_app_comment_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.comment', '_sonata_name' => 'admin_app_comment_show'), array('id'), null, null, false, null)),
            282 => array(array(array('_route' => 'admin_app_tag_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_edit'), array('id'), null, null, false, null)),
            296 => array(array(array('_route' => 'admin_app_tag_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_delete'), array('id'), null, null, false, null)),
            308 => array(array(array('_route' => 'admin_app_tag_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.tag', '_sonata_name' => 'admin_app_tag_show'), array('id'), null, null, false, null)),
            338 => array(array(array('_route' => 'admin_app_post_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_edit'), array('id'), null, null, false, null)),
            352 => array(array(array('_route' => 'admin_app_post_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_delete'), array('id'), null, null, false, null)),
            364 => array(array(array('_route' => 'admin_app_post_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.post', '_sonata_name' => 'admin_app_post_show'), array('id'), null, null, false, null)),
            394 => array(array(array('_route' => 'admin_app_user_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_edit'), array('id'), null, null, false, null)),
            408 => array(array(array('_route' => 'admin_app_user_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_delete'), array('id'), null, null, false, null)),
            420 => array(array(array('_route' => 'admin_app_user_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'admin_app_user_show'), array('id'), null, null, false, null)),
            462 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            482 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            528 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            542 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            562 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            575 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            585 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
            621 => array(array(array('_route' => 'notification_list', '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction'), array('notifiable'), null, null, false, null)),
            657 => array(array(array('_route' => 'notification_mark_as_seen', '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction'), array('notifiable', 'notification'), null, null, false, null)),
            680 => array(array(array('_route' => 'notification_mark_as_unseen', '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction'), array('notifiable', 'notification'), null, null, false, null)),
            698 => array(array(array('_route' => 'notification_mark_all_as_seen', '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction'), array('notifiable'), null, null, false, null)),
        );
    }
}
