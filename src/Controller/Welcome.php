<?php
// src/Controller/Welcome.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Welcome extends AbstractController
{
     /**
      * @Route("/")
      */
    public function welcome()
    {
        $number = random_int(0, 100);

        /*return new Response(
            '<html><body>Welcome. '.$number.'</body></html>'
        );*/
		
		return $this->render('welcome.twig');
    }
}