<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * Undocumented function
     *
     * @Route("/")
     */
    public function Home()
    {

        return new Response(
           '<html>
                <body>
                    <h1>Home</h1> 
                    <br>
                    <a href="/lucky/number">What\'s your Lucky Number Today?</a>
                </body>
           </html>'
        );
    }
}
?>