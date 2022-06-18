<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    div {
  margin-top: 10px;
  margin-bottom: 10px;
  margin-right: 20px;
  margin-left: 20px;
    }
    </style>

</head>
<body>
    <table class="table">
    <thread>
        <tr>
        <th scope="col">History Bid</th>
        </tr>
    </thread>
    <tbody>
    @foreach ($Bid as $Bid)
        <tr>
            <td>{{$Bid->NamaBarang}}</td>
            <td>{{$Bid->HargaLelang}}</td>
        </tr>
        @endforeach

    </tbody>
    </table>
    <a href="/create/bid" >back</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>