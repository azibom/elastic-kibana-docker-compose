<?php

require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

//////////////////////// add data
// $params = array();
// $params['body']  = array(
//   'name' => 'Misty',
//   'age' => 13,
//   'badges' => 0,
//   'pokemon' => array(
//     'psyduck' => array(
//       'type' => 'water',
//       'moves' => array(
//         'Water Gun' => array(
//           'pp' => 25,
//           'power' => 40
//         )
//       ) 
//     )
//   ) 
// );

// $params['index'] = 'pokemon';
// $params['type']  = 'pokemon_trainer';
// $params['id'] = '1A-002';

// $result = $client->index($params);

////////////////////

$params['index'] = 'pokemon';
$params['type'] = 'pokemon_trainer';
$params['body']['query']['match']['age'] = 15;

$result = $client->search($params);
print_r($result);