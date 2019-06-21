<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://fonts.googleapis.com/css?family=Mate+SC&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d5b5635716.js"></script>
    <style type="text/css">
        body {
            background-image: linear-gradient(0, #ABA77D, #F3EEB4);
            font-family: 'Mate SC', serif;
        }
         
        #title {
            font-size: 200%;
        }

        #nome-user{
            color: white;
        }

        #deslogar{
            color:red;
        }

        .conteudo {
            margin-top: 1em;
            font-size: 22px;
            line-height: 1.5;
            text-align: center;
            min-height: calc(80vh - 70px);
        }

        .conteudo p {
            margin: auto;
            text-align: justify;
        }

        #footer {
            background-color: grey;
            text-align: center;
        }

        #mail-left {
            text-align: right;
        }

        .social-networks li {
            display: inline-block;
        }

        .social-networks a {
            display: inline-block;
            width: 40px;
            height: 40px;
            text-indent: -9999px;
        }

        ul,
        li {
            list-style: none;
        }

        .mail {
            color: black;
        }

        .mail:hover {
            color: #480792;
        }

        .github {
            background-image: url(../img/github.png)
        }

        .linkedin {
            background-image: url(../img/linkedin.png)
        }

        .delete {
            color: red;
        }

        .edit {
            color: black;
        }

        .align {
            text-align: center;
        }
    </style>

    <link rel="icon" href="<?php echo base_url("images/enco.png"); ?>">
    <title>Wikia</title>
</head>

<body>

</body>

</html>