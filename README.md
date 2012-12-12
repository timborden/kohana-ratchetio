# Ratchet.io API Wrapper Library for Kohana 3.2.x

application/bootstrap.php:

    Ratchetio::init(array(
        'access_token' => Kohana::$config->load('ratchetio.server_side_token'),
        'environment' => $_SERVER['KOHANA_ENV'],
        'root' => DOCROOT,
        'person_fn' => 'function_here'
    ), FALSE, FALSE);
