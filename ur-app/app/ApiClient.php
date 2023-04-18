<?php declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;

class ApiClient
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getInfo(string $inputCode)
    {
        $url = 'https://data.gov.lv/dati/lv/api/3/action/datastore_search';
        $query = [
            'q' => json_encode(['regcode' => $inputCode]),
            'resource_id' => '25e80bf3-f107-4ab4-89ef-251b5b9374e9'
        ];
        $response = $this->client->request('GET', $url, ['query' => $query]);
        $data = json_decode($response->getBody()->getContents());
        $records = $data->result->records;

        if (!empty($records)) {
            $record = $records[0];
            return $record;
        }

        return null;
    }
}
