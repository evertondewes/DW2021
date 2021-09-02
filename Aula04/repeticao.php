<?php
for ($i = 0; $i < 5; ++$i) {
    if ($i == 2) {
        continue;
    }
    echo "$i <br>";
}

$i = 0;
while ($i < 5) {
    if ($i == 2) {
        ++$i;
        continue;
    }
    echo "$i <br>";
    ++$i;
}