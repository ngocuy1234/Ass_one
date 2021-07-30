<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</head>
<style>
    .wrap{
        width: 1300px;
        max-width: 100%;
        margin :auto;
        margin-top:40px;
    }

    .btn-success a{
        text-decoration: none;
        color : #ffff;
    }
</style>

<body>
    <div class="wrap">
        <h3 style="text-align: center;">Quản lý khách hàng đăng ký</h3>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Date</th>
                        <th>Product</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once "../config/open_close_sql.php";
                    $sql = "SELECT * FROM DATA_CUSTOMER";
                    // echo "<pre>";
                    // var_dump(set_array($sql));
                    // echo "</pre>";
                    $customer_list = set_array_data($sql);
                    $index = 1;
                    foreach ($customer_list as $key) {
                        echo '<tr>
                                 <td>'.$index++.'</td>
                                 <td>'.$key['USER_NAME'].'</td>
                                 <td>'.$key['EMAIL'].'</td>
                                 <td>'.$key['PASSWORD'].'</td>
                                 <td>'.$key['DATE'].'</td>
                                 <td>'.$key['PRODUCT'].'</td>
                                 <td><button class="btn btn-warning">Edit</button></td>
                                 <td><button class="btn btn-danger">Delete</button></td>  
                              </tr>';
                    };
                    ?>
                </tbody>
            </table>
            <button style="margin-left:50px" class="btn btn-success"><a href="/ASS_PHP/register.html">Add customer</a></button>
        </div>
    </div>
</body>

</html>