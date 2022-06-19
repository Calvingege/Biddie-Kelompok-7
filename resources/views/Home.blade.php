<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    
    </head>
    <body>
    <div id="navbar">
        <div class="logo">
            <img src="assets/Biddie.png" alt="FotoBeedie">
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
    <div id="picture-selection">
        <img src="/assets/shopping.png" alt="" style="width: 100%; height: 300px" class="floatRight">
    </div>  

    <div id="hero-section">
            <h1>Welcome to Biddie</h1>
        <!-- <div id="pre-selection"> -->
            <h3>
                digital-based auction
            </h3>
        <!-- </div> -->
        <a href="/register"><p style="color: blue">register here!</p></a>
    </div>

</body>
</html>
