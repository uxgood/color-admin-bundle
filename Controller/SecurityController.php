<?php

/*
 *
 */

namespace UxGood\Bundle\ColorAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller used to manage the application security.
 */
class SecurityController extends Controller
{
	/**
	 * @Route("/login")
	 * @Method("GET")
	 */
	public function loginAction(Request $request)
	{
		$helper = $this->get('security.authentication_utils');
		if ($this->getUser()) {
			return $this->redirectToRoute("uxgood_admin_coloradmin_index");
		}
		return $this->render('@UxGoodColorAdmin/security/login_v2.html.twig', array(
			// last username entered by the user (if any)
			'username' => $helper->getLastUsername(),
			// last authentication error (if any)
			'error' => $helper->getLastAuthenticationError(),
			'target_path' => $request->getSession()->get('_security.secured_area.target_path'),
		));
	}

	/**
	 * This is the route the login form submits to.
	 *
	 * But, this will never be executed. Symfony will intercept this first
	 * and handle the login automatically. See form_login in app/config/security.yml
	 *
	 * @Route("/login_check")
	 */
	public function loginCheckAction()
	{
		throw new \Exception('This should never be reached!');
	}

	/**
	 * This is the route the user can use to logout.
	 *
	 * But, this will never be executed. Symfony will intercept this first
	 * and handle the logout automatically. See logout in app/config/security.yml
	 *
	 * @Route("/logout")
	 */
	public function logoutAction()
	{
		throw new \Exception('This should never be reached!');
	}
}
