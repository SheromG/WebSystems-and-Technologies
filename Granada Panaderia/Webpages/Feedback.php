<?php
        $rate = $_POST['rate'];
        $feedback = $_POST['feedback'];
        $message = "Remarks: $rate\r\nFeedback: $feedback\r\n\r\n";

        $myfile = fopen("../Feedback/feedback.txt", "a");
        fwrite($myfile, $message);
        fclose($myfile);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="../index.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../Media/Granada.svg">
    <style>
        .page
        {
            font-size: 50px;
            padding:1px;
            text-align:center;
            color:tan;
            font-family:"Courier New" ;
            margin-bottom: -5%;
        }
        .paper
        {
            border-radius: 30px;
            border: 2.5px solid #ffffff;
            margin-left: 5%;
            margin-right: 5%;
            width:90%;
            height:300px;
            background:tan;
        }
        .info
        {
            margin-top: -30px;
            color:#ffffff;
            font-size: 150%;
            font-family:"Courier New" ;
            font-weight: bold;
        }
        .info p
        {
            font-size: 150%;
            margin: -2px;
            margin-top: 60px;
            margin-bottom: 30px;
        }
        #submit
        {
            font-family:"Courier New" ;
            color: white;
            background-color: transparent;
            font-size: 150%;
            border: 2px solid #ffffff;
        }
        #submit:hover
        {
            background-color: white;
            color:black;
        }
        #submit:active 
        {
            transform: translateY(4px);
        }

    </style>
</head>
<body>
    <a href = "../index.html"><img class = "logo" src = "../Media/Granada.svg"></a>

    <div class = "page">
        <h1>FEEDBACK</h1>
    </div>
    <div class = "paper">
        <center>
            <table class = "info" width = "90%">
                <tr>
                    <th colspan = "15"><p>Thank you for your feedback.Your response has been received in our server. 
                            <br>We hope that you order again in Granada Panaderia, the best bakeshop in town.</p></th>
                </tr>
                <tr>
                    <td colspan = "15">
                        <center>
                                <a href = "../index.html"><input type="submit" id = "submit" value="Back to Home" name  ="submit"></a>
                        </center>
                </td>
                </tr>
        </table>
        </center>
    </div> 
</body>
</html>