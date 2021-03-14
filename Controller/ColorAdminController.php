<?php

namespace UxGood\Bundle\ColorAdminBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ColorAdminController extends Controller
{
    /**
     * @Route("/")
     */ 
    public function indexAction()
    {
        return $this->render('@UxGoodColorAdmin/color-admin/index.html.twig');
    }

    /**
     * @Route("/pages/{name}")
     */ 
    public function pagesAction($name, Request $request)
    {
        return $this->render("@UxGoodColorAdmin/color-admin/pages/$name");
    }

	/**
	 * @Route("/login_v2")
     */
    public function loginAction(Request $request)
	{
		$helper = $this->get('security.authentication_utils');
		return $this->render('@UxGoodColorAdmin/color-admin/login_v2.html.twig', array(
			// last username entered by the user (if any)
			'username' => $helper->getLastUsername(),
			// last authentication error (if any)
			'error' => $helper->getLastAuthenticationError(),
			'target_path' => $request->getSession()->get('_security.secured_area.target_path'),
		));
	}
}
