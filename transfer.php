<!Doctype html>
<html>

<head>
    <title>Tranfer-amount-page</title>


    <?php
    include("history.php");
    error_reporting(0);
    ?>

    <style>
        body {
            background-image: url(https://static.vecteezy.com/system/resources/previews/000/580/917/non_2x/abstract-template-black-frame-layout-metallic-red-light-on-dark-background-futuristic-technology-concept-vector.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {
            background-color: #008CBA;
        }

        /* Blue */
        .button2 {
            background-color: #008CBA;
        }

        /* Blue */
    </style>


</head>

<body>
    <?php
    $query = "SELECT * FROM user";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    ?>
    <center>


                <div class="panel-heading myclass">
                    <p class="panel-title">

                        <p style="font-size: 32px; color:white">TRANSFER CREDENTIALS<br><b><br></p>
                        <br>
                </div>
                <br>
                <form class="form-group" action="payment.php" method="post">
                    <?php
                    $query = "SELECT name FROM user";
                    $data = mysqli_query($conn, $query);
                    ?>
    
                    <label for="from">
                        <p style="font-size: 32px; color:white">Select User From:
                    </label>
    
                    <select class="form-control" name="from">
                        <option value="null">---Select---</option>
                        <?php
                        while ($result = mysqli_fetch_array($data)) {
                            echo "<option value='" . $result['name'] . "'>" . $result['name'] . "</option>";
                        }
                        ?>
                    </select>
                
    
                <?php
                $query = "SELECT name FROM user";
                $data = mysqli_query($conn, $query);
    
                ?>
                <div class="col-sm-6 no-gutter">
                    <label for="to">
                        <p style="font-size: 32px; color:white">Select User To:
                    </label>
                    <select class="form-control" name="to">
                        <option value="null">---Select---</option>
                        <?php
                        while ($result = mysqli_fetch_array($data)) {
                            echo "<option value='" . $result['name'] . "'>" . $result['name'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
    
                <div class="col-sm-6">
                    <label for="amount_transfer">
                        <p style="font-size: 32px; color:white">Credits:
                    </label>
                    <input class="form-control" type="number" name="amount_transfer" min=1 autocomplete="off">
                </div>
                <br>
                <div class="col-sm-6 nopadding">
                    <br>
                    <div class="buttons" align="center">
                        <button type="submit" class="button button2" name="submit" value="submit">Transfer credits</button>
                        <button class="button button1"><a href="index.html">Back</a></button>
                    </div>
                </div>
                
                
            </form>
        </div>
    </center>
</body>

</html>