<html>
<head>
    <style>
        table {
            background:#fafafa ;
        }

        tr:nth-child(odd) {
            background:green;
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
   echo "<tr><td>". $dados[$i][0] . "</td><td>". $dados[$i][1] ."</td></tr>";
}
?>
</table>
</body>
</html>

<?php
