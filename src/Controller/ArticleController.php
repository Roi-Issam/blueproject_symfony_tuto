<?php
/**
 * Created by PhpStorm.
 * User: Issam
 * Date: 14/03/2018
 * Time: 23:06
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Ma premiere page');
    }


    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show one space article: %s',
            $slug
            ));
    }
}