<?php

namespace Translate;

use GuzzleHttp\Client;

class Translator {
    private $client;

    public function __construct() {
        $this->client = new Client(['verify' => false, 'headers' => ['Content-Type' => 'application/json']]);
    }

    public function translate($text, $sourceLanguage, $targetLanguage) {
        // Paramètres de la requête
        $params = [
            'client' => 'gtx',
            'sl' => $sourceLanguage,
            'tl' => $targetLanguage,
            'dt' => 't',
            'q' => $text,
            'ie' => 'UTF-8',
            'oe' => 'UTF-8',
            'format' => 'json',
        ];

        // Effectuer la requête HTTP GET vers l'API de Google Translate
        $response = $this->client->get('https://translate.googleapis.com/translate_a/single', [
            'query' => $params
        ]);

        // Extraire le contenu de la réponse
        $data = json_decode($response->getBody(), true);

        // Vérifier si la traduction a réussi
        if (isset($data[0][0][0])) {
            return $data[0][0][0];
        } else {
            // En cas d'erreur, retourner le texte d'origine avec un message d'erreur
            return "Erreur de traduction : " . $text;
        }
    }
}
