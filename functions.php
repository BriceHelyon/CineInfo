<?php
    function pretty_print_r($var): void {
        echo '<pre>' . print_r($var, true) . '</pre>';
    };

    require_once('../Td-cinema/config/config.php');
    require_once('../Td-cinema/vendor/autoload.php');

    use GuzzleHttp\Client;

    function get_client() {
        $client = new Client([
            'verify' => false,
            'stream' => false,
        ]);
        return $client;
    }

    function make_request(Client $client,  string $url){
        $res = $client->get($url);
        return json_decode($res->getBody()->getContents());
    }

    function get_films() {
        $client = get_client();
        return make_request($client, request_start_url.'/movie/popular?'.key_API);
    }



    
    function verify_fims_id(){
        if (isset($_GET['film'])) {
            return get_film_by_id($_GET['film']);
            header('Location: http://td-cinema.test/details.php');
        }
    }

    





    function get_film_by_id(int $id) {
        $client = get_client();
        return make_request($client, request_start_url."/movie/$id?".key_API);
    }

    // pretty_print_r(get_film_by_id(476669)->backdrop_path);
    // pretty_print_r(get_film_by_id(476669)->title);
    // pretty_print_r(get_film_by_id(476669)->poster_path);
?>
  