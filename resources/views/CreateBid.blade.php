<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bikin merjinnya -->
     <style>
        div {
      margin-top: 10px;
      margin-bottom: 10px;
      margin-right: 20px;
      margin-left: 20px;
        }

        #navbar{
        background-color: #222831;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .logo img{
        height: 50px;
    }

    .profile img{
        height: 50px;
    }

    ul{
        color: #B67300;
        display: flex;
        height: 10vh;
        /* align-items: center; */
    }
    
    li{
        list-style: none;
        margin: 0 30px;
        font-size: 25px;
    }
    
    a{
        font-weight: bolder; 
        color: #B67300;
        text-decoration: none;
        display: flex;
        align-items: center;
    }

    a:hover{
        color: #7e5102
    }
    
    #hero-section{
        height: 70vh;
        background-color: white;
        background-size: cover;
        /* background-repeat: ; */
        display: flex;  
        justify-content: center;
        flex-direction: column;
        padding-left: 200px;
    }
    
    #picture-selection{
        float: right;
        padding: 10px;
        padding-top: 120px;
        padding-right: 250px;
    }
    
    #pre-selection{
        padding-left: 88px;
    }
        </style>

    <!-- Bikin Script diatas dulu -->
    <script>
    function timer_count(id, end){
        //  Set the date we are aounting down to
        var count_id = end;
        var countDownDate = new Date(count_id).getTime();

        // Update the count down every 1 seccond 
        var x = setInterval(function(){
            // get today's date and time
        var now = new Date().getTime();
        // Find the distance between now and the count down 
        var distance = countDownDate - now;
        // Time calculations for day, hours, minutes and seconds
        var days = Math.floor(distance/(1000 * 60 * 60 * 24));
        var hours = Math.floor((distance%(1000*60*60*24))/(1000*68*68));
        var minutes = Math.floor((distance%(1000*60*60))/(1000*60));
        var seconds = Math.floor((distance%(1000*60))/1000);
        // Output the result in an elemet with id="demo"
        document.getElementById(id).innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
        // If the count down over, write some text
        if(distance<0) {
            clearInterval(x);
            // dapatin id generik dari $Adds di php blade
            // var id="13";
            document.getElementById(id).innerHTML="Waktu Habis";
        }
        },1000);
    }
</script>

    </head>
    <body>
    <div id="navbar">
        <div class="logo">
            <img src="/assets/biddie.png" alt="FotoBeedie">
        </div>

          <div>
            <ul>
            <a href="/home"><li>Home</li></a>
            <a href="/create/saldo"><li>Isi Saldo</li></a>
            <a href="/create/bid"><li>Buy Item</li></a>
            <a href="/create/adds"><li>Sell Item</li></a>
            <a href="/about"><li>about us</li></a>
            </ul>
          </div>
            
          <!-- <div class="profile">
            <a href="/dashboard"><img src="/assets/profile.svg" alt=""></a>
          </div> -->
          
    </div>

<form action="{{route('StoreBid')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3">
<!-- Tampilin Saldonya -->
<?php
    use Carbon\Carbon;
    $time = Carbon::now();
    echo "Terakhir Login: $time";
    ?>
<a>Jumlah Saldo: {{$Saldo}}</a>
<h1>Menu Lelang</h1>
</div>
<div class="wrapper">
@foreach ($Adds as $Adds)
<!-- Show nama barang nya disini -->
<!-- <th scope="row"><a href="{{route('ShowAdds', $Adds->id)}}">{{$Adds->KategoriBarang}}</a></th> -->
<a><img src="{{asset('storage/image/' .$Adds->FotoBarang)}}" alt="FotoBarang" width="300" 
     height="200"></a>
<a><p>Nama: {{$Adds->NamaBarang}}</p></a>
<a><p>Harga Limit: {{$Adds->HargaLimit}}</p></a>
<a><p>Batas Waktu: </p></a>
<?php
    $date = date("Y/m/d");
    // bagian insert waktu sesuai dengan DB yang customer insert
    // $time = date('22:45:00');
    // $time = Adds::all('time_end');
    $time = date($Adds->time_end);
    $date_today = $date . ' ' . $time;
    ?>
    
    <script type="text/javascript">
    timer_count('demo-<?php echo $Adds->id; ?>', "<?php echo $date_today; ?>");
    </script>
    <?php 
    // idnya bikin generik id="demo-13"
    $id = $Adds->id;
    echo "<p id='demo-$id' style='font-size: 25px;'</p>";
    ?>
    <pre>{{$Adds->time}} {{$Adds->time_end}}</pre>
    <!-- - {{$Adds->time_end}} -->
    <br>
@endforeach
</div>

<!-- Input Nama Barangnya -->
<div class="mb-3">
<h2>Pilih Barang nya!</h2>
          <label for="NamaBarang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="NamaBarang" name="NamaBarang">
</div>

<!-- Bikin harga lelang nya yang bisa di input -->
<div class="mb-3">
          <label for="HargaLelang" class="form-label">Harga Lelang</label>
          <input type="text" class="form-control" id="HargaLelang" name="HargaLelang">
    <!-- Bikin Button simpan bid -->
    <br>
    <button type="submit" class="btn btn-primary">Simpan Data Bid</button>
    </div>

      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>