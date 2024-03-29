<?php

if (isset($_POST['submit'])) {
    $start = $_POST['start_date'];
    $end = $_POST['end_date'];

    $start_date = date_create($start, timezone_open('Asia/Dhaka'));
    $end_date = date_create($end, timezone_open('Asia/Dhaka'));

    $differ_date = date_diff($start_date, $end_date);

    echo "<pre>";
    print_r($differ_date);
    echo "</pre>";
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Date Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-6 m-auto">
                <form method="POST">
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="datetime-local" name="start_date"  class="form-control" id="start_date" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="datetime-local" name="end_date" class="form-control" id="end_date">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
                </form>
                <div class="date_display d-flex">
                    <h2><?php echo $differ_date->y ?? '' ?> Year &nbsp; </h2>
                    <h2><?php echo $differ_date->m ?? '' ?> Months &nbsp;</h2>
                    <h2><?php echo $differ_date->d ?? '' ?> days &nbsp; </h2>
                </div>


                <div class="date_display d-flex">
                     <p>Hour : <?php echo $differ_date->h ?? '' ?>  &nbsp;</p>
                     <p>Minutes : <?php echo $differ_date->i ?? '' ?>  &nbsp;</p>
                     <p>Second : <?php echo $differ_date->s ?? '' ?>  &nbsp;</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>