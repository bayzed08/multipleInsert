<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="custom/js/jquery-editable-select.min.js"></script>
    <link rel="stylesheet" href="custom/css/jquery-editable-select.min.css">
    <link rel="stylesheet" href="custom/css/index.css">

    <title>Multiple Insert</title>
    <?php
    include("db_connect.php");
    ?>
</head>

<body>
    <div class="container">
        <div class="row m-3">
            <h3>Multiple Insert to DB using jquery</h3>
        </div>

        <div class="row">
            <form action="" id="formData" class="col-md-8 myform m-3 p-4">
                <div class="row myrow">
                    <div id="playernamediv" class="form-group col-md-6">
                        <label for="pname">Player Name</label>
                        <input type="text" name="pname[]" id="pname">
                    </div>
                    <div class="form-group col-md-6">
                        <button id="addRowBtn" type="button" class="btn btn-info">Add Row</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country">
                </div>
                <div class="form-group">
                    <button type="submit" id="insertBtn" class="btn btn-primary">Insert Please</button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="border-responsive col-md-8 table-Area m-3 p-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Country</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="all.js"></script>
</body>

</html>