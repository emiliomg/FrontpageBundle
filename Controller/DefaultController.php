<?php

namespace EmilioMg\FrontpageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $text = $this->container->getParameter('emiliomg_frontpage.text');
        $title = $this->container->getParameter('emiliomg_frontpage.title');

        $text = preg_replace('/#([^#]*)#/', '<span class="emphasis">$1</span>', $text);

        if ($title === false) {
            $title = strip_tags($text);
        }

        return $this->render(
            'EmilioMgFrontpageBundle:Default:index.html.twig',
            array(
                'title' => $title,
                'text' => $text,
            )
        );
    }
}
