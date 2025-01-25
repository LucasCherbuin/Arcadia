<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\PagesController::accueil'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/HeaderFooter' => [[['_route' => 'HeaderFooter', '_controller' => 'App\\Controller\\HeaderFooterController::HeaderFooter'], null, ['GET' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PagesController::contact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/habitatVisiteur' => [[['_route' => 'app_habitat_visiteur', '_controller' => 'App\\Controller\\PagesController::habitatVisiteur'], null, ['GET' => 0], null, false, false, null]],
        '/serviceVisiteur' => [[['_route' => 'app_service_visiteur', '_controller' => 'App\\Controller\\PagesController::serviceVisiteur'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_menu', '_controller' => 'App\\Controller\\MenuController::admin'], null, ['GET' => 0], null, false, false, null]],
        '/employee' => [[['_route' => 'employee_menu', '_controller' => 'App\\Controller\\MenuController::employee'], null, ['GET' => 0], null, false, false, null]],
        '/veterinaire' => [[['_route' => 'veterinaire_menu', '_controller' => 'App\\Controller\\MenuController::veterinaire'], null, ['GET' => 0], null, false, false, null]],
        '/admin/animal' => [[['_route' => 'app_animal_index', '_controller' => 'App\\Controller\\AnimalController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/animal/new' => [[['_route' => 'app_animal_new', '_controller' => 'App\\Controller\\AnimalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/horaire' => [[['_route' => 'app_horaire_index', '_controller' => 'App\\Controller\\HoraireController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/horaire/new' => [[['_route' => 'app_horaire_new', '_controller' => 'App\\Controller\\HoraireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/avis' => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, false, false, null]],
        '/avis/new' => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], null, ['POST' => 0], null, false, false, null]],
        '/employee/employeeRepas' => [[['_route' => 'app_employeeRepas_new', '_controller' => 'App\\Controller\\EmployeeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/habitat' => [[['_route' => 'app_habitat_index', '_controller' => 'App\\Controller\\HabitatController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/habitat/new' => [[['_route' => 'app_habitat_new', '_controller' => 'App\\Controller\\HabitatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/veterinaire/RapportVeterinaire/new' => [[['_route' => 'app_veterinaire_new', '_controller' => 'App\\Controller\\VeterinaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/veterinaire/Commentaire' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\VeterinaireController::commentaire'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/consultation' => [[['_route' => 'app_consultation', '_controller' => 'App\\Controller\\DashboardController::consultation'], null, ['GET' => 0], null, false, false, null]],
        '/veterinaire/dashboardAnimal' => [[['_route' => 'app_dashboard_animal', '_controller' => 'App\\Controller\\DashboardController::dashboardAnimal'], null, ['GET' => 0], null, false, false, null]],
        '/admin/compteRendu' => [[['_route' => 'app_compte_rendu_veterinaire', '_controller' => 'App\\Controller\\DashboardController::compteRendu'], null, ['GET' => 0], null, false, false, null]],
        '/test-mailtrap' => [[['_route' => 'app_EmailTest', '_controller' => 'App\\Controller\\TestEmailController::testMailtrap'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'app_admin_create', '_controller' => 'App\\Controller\\AdminUtilisateurController::createAdmin'], null, null, null, false, false, null]],
        '/employee/serviceEdit' => [[['_route' => 'app_serviceEmployee_index', '_controller' => 'App\\Controller\\ServiceController::indexEmployee'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/habitatVisiteur/([^/]++)/animal(*:234)'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|animal/(?'
                            .'|(\\d+)(*:270)'
                            .'|(\\d+)/edit(*:288)'
                            .'|(\\d+)/delete(*:308)'
                        .')'
                        .'|horaire/(?'
                            .'|(\\d+)(*:333)'
                            .'|(\\d+)/edit(*:351)'
                            .'|(\\d+)/delete(*:371)'
                        .')'
                    .')'
                    .'|vis/(?'
                        .'|(\\d+)(*:393)'
                        .'|(\\d+)/edit(*:411)'
                        .'|(\\d+)/delete(*:431)'
                    .')'
                .')'
                .'|/([^/]++)/validate(*:459)'
                .'|/employee/(?'
                    .'|employeRepas/(\\d+)(*:498)'
                    .'|serviceEdit/(\\d+)/edit(*:528)'
                .')'
                .'|/a(?'
                    .'|dmin(?'
                        .'|/(?'
                            .'|habitat/(?'
                                .'|(\\d+)(*:569)'
                                .'|(\\d+)/edit(*:587)'
                                .'|(\\d+)/delete(*:607)'
                            .')'
                            .'|service/(?'
                                .'|(\\d+)(*:632)'
                                .'|(\\d+)/delete(*:652)'
                            .')'
                            .'|utilisateur/(?'
                                .'|(\\d+)(*:681)'
                                .'|(\\d+)/edit(*:699)'
                                .'|(\\d+)/delete(*:719)'
                            .')'
                        .')'
                        .'|Success/([^/]++)(*:745)'
                    .')'
                    .'|nimal/click/([^/]++)(*:774)'
                .')'
                .'|/service/(\\d+)/edit(*:802)'
                .'|/veterinaire/RapportVeterinaire/(\\d+)(*:847)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        234 => [[['_route' => 'app_animal_visiteur', '_controller' => 'App\\Controller\\PagesController::animalVisiteur'], ['id'], ['GET' => 0], null, false, false, null]],
        270 => [[['_route' => 'app_animal_show', '_controller' => 'App\\Controller\\AnimalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        288 => [[['_route' => 'app_animal_edit', '_controller' => 'App\\Controller\\AnimalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'app_animal_delete', '_controller' => 'App\\Controller\\AnimalController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        333 => [[['_route' => 'app_horaire_show', '_controller' => 'App\\Controller\\HoraireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_horaire_edit', '_controller' => 'App\\Controller\\HoraireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        371 => [[['_route' => 'app_horaire_delete', '_controller' => 'App\\Controller\\HoraireController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        393 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        431 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        459 => [[['_route' => 'app_avis_validate', '_controller' => 'App\\Controller\\AvisController::validate'], ['id'], null, null, false, false, null]],
        498 => [[['_route' => 'app_employeeRepas_show', '_controller' => 'App\\Controller\\EmployeeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        528 => [[['_route' => 'app_serviceEmployee_edit', '_controller' => 'App\\Controller\\ServiceController::editEmployee'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        569 => [[['_route' => 'app_habitat_show', '_controller' => 'App\\Controller\\HabitatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        587 => [[['_route' => 'app_habitat_edit', '_controller' => 'App\\Controller\\HabitatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        607 => [[['_route' => 'app_habitat_delete', '_controller' => 'App\\Controller\\HabitatController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        632 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        652 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        681 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        699 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        719 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        745 => [[['_route' => 'app_admin_success', '_controller' => 'App\\Controller\\AdminUtilisateurController::success'], ['id'], null, null, false, true, null]],
        774 => [[['_route' => 'animal_click', '_controller' => 'App\\Controller\\PagesController::incrementClick'], ['id'], null, null, false, true, null]],
        802 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        847 => [
            [['_route' => 'app_veterinaire_show', '_controller' => 'App\\Controller\\VeterinaireController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
