<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controllder {

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		/** @var  $userGroup Entity\UserGroup */
        $userGroup = $this->em->getRepository('Entity\UserGroup')->find(1);

        $name  = '111';
        $email = '111@lattecake.com';

        /** @var  $userInfo Entity\User */
        $userInfo = $this->em->getRepository('Entity\User')->findOneBy([
            'username' => $name
        ]);

        if( $userInfo )
        {
            throw Doctrine\DBAL\Exception\NotNullConstraintViolationException::unknownColumnType("{$name} 已存在");
        }

		$user = new Entity\User;
		$user->setUsername($name);
		$user->setPassword($name);
		$user->setEmail($email);
		$user->setGroup($userGroup);

		// $this->em->persist($user);
		// $this->em->flush();
		$this->twig->render('welcome_message.html', [
            // 'user'   	=> $user,
            // 'userGroup' => $userGroup
        ]);
	}
}
