<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        // le client Ajax qui utilise axios pour faire une requête sur encode.php et recevoir des données.
        axios.get("../encode_decode/encode.php").then(response => console.log(response.data));
    </script>
</head>
regarde dans console

<body>
</body>

</html>