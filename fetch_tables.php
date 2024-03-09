<?php
session_start();
include('unset.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="css/global1.css" rel="stylesheet">
    <link href="css/loader.css" rel="stylesheet">
    <link href="css/sweetalert2.css" rel="stylesheet">
</head>
<body onLoad="myFunction()" style="margin:0; background-image:url(img/diamonds.png) !important;">

<!-- Header -->
<div class="container-fluid bg">
    <?php include('header.php'); ?>
    <br>

    <?php if (!isset($_GET['btnsearch'])): ?>
        <div class="">
            <div class="card-header text-center text-black"><h1>ENTER SYMPTOM HERE</h1></div>
            <br>
            <div class="col-lg-5 mx-auto">
                <form role="form" action="" class="form-container" method="get">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Symptoms:</span>
                        </div>
                        <select multiple class="form-control" name="search[]">
                            <option value="Difficulty speaking">Difficulty speaking</option>
                            <option value="Severe headache with no known cause">Severe headache with no known cause</option>
                            <option value="Weakness">Weakness</option>
                            <option value="weight loss"> Weight Loss</option>
                            <option value="cramps">Cramps</option>
                            <option value="Rectal bleeding">Rectal Bleeding</option>
                            <option value="fatigue">Fatigue</option>
                            <option value="stomach pain">Stomach Pain</option>
                            <option value="discomfort">Discomfort</option>
                            <option value="Nausea">Nausea</option>
                        </select>
                    </div>
                    <br>
                    <span><small> The results are based on: <code> Stroke, Diabetes, Athritis, Heart Disease, Migraines, Bladder Cancer, Prostate Cancer, Lung Cancer, Long Cancer, Cervical Cancer</code> </small></span>
                    <input type="submit" name="btnsearch" value="Enter " class="btn btn-primary btn-block btn-lg">
                </form>
            </div>
        </div>
    <?php endif; ?>

    <?php
    include('connection.php');

    if (isset($_GET['btnsearch'])) {
        $keywords = $_GET['search'];
        ?>
        <div class="text-center text-black"><h2>Select Your Symptom</h2></div>
        <br>
        <div id="loader"></div>
        <?php
        $sql_get = mysqli_query($db, "SELECT table_name FROM mohc_tables ");
        while ($row_tables = mysqli_fetch_array($sql_get)) {
            $values = $row_tables['table_name'];
            $search = mysqli_query($db, "SELECT * FROM $values WHERE Match(symptom) Against('+" . implode(' +', $keywords) . "' IN NATURAL LANGUAGE MODE)  ");

            unset($_SESSION['output']);

            while ($result = mysqli_fetch_assoc($search)) {
                if (mysqli_num_rows($search) >= 1) {
                    ?>
                    <div class="col-lg-7 mx-auto">
                        <a class="page-link badge badge-pill badge-dark"
                           href='<?php echo "algorithim.php?value=$values"; ?>' ><h
                                    class="text-white"><?php
                                $output = $result['symptom'];
                                $_SESSION['output'] = $output;
                                echo $output;
                                ?></h></a><br>
                    </div>
                <?php
                }
            }
        }

        if ($_SESSION['output'] == "") {
            echo "no results found try again specifying ";
        }
    }
    ?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.0.0.js"></script>
<script src="js/sweetalert2.js"></script>

<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>

</body>
</html>
