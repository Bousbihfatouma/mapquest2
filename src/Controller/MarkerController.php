<?php

namespace App\Controller;


use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class MarkerController extends AbstractController
{
    #[Route('/marker', name: 'app_marker')]
    public function index(): Response
    {
        return $this->render('marker/index.html.twig', [
            'controller_name' => 'MarkerController',
        ]);
    }
    #[Route('/api/markeurs', name: 'api_markeurs')]
public function getMarkeurs(Connection $connection, Request $request): JsonResponse
{
    $type = $request->query->get('type'); // Récupère le paramètre 'type' de la requête

    // Construis la requête SQL avec un filtre sur le type
    $query = "SELECT * FROM markeur WHERE type = :type";
    $parameters = ['type' => $type];

    // Exécute la requête et récupère les résultats
    $markeurs = $connection->fetchAll($query, $parameters);

    // Retourne les marqueurs en tant que réponse JSON
    return new JsonResponse($markeurs);
}



}
     
   
