<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- import font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
    <title>Fuad Companies</title>
</head>
<style>
    header {
        background: url(https://images.alphacoders.com/123/1237512.jpg);
        background-size: cover;
        background-position: center;
        min-height: 1000px;
    }

    .section{
        padding-top: 4vw;
        padding-bottom: 4vw;
    }

    .tabs .indicator{
        background-color: rebeccapurple;
    }

    @media screen and (max-width: 670px){
        header{
            min-height: 500px;
        }
    }
</style>
<body>
    <!-- navbar -->
    <header>
        <nav class="nav-wrapper transparent">
            <div class="container">
                <a href="#" class="brand-logo">Si Fuad</a>

                <a href="" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="#photos">Photos</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#" class="btn tooltipped btn-floating btn -small black darken-4" data-tooltip="this is ig"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="btn tooltipped btn-floating btn -small black darken-4" data-tooltip="this is fb"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" class="btn tooltipped btn-floating btn -small black darken-4" data-tooltip="this is twt"><i class="fab fa-twitter"></i></a></li>
                </ul>
                
                <ul class="sidenav grey lighten-2" id="mobile-menu">
                    <li><a href="#">Photos</a></li>
                    <li><a href="#">Serivices</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- photo/grid -->
    <section class="container section scrollspy" id="photos">
        <div class="row">
            <div class="col s12 l4">
                <img src="https://images3.alphacoders.com/121/1219052.png" alt="" class="responsive-img materialboxed">
            </div>
            <div class="col s12 l6 offset-l1">
                <h2 class="light-blue-text text-darken-4">Omen</h2>
                <p>Sebuah bayangan dari memori, Omen berburu dalam bayang-bayang. Dia membuat musuh buta, berteleportasi melintasi lapangan, lalu membiarkan paranoia bertahan saat musuhnya mengacak untuk mengetahui di mana dia akan menyerang selanjutnya.</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l4 offset-l1 push-l7">
                <img src="https://preview.redd.it/jzuabaeotnk61.png?width=2560&format=png&auto=webp&s=fc44f4cc6f86d6b015bca46952e68c6223c96673" alt="" class="responsive-img materialboxed">
            </div>
            <div class="col s12 l6 offset-l1 pull-l5 right-align">
                <h2 class="light-blue-text text-darken-4">Skye</h2>
                <p>Hailing from Australia, Skye and her band of beasts trail-blaze the way through hostile territory. With her creations hampering the enemy, and her power to heal others, the team is strongest and safest by Skye's side.</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l4">
                <img src="https://images3.alphacoders.com/120/1202656.jpg" alt="" class="responsive-img materialboxed">
            </div>
            <div class="col s12 l6 offset-l1">
                <h2 class="light-blue-text text-darken-4">Kay/o</h2>
                <p>KAY/O is a machine of war built for a single purpose: neutralizing radiants. His power to suppress enemy abilities cripples his opponents' capacity to fight back, securing him and his allies the ultimate edge.</p>
            </div>
        </div>
    </section>

    <!-- parallax -->
    <div class="parallax-container">
        <div class="parallax">
            <img src="https://wallpapercave.com/wp/wp8730569.jpg" alt="" class="responsive-img">
        </div>
    </div>

    <!-- services / tabs -->
    <div class="section container scrollspy" id="services">
        <div class="row">
            <div class="col s12 l4">
                <h2 class="light-blue-text text-darken-4">Valorant</h2>
                <p>Padukan gaya dan pengalamanmu di panggung kompetitif global. Kamu diberi 13 ronde untuk menyerang dan mempertahankan sisimu dengan keahlian tembak-menembak sengit dan kemampuan taktis. Dengan satu nyawa per ronde, kamu harus berpikir lebih cepat daripada lawan jika ingin tetap hidup. Habisi musuh baik di mode Competitive maupun Tanpa Rank serta Deathmatch dan Spike Rush.</p>
            </div>
            <div class="col s12 l6 offset-l2">
                <ul class="tabs">
                    <li class="tab col s6">
                        <a href="#photography" class="active light-blue-text text-darken-4">Photography</a>
                    </li>
                    <li class="tab col s6">
                        <a href="#editing" class="active light-blue-text text-darken-4">editing</a>
                    </li>
                </ul>
                <div id="photography" class="col s12">
                    <p class="flow-text light-blue-text text-darken-4">Photography</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores obcaecati quae mollitia cupiditate ullam explicabo, veniam maiores repudiandae! Ad amet doloribus totam architecto accusantium similique id odit unde necessitatibus sapiente?</p>
                </div>
                <div id="editing" class="col s12">
                    <p class="flow-text light-blue-text text-darken-4">Editing</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores obcaecati quae mollitia cupiditate ullam explicabo, veniam maiores repudiandae! Ad amet doloribus totam architecto accusantium similique id odit unde necessitatibus sapiente?</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- parallax -->
    <div class="parallax-container">
        <div class="parallax">
            <img src="https://i.pinimg.com/originals/35/74/f4/3574f45ace5c3e34585bfbbbbdd3eadd.jpg" alt="" class="responsive-img">
        </div>
    </div>

    <!-- contact form -->
    <section class="section container scrollspy" id="contact">
        <div class="row">
            <div class="col s12 l5">
                <h2 class="light-blue-text text-darken-4">Get in touch</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti atque molestias praesentium dignissimos accusantium neque officia. Enim sit obcaecati cupiditate quis reiciendis mollitia quaerat, ipsa placeat quos nemo quisquam animi.</p>
            </div>
            <div class="col s12 l5 offset-l2">
                <form action="">
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="email" id="email">
                        <label for="email">Your email</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">message</i>
                        <textarea name="massage" class="materialize-textarea" id="" cols="20" rows="20"></textarea>
                        <label for="message">Your massage</label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="date" class="datepicker">
                        <label for="date">what date u need me...</label>
                    </div>
                    <div class="input-field">
                        <p>service required</p>
                        <p>
                        <label>
                            <input type="checkbox">
                            <span>Photography</span>
                        </label>
                        </p>
                    </div>
                    <div class="input-field">
                        <p>service required</p>
                        <p>
                        <label>
                            <input type="checkbox">
                            <span>Editing</span>
                        </label>
                        </p>
                    </div>
                    <div class="input-field">
                        <button class="btn">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="page-footer grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col s12 l6">
                    <h5>about me</h5>
                        <p>Dewandra <br>
                            Laki laki 22 tahun <br>
                            Berasal dari Malang, Jawa timur, Indonesia <br>
                            Status saat ini mahasiswa 
                        </p>
                </div>
                <div class="col s12 l4 offset-l2">
                    <h5>connect</h5>
                    <li><a href="#" class="grey-text text-lighten-3">Facebook</a></li>
                    <li><a href="#" class="grey-text text-lighten-3">Twiter</a></li>
                    <li><a href="#" class="grey-text text-lighten-3">Linked In</a></li>
                    <li><a href="#" class="grey-text text-lighten-3">Instagram</a></li>
                </div>
            </div>
        </div>
        <div class="footer-copyright grey darken-4">
            <div class="container center-align">&copy; 2022 photo Dewandra</div>
        </div>
    </footer>

    <!-- import JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.tabs').tabs();
            $('.scrollspy').scrollSpy();
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
        })
    </script>
</body>
</html>