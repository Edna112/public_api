<?php

header('Content-type: application.json');

echo json_encode([
    "email" => "chenwieddy@gmail.com",
    "current_datetime" => define('DATE_ISO8601', "Y-m-d\TH:i:sO"),
    "github_url" => "https://github.com/Edna112/public_api",
]);
