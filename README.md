# Ratchet.io API Wrapper Library for Kohana 3.2.x

application/bootstrap.php:

	Ratchetio::init(array(
	    'access_token' => Kohana::$config->load('ratchetio.server_side_token'),
	    'host' => '', // optional
	    'environment' '', // optional
	    'root' => DOCROOT, // optional
	    'person_fn' => '' // optional
	), FALSE, FALSE);