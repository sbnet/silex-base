<?php
/**
 * Controller.php
 *
 * User: steph_000
 * Date: 20/11/2017
 * Time: 09:19
 */

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Controller
 */
class Controller
{
    /**
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function index(Request $request, Application $app)
    {
        return $app['twig']->render('index.html.twig');
    }
}
