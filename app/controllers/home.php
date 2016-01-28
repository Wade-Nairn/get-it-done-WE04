<?php

# home.php

# 1. logic
AUTH::kickout('login');
AUTH::user();

$user = new User();


$projects = new Projects_Collection();
$projects->where(['deleted' => '0']);
$projects->where(['user_id' => AUTH::user_id()] );
$projects->get();

# 2. views

include VIEWS.'header.php';
include VIEWS.'main.php';
include VIEWS.'footer.php';