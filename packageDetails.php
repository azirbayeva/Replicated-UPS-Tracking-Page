<!DOCTYPE html>

<html>
	<head>
		<title>Shipping Details</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tracking site</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/uikit.min.css">
        <link rel="stylesheet" href="css/style.css">
	</head>
	<body class="container">
    <?php
    /**
     * Make Sure We are coming to this page only via POST method;
     */
    $error = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('mySqlConnect.php');

        // Make sure trackingCode is passed from index.php and is not empty.
        if(empty($_POST['trackingCode'])){
            $error = $error . '<h3 class="p-0 m-0"><li class="my-2">You forgot to enter your tracking number.</l1></h3>';
        }else{
            $tracking_number = $_POST['trackingCode'];
            $query_for_package = "SELECT * FROM Package WHERE tracking_number = '$tracking_number'";
            $run = mysqli_query($dbConnection, $query_for_package);

            $count = mysqli_num_rows($run);
            //Make sure we found packge with given tracking number
            if ($count > 0) {
                $package_info = mysqli_fetch_assoc($run);

                $sender_id = $package_info['sender_id'];
                $query_for_sender = "SELECT * FROM ADDRESS WHERE address_id = $sender_id";
                $run = mysqli_query($dbConnection, $query_for_sender);
                $sender_info = mysqli_fetch_assoc($run);

                $receiver_id = $package_info['receiver_id'];
                $query_for_receiver = "SELECT * FROM ADDRESS WHERE address_id = $receiver_id";
                $run = mysqli_query($dbConnection, $query_for_receiver);
                $receiver_info = mysqli_fetch_assoc($run);
                $package_delivered_on = "Not Yet";
                if ($package_info["delivered_on"] != null) {
                    $package_delivered_on = $package_info["delivered_on"];
                }
                echo '
                <div class="bgcstm">
                <div class="container">
                    <div class="mainbody">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card p-3 mt-5">
                                    <ul class="list-unstyled mb-0">
                                        <h3 class="p-0 m-0"> Sent From: </h3>
                                        <li class="my-2">Name : '.$sender_info["first_name"].' '.$sender_info["last_name"].'</li>
                                        <li class="my-2">City : '.$sender_info["city"].'</li>
                                        <li class="my-2">Email : '.$sender_info["email_id"].'</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card p-3 mt-5">
                                    <ul class="list-unstyled mb-0">
                                        <h3 class="p-0 m-0"> Sent To:</h3>
                                        <li class="my-2">Name : '.$receiver_info["first_name"].' '.$receiver_info["last_name"].'</li>
                                        <li class="my-2">City : '.$receiver_info["city"].'</li>
                                        <li class="my-2">Email : '.$receiver_info["email_id"].'</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="card p-3 mt-5">
                                    <ul class="list-unstyled mb-0">
                                        <h3 class="p-0 m-0"> Package Information</h3>
                                        <li class="my-2">Created On : '.$package_info["created_on"].'</li>
                                        <li class="my-2">Status : '.$package_info["status"].'</li>
                                        <li class="my-2">Delivered On : '.$package_delivered_on.'</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } else {
                $error = $error . '<h3 class="p-0 m-0"><li class="my-2"> '.$tracking_number.' not found !!!.</li></h3>';
            }
        }

        if(!empty($error)) {
            $error = $error .  '<h3 class="p-0 m-0"><li class="my-2"> Try Again !!!</li></h3>';
            echo '
            <div class="bgcstm">
                <div class="container">
                    <div class="mainbody">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="card p-3 mt-5">
                                    <ul class="list-unstyled mb-0">
                                    '.$error.'
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
        mysqli_close($dbConnection);//Close the db connection
    }
    ?>
    

    </body>
</html>