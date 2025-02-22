<?php
    include_once("config.php");

    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $d_birth = $_POST["d-birth"];
    $gender = $_POST["gender"];
    $cell_phone = $_POST["cell-phone"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $adress = $_POST["adress"];

    // Insert the data into the database
    $result = mysqli_query(
        $aConnection, "INSERT INTO t_users(
            email,
            password,
            name,
            `d-birth`,
            gender,
            `cell-phone`,
            city,
            state,
            adress
        ) values (
            '$email',
            '$password',
            '$name',
            '$d_birth',
            '$gender',
            '$cell_phone',
            '$city',
            '$state',
            '$adress'
        )"
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    fieldset label {
        cursor: pointer;
    }
</style>
<body>
    <div class="d-flex align-items-center justify-content-center bg-dark text-bg-dark p-lg-3 p-2">
        <form action="index.php" method="POST">
            <fieldset class="border border-2 p-1">
                <legend class="border border-2 p-1">Sign Up:</legend>
                <div class="border border-2 row row-cols-2 gx-2 m-0">
                    <div class="">
                        <label for="email" class="form-label mb-0">E-mail:</label>
                        <input type="email" id="email" name="email" class="input-group" required>
                    </div>
                    <div class="">
                        <label for="password" class="form-label mb-0">Password:</label>
                        <input type="password" id="password" name="password" class="input-group" required>
                    </div>
                </div>

                <div class="border border-2 p-1 row row-cols-2 gx-2 m-0">
                    <div>
                        <label for="name" class="form-label mb-0">Name:</label>
                        <input type="text" id="name" name="name" class="input-group" required>
                    </div>
                    
                    <div>
                        <label for="d-birth" class="form-label mb-0">Date of birth:</label>
                        <input type="date" id="d-birth" name="d-birth" class="input-group d-table" required>
                    </div>
                    
                    <div>
                        <header class="mt-1">Gender:</header>
                        <div class="row row-cols-1">
                            <label for="male" class="form-label m-0">
                                <input type="radio" id="male" name="gender" value="male" required>
                                Male
                            </label>
                            
                            <label for="female" class="form-label m-0">
                                <input type="radio" id="female" name="gender" value="female" required>
                                Female
                            </label>

                            <label for="other" class="form-label m-0">
                                <input type="radio" id="other" name="gender" value="other" required>
                                Other
                            </label>
                        </div>
                    </div>
                </div>
                <div class="border border-2 p-1 row row-cols-2 gx-2 m-0">
                    <div>
                        <label for="cell-phone" class="form-label mb-0">Cell phone:</label>
                        <input type="tel" id="cell-phone" name="cell-phone" class="input-group" required>
                    </div>
                    <div>
                        <label for="city" class="form-label mb-0">City:</label>
                        <input type="text" id="city" name="city" class="input-group" required>
                    </div>
                    <div>
                        <label for="state" class="form-label mb-0">State:</label>
                        <input type="text" id="state" name="state" class="input-group" required>
                    </div>
                    <div>
                        <label for="adress" class="form-label mb-0">Adress:</label>
                        <input type="text" id="adress" name="adress" class="input-group" required>
                    </div>
                </div>
                <input type="submit" id="submit" name="submit" class="mt-1 me-0 mb-0 ms-0">
            </fieldset>
        </form>
    </div>
</body>
</html>