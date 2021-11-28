<?php

$array = [
    'test' => 123123,
    'qwerty' => 'qqqq',
    'data' => [
        1, 2, 3,
    ],
    'q' => [
        'w' => [1, 2],
        'r' => [1, 2],
    ],
];

$count = 0;
function countArray(array $array, int $count): int
{
    foreach ($array as $item) {
        if (is_array($item)) {
            $count += countArray($item, $count);
        } else {
            $count++;
        }
    }

    return $count;
}

echo countArray($array, $count);

$html = '';
function renderArray(array $array, string $html): string
{
    foreach ($array as $item) {
        if (is_array($item)) {
            $html .= renderArray($item, $html);
        } else {
            $html .= $item;
        }
    }

    return $html;
}

echo '<pre>' . renderArray($array, $html) . '</pre>';
//var_dump(fibonacci(7),$counter);

