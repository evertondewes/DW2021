<html>
<head>
    <style>
        .par {
            background:#fafafa ;
        }
        .impar {
            background:lightgray;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
    </tr>
<?php
$dados = [['Peter', 'Griffin'], ['Lois', 'Griffin' ], ['Everton', 'Dewes'], ['João', 'Silva']];

for($i=0; $i < count($dados); $i++){
    if($i % 2 == 0) {
        echo "<tr class='par'><td>". $dados[$i][0] . "</td><td>". $dados[$i][1] ."</td></tr>";
    } else {
        echo "<tr  class='impar'><td>". $dados[$i][0] . "</td><td>". $dados[$i][1] ."</td></tr>";
    }
}
?>
</table>
</body>
</html>

<?php
