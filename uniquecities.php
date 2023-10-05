<?php

require __DIR__ . '/data.php';

$uniqueCities = array_unique(array_column($teams, 'city'));

$uniqueCitiesCount = count($uniqueCities);

echo "Unique Cities: $uniqueCitiesCount";
