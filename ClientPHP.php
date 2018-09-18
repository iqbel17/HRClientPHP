<?php
$sumber = 'http://localhost:9090/api/notes/';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Menampilkan data json</title>
        <style>
            table {
                width: 100%;
            }
            table tr td {
                padding: 1rem;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Region ID</th>
                <th>Region Name</th>
            </tr>
<?php
for ($a = 0; $a < count($data); $a++) {
    print "<tr>";
    // penomeran otomatis
    // menayangkan
    print "<td>" . $data[$a]['regionId'] . "</td>";
    print "<td>" . $data[$a]['regionName'] . "</td>";

    print "</tr>";
}
?>
        </table>
    </body>
</html>