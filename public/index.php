<?php 

# index.php

# Defie the comon folders we will be using s constants 
define('APP', '../app/');
define('LIBRARIES', APP.'libraries/');
define('MODELS', APP.'models/');
define('VIEWS', APP.'views/');
define('CONTROLLERS', APP.'controllers/');

# Load libraries
require_once LIBRARIES.'auth.lib.php';
require_once LIBRARIES.'cart.lib.php';
require_once LIBRARIES.'collection.lib.php';
require_once LIBRARIES.'config.lib.php';
require_once LIBRARIES.'database.lib.php';
require_once LIBRARIES.'email.lib.php';
require_once LIBRARIES.'form.lib.php';
require_once LIBRARIES.'image.lib.php';
require_once LIBRARIES.'input.lib.php';
require_once LIBRARIES.'model.lib.php';
require_once LIBRARIES.'route.lib.php';
require_once LIBRARIES.'sticky.lib.php';
require_once LIBRARIES.'upload.lib.php';
require_once LIBRARIES.'url.lib.php';
require_once LIBRARIES.'xss.lib.php';

# load models
require_once MODELS.'user.model.php';
require_once MODELS.'projects.model.php';
require_once MODELS.'projects.collection.php';

require_once MODELS.'task.model.php';
require_once MODELS.'tasks.collection.php';

# load helpers and routes
require_once APP.'helpers.php';
require_once APP.'routes.php';
