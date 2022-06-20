<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

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
        height: 50vh;
        background-color: white;
        background-size: cover;
        /* background-repeat: ; */
        display: flex;  
        justify-content: center;
        flex-direction: column;
        padding-left: 3px;
        font-size: 18px;
    }
        </style>
    
    </head>
    <body>
    <div id="navbar">
        <div class="logo">
            <img src="/assets/biddie.png" alt="">
        </div>

          <div>
            <ul>
            <a href="/home"><li>Home</li></a>
            <a href="/create/bid"><li>Buy Item</li></a>
            <a href="/create/adds"><li>Sell Item</li></a>
            <a href="/about"><li>about us</li></a>
            </ul>
          </div>
          
    </div>
    <!-- <div id="picture-selection">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="../assets/online-auction-4.23.jpg" alt="ini gambar" style="width: 300px; height: 300px" class="floatRight">
    </div>   -->

    <div id="hero-section">
        <h2>About Us</h2>
        <p>
		Biddie adalah platform lelang yang dilakukan secara online, menggunakan rekening bersama sehingga menjamin transaksi secara aman. Selain itu Biddie menggunakan sistem lelang tanpa uang muka.
        <br>
        <br>
        Sistem lelang menggunakan rekening bersama sehingga menjamin keamanan transaksi
        sebagian besar orang yang masih takut untuk mengikuti lelang secara online dikarenakan belum ada platform khusus di Indonesia yang menyediakan lelang.
        <br>
        <br>
        Dalam platform kami, semua pengguna bisa melakukan lelang barang apa saja asalkan barang tersebut bersifat legal untuk diperjual belikan. Seperti pakaian, mainan, barang elektronik, kendaraan, dan lain-lain.
		</p>
		
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>