<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="resources/css/style.css" media="screen" type="text/css"/>

<style>
    body {
        background: linear-gradient(to right, #FF7F50 , #FF7F50);
        min-height: 100vh
    }
    .navbar {
        background: #000000
    }

    .nav-item::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #FF7F50;
        transition: 0.4s
    }


    .nav-item:hover::after {
        width: 100%
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link,
    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: #FF7F50;
    }
    .navbar-brand {
        color: #FF7F50;
        font-family: 'Allerta Stencil', sans-serif;
        font-size: 27px

    }
    .all-show {
        z-index: 10
    }

    .nav-link {
        padding: 16px 1px;
        transition: 0.2s
    }

    body {
        background-color: white;
    }
    #logo{text-align: center; padding-top: 30px;}


    @import url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');

    body {
        background-color: #eee
    }

    .navbar-nav>li>a {
        text-transform: uppercase;
        font-size: 12px;
        margin-right: 20px;
        color: #fff
    }

    .navbar-toggler {
        padding: .20rem .50rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid white
    }

    .nav-link {
        color: #fff !important
    }

    .wrapper {
        width: 100%;
        position: absolute;
        height: 100%;
        background-color: #000;
        clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 71% 100%);
        transition: 1s all
    }

    .navbar-brand {
        color: #ffF;
        font-family: 'Allerta Stencil', sans-serif;
        margin-bottom: 4px;
        font-size: 27px
    }

    .navbar-red:hover .wrapper {
        clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 65% 100%)
    }

    .navbar-brand:hover {
        color: #fff
    }

    .navbar-red {
        background-color: red;
        color: #fff
    }

    .all-show {
        z-index: 10
    }
    .right_align
    {
        text-align: right;
        margin : 0px;
    }
    .right_align
    {
        text-align: right;
        margin : 0px;
    }
</style>




<nav class="navbar navbar-expand-lg navbar-red navbar-dark">
    <div class="wrapper"> </div>
    <div class="container-fluid all-show"> <a class="navbar-brand" >SEVEN
            <i class="fa fa-codepen"></i></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item"> <a class="nav-link" href="{{('/tableauDeBord')}}">Tableau de Bord</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{('/formulaireReservation')}}">Formulaire de réservation</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{('/service')}}">Service</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{('/profil')}}">Profil</a> </li>
            </ul>

        </div>
        <div >
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item right_align"> <a class="nav-link" href="{{('/login')}}">Déconnexion</a> </li>
            </ul>
        </div>
    </div>
</nav>


