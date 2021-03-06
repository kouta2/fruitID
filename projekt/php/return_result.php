<?php
require_once('query.php');

class ReturnResult {
	public function resultArr($query) {		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://198.199.84.154:9200/fruit-index/_search');
		//curl_setopt($ch, CURLOPT_POSTFIELDS, '{ "fields" : ["name"], "query": { "query_string" : {"default_field" : "description", "query": "' . $query . '" } } }');
		//curl_setopt($ch, CURLOPT_POSTFIELDS, '{ "fields" : ["name"], "query": { "query_string" : {"default_operator" : "AND", "default_field" : "description", "fuzziness" : 2, "analyzer" : "remove", "query": "' . $query . '" } } }');
		curl_setopt($ch, CURLOPT_POSTFIELDS, '{ "fields" : ["name"], "query": { "query_string" : {"default_field" : "description", "fuzziness" : 2, "analyzer" : "remove", "query": "' . $query . '" } } }');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec ($ch);
		curl_close ($ch);
		
		$arr = array();
		
		$json_form = json_decode($result, true);
		
		//echo $json_form['hits']['total'];
		//print_r($json_form['hits']['hits'][0]);
		
		for ($i = 0; $i < min(10, $json_form['hits']['total']); ++$i) {		// at most 7 results
			foreach($json_form['hits']['hits'][$i]['fields']['name'] as $key => $value) {
				//array_push($arr, $json_form['hits']['hits'][$i]['fields']['name']);
				//echo $json_form['hits']['hits']['name'];
				//echo $key . "    " . $value . "\n";
				array_push($arr, $value);
			}
		}
		
		return $arr;
	}
}

?>