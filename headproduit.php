 <?php ini_set('session.save_path', 'C:\wampSERVER\tmp');
session_start();  ?>

       <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Site Metas -->
        <title>Projet</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="#" type="image/x-icon" />
        <link rel="apple-touch-icon" href="#" />

        <!-- Bootstrap CSS -->


                <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Pogo Slider CSS -->
        <link rel="stylesheet" href="css/pogo-slider.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">



<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 * {
        box-sizing: border-box;
}

body {
        font-family: Arial, Helvetica, sans-serif;

}

/* Float four columns side by side */





.card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        margin:10px;
        text-align: center;
        background-color: #f1f1f1;
        height:500px;
        width:310px;
}

.card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        height:60px;
}

.card button:hover {
        opacity: 0.7;
}
.card img{
        width:200px;
            height:200px;


}
.carddd img{
        width:300px;
        height:250px;

}
.card .desc {

    height:100px;

}

/* Fixed sidenav, full height */
.sidenav {
    height: 100%;
    width: 180px;
    position: fixed;
    z-index: 1;
    top: 80px;
    left: 0;
    background-color: #ffc107;
    overflow-x: hidden;
    padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 0px 8px 0px 16px;
    text-decoration: none;
    font-size: 15px;
    font-weight:bold;
    color: black;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;

}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
    color: grey;
}



/* Add an active class to the active dropdown button */
.sidenav .active {
    background-color: white;
    color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
    display: none;
    background-color:  #D3A008;
    color:#ffc107;
    padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 15px;}
}
.main{
       margin-left: 190px;

}
.sidenav.span{

background:white;
color:black;
}
.titrepage {
    position:relative;
    top:5px;
    text-align:center;
    font-size: 50px;
    word-break: break-all;

-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-image: -webkit-linear-gradient(left, red, orange, yellow, green, blue, indigo, violet);

}

.fa-eye,.fa-trash,.fa-edit,.fa-credit-card{

        color: white;
        font-size: 25px;
        padding-left: 10px;
        background:black;
}


    .form button{
    color:white;
    width:100%;

    }
    .img-responsivee {
            height:60%;
            width:100%;
    }



</style>
