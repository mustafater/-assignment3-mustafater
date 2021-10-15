<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
class LuckyController
{
   /**
     * @Route("/lucky/number" , name="index")
     */
    public function number(): Response
    {
        $n= random_int(0, 1000);
       
        return new Response(
            '<html><body>Lucky number: '.$n.'</body></html>'
        );
    }

    /**
     * @Route("/lucky/number/{id}", name="app_lucky_number")
     */
    public function parametre($id=null): Response
    {
        //$number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$id.'</body></html>'
        );
    }
    /**
     * @Route("/lucky/post/{id}" , methods={"get","HEAD"})
     */
    public function answerGet($id)
    {
        $sayi1=2131;
        $sayi2=2142;
        $sayi3=12312;
        return new JsonResponse(['message'=>$id,'sat1'=>$sayi2,
        'say2'=>$sayi2,'say3'=>$sayi3
    
    ]);
    }

    /**
     * @Route("/request",name="request_test")
     * @param RequestStack $requestStack
     */
    public function requestTest(RequestStack $requestStack){
        $request = $requestStack->getCurrentRequest();
        //var_dump($request);
        //exit();
        $key="name";
        $key2="name2";
        $coooki=$request->cookies->get($key,"number2");
        var_dump($coooki);
        
        return new Response(
            'bos döndürrr'
        );

    }

}








?>