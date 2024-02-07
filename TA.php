<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#V1").load("cekV1.php");
                $("#kodisi1").load("cekkodisi1.php");
            }, 1000);
        });
    </script>
</head>
<style>
    body {
        background: #181424;
        color: white;
    }

    .Tulisan {
        display: block;
        text-align: center;
    }

    table.table1 {
        margin-left: 30%;
        background-color: #413e3e;
        padding-top: 50px;
        padding-bottom: 50px;
        border-radius: 20px;
    }
</style>

<body>
    <h1 class="Tulisan">Monitoring PLN</h1>
    <div class="isi">
        <table class="table1" style="text-align: center;" border="0" width="500px" height="150px">
            <thead>
                <tr>
                    <th scope="colno">No</th>
                    <th scope="coluser">User</th>
                    <th scope="colkondsisi">Kondisi</th>
                    <th scope="coltegangan">Tegangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Rian</td>
                    <td><span id="kodisi1">text</span></td>
                    <td><span id="V1">0</span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Albert</td>
                    <td><span id="kodisi2">text</span></td>
                    <td><span id="V2">0</span></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Xin</td>
                    <td><span id="kodisi3">text</span></td>
                    <td><span id="V3">0</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>