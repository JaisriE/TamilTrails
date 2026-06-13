<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamil Trails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .title-bg{
            background-color:rgb(241, 205, 147);
            padding:4px 1px;
            width:92.5%;
            margin:auto;
            border-radius:5px;
        }
        table{
            max-width:1200px;
        }
    </style>
</head>
<body bgcolor="#FFEBE6">
<?php
if(isset($_GET['msg']) && $_GET['msg'] == 'loggedin'){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin:10px;">
  <strong>Welcome!</strong> You have successfully signed in.
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
}
?>
    <br>
    <center><h1><b>🍂Tamil Trails🍂</b></h1></center>
    <center><h2><i>History may be accurate, but archaeology is precise.</i></h2></center><hr>
    <center>
    <a href="index.php"><button>Home</button></a> |
    <a href="signIn.php"><button>Sign In</button></a> |
    <a href="signUp.php"><button>Sign Up</button></a> | 
    <a href="places.php"><button> More Archaeological Places</button></a>
    </center>
    <hr>
    <h3><b>About archaeological sites of Tamil Nadu</b></h3>
    <p>
        Tamil Nadu has a rich archaeological heritage that reveals an advanced and ancient civilization.
        Sites like Keeladi show evidence of urban settlements, drainage systems, and early Tamil writing.
        Adichanallur highlights ancient burial practices, while coastal sites like Poompuhar show trade with the Roman Empire.
        These discoveries prove that South India had a well-developed industrial and cultural society over 2,500 years ago.
    </p>
    <div class="container">
    <h3 class="title-bg text-center">Famous Archaeological Places</h3>
    <ol class="list-group list-group-numbered">
    <li class="list-group-item">Keeladi</li>
    <li class="list-group-item">Adichanallur</li>
    <li class="list-group-item">Korkai</li>
    <li class="list-group-item">Arikamedu</li>
    <li class="list-group-item">Poompuhar</li>
    </ol>
    </div>
    <hr>
    <h2><b>Top 5 Archaeological Places</b></h2>
    <table border="5" >
        <tr align="center">
            <th>Keeladi</th>
            <th>Adichanallur</th>
            <th>Korkai</th>
            <th>Arikamedu</th>
            <th>Poompuhar</th>
        </tr>
        <tr align="center">
            <td>
                <a href="keeladi.php"><img src="pic1.jpeg" width="180"></a>
            </td>

            <td>
                <a href="adichanallur.php"><img src="pic2.jpeg" width="180"></a>
            </td>

            <td>
                <a href="korkai.php"><img src="pic3.jpeg" width="180"></a>
            </td>

            <td>
                <a href="arikamedu.php"><img src="pic4.jpeg" width="180"></a>
            </td>

            <td>
                <a href="poompuhar.php"><img src="pic5.jpeg" width="180"></a>
            </td>
        </tr>
    </table>
    <hr><center>Click the picture to know more about that place!!!</center>
    <hr>
    <center>
        <h4>Contact info: tamiltrails@gmail.com</h4></center>
</body>
</html>
