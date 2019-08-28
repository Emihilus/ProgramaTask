<?php
// src/Controller/SuperNumberController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuperNumberController
{
     /**
      * @Route("/liczba")
      */
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Super number: '.$number.'</body></html>'
        );
    }
}