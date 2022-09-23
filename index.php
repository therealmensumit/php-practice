<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link data-minify="1" rel="stylesheet" href="https://rivenox.com/wp-content/cache/min/1/ajax/libs/Swiper/8.3.2/swiper-bundle.css?ver=1662380853">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url("images/bg.svg");
            /* background-image: url("images/endless-constellation.svg"); */
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: 100% top;
            background-attachment: fixed;
            /* color: #fff; */
        }
        .swiper-scrollbar {
            background: #2F0465;
        }
        section.main-slider .container {
            padding: 0px 120px;
        }
        section.main-slider .swiper-container{
            overflow-x: clip;
        }
        .swiper-scrollbar-drag{
        height: 10px;
        width: 100%;
        position: relative;
        background: white;
        border-radius: 0px;
        top: -3px;
        box-shadow: 0 0 5px 1px rgba(0,0,0, .3);
        }
        .swiper-horizontal > .swiper-scrollbar, .swiper-scrollbar.swiper-scrollbar-horizontal {
            position: relative;
            bottom: -26px;
        }
        .swiper-container-horizontal > .swiper-scrollbar{
            width: 75%;
            left: 0;
            right: 0;
            margin: 0 auto;
        }
        section.main-slider .card {
            background: #D9D9D930;
            text-align: center;
            padding: 30px 26px;
            /*height: auto;*/
            min-height: 100%;
            border-radius: 15px;
            cursor: pointer;
        }
        .card h2 {
            font-size: 34px;
            font-weight: 700;
            line-height: 34px;
            letter-spacing: 0em;
            color: #FFD055;
        }
        .card p {
            font-size: 14px;
            font-weight: 500;
            line-height: 26px;
            letter-spacing: 0em;
        }
        .swiper-scrollbar-drag {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
        error_reporting(0); 
        include "config.php";
        $query = "SELECT * FROM `user_detail` ;";
    
        // FETCHING DATA FROM DATABASE
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $name = $row["Name"];
                echo $name;
            //   echo "Name: " . $row["Name"]. " Age: " .$row["Age"]. " Number: ".$row["Number"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        
    ?>
    <?php
        $data1 = 'sumit card is here...All set to launch..';
        $data2 = 'gurjinder card is here...All set to launch..';
        $data3 = 'shubham card is here...All set to launch..';
        $card = array();
        $card[] = '<div class="card my-2 border-0 shadow">
                            <img src="images/nature.jfif" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <p class="card-text">' . $data1 . '</p>
                                <a href="#" class="btn btn-dark btn-sm">Click Here</a>
                            </div>
                        </div>';
        $card[] = '<div class="card my-2 border-0 shadow">
                            <img src="images/tiger.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <p class="card-text">' . $data2 . '</p>
                                <a href="#" class="btn btn-dark btn-sm">Click Here</a>
                            </div>
                        </div>';
        $card[] = '<div class="card my-2 border-0 shadow">
                    <img src="images/coding.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <p class="card-text">' . $data3 . '</p>
                        <a href="#" class="btn btn-dark btn-sm">Click Here</a>
                    </div>
                </div>';
    ?>

    <p class="text-center">
        <strong>
            <?php
                $date = date("d-m-Y");
                echo $date;
            ?>
        </strong>
    </p>

    <section class="py-4">
        <div class="container">
            <div class="row">
                <?php foreach ($card as $cards) { ?>
                    <div class="col-md-4">
                        <?php echo $cards; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>
                        <?php
                        // Odd Even 
                        $number = 5;
                        if ($number % 2) {
                            echo "$number is Odd Number";
                        } else {
                            echo "$number is Even Number";
                        }
                        // readfile ("config.php");
                        ?>
                    </h3>
                    <form class="mb-3" action="" method="get">
                        <div class="inp mb-2">
                            <input type="text" name="text" id="name" value="" placeholder="Type a number" />
                        </div>
                        <div class="inp">
                            <input type="button" name="button" id="btn" value="Go" />
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <?php
                        $x = 7;
                        for ($i = 1; $i <= 10; $i++) {
                            $z = $x * $i;
                            echo "$x x $i = $z <br>";
                        }
                        // prime number
                        /* $prime_number = 10;
                        $coun = 0;
                        for( $i=1; $i<=$prime_number/2; $i++ ){
                            if( ($prime_number % $i) == 0 ) {
                                $coun++;
                            }
                            if( $coun < 3 ){
                                echo "$prime_number is a Prime Number ";
                            } else {
                                echo "$prime_number is not a Prime Number ";
                            }
                        } */
                    ?>
                </div>
                <div class="col-md-4">
                    <form method="get" action="">
                        <input type="text" name="name" >
                        <input type="submit" name="submit" value="submit">
                    </form>
                    <?php
                        $strg = "sumit";
                    
                        // echo strrev($strg);
                        for( $i=(strlen($strg)-1); $i>=0; $i--  ){
                            // echo $strg[$i];
                        }
                        $ab=$_REQUEST['name'];
                        // this.preventDefault();
                        ?>
                        <p> <?php echo $ab;?></p>
                   
                    <p id="string"></p>
                    <?php
                        $color = "red";
                        /* switch ($color) {
                            case "red":
                                echo "Hello";
                                break;
                            case "green":
                                echo "Welcome";
                                break;
                            default;
                                echo "Bye";
                        } */
                        $prt = 1;
                            // while($prt < 4){
                            //     echo $prt++.'<br>';
                            // }
                            
                            // do{
                            //     echo $prt++;
                            // } 
                            // while($prt < 2);
                            
                            // setcookie("username", "John", time() + (86400 * 30), "/");

                            // $i = 1;
                            // $j = 5;
                            // do {
                            //     echo $i * $j."<br>";
                            //     $i++;
                            // }
                            // while( $i < 11 )
                            // $a = 1;
                            // while ($a <= 10) {
                            //     echo $a."<br>";
                            //     $a++;
                            // }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php                        
                        $number = 13;
                        function primeCheck($number){
                            if ($number == 1)
                            return 0;
                            for ($i = 2; $i <= $number/2; $i++){
                                if ($number % $i == 0) {
                                    return 0;
                                }
                            }
                            return 1;
                        }
                        $flag = primeCheck($number);
                        if ($flag == 1) {
                            echo "$number is a Prime Number";
                        } else {
                            echo "$number is Not a Prime Number";
                        }
                    ?>
                </div>
                <div class="col-md-4">
                    <form method="post" action="">  
                        <label>Enter First Number:  </label>
                        <input type="number" name="number1" /><br><br>  
                        <label>Enter Second Number:  </label>
                        <input type="number" name="number2" /><br><br>  
                        <input  type="submit" name="submit" value="Subtract">  
                    </form>  
                    <?php
                        if(isset($_POST['submit'])) {
                            $number1 = $_POST['number1'];
                            $number2 = $_POST['number2'];
                            $sum =  $number1-$number2;
                            echo "The difference of $number1 and $number2 is: ".$sum;
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
        $slider_slides = '<div class="swiper-slide card">
                            <div class="content">
                                <h2>Innovation</h2>
                                <p>We love innovation but only when it leads to enhancement or progression. We look to how Web3.0 can fix existing problems and how company business models can evolve with IoT, Blockchain, NFTs, DAO and the endless possibilities new technology is presenting</p> 
                            </div>
                        </div>';
    ?>
    <section class="py-5 main-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12 swiper-container">
                    <div class="swiper-wrapper">
                        <?php for($x=0; $x<9; $x++){ ?>
                            <?php echo $slider_slides ?>
                        <?php } ?>
                        </div>
                    <div class="swiper-scrollbar js-swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->
    <script data-minify="1" src="https://rivenox.com/wp-content/cache/min/1/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js?ver=1662380853"></script>
    <script>
        document.getElementById('btn').addEventListener('click', function() {
            // document.getElementById('string').innerHTML = "<?php #echo $strg; ?>";
            var name = document.getElementById('name').value;
            if( name == '' ){
                document.getElementById('name').style.border = "1px solid red";
                return false;
            } else {
                document.getElementById('name').style.border = "1px solid #000";
                document.getElementById('string').innerHTML = name;
            }
        });
        document.getElementById('string').addEventListener('mouseover', function(){
            this.style.color = "red";
        });
        var mySwiper = new Swiper('.swiper-container', {
            freeMode: true,
            spaceBetween: 20,
            scrollbar: {
                el: '.js-swiper-scrollbar',
                draggable: true,
                snapOnRelease: false
            },
            breakpoints: { 

                768: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 50,
            },
            1300: {
                slidesPerView: 2.5,
                spaceBetween: 50,
            },
            // 2540: {
            //     slidesPerView: 1,
            //     centeredSlides: true,
            //     spaceBetween: 30,
            // },      
            },
        });
    </script>

</body>

</html>
