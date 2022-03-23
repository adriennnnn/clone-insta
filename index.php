<?php
// include 'partials/header.php';
// include 'process/login.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="./style/style_index.css" rel="stylesheet">
<!--partie retour erreur -->
<?php
if (isset($_GET['Error'])) {?>
    <p class="alert alert-danger" role="alert"><?=$_GET['Error']?></p>
<?php } ?>
<div class="logo">
    <h1>InstaScam</h1>
</div>


<form action="./process/login.php" method="post">
    <div class="mb-6">
        <label for="Pseudo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
        <input type="email" name="Pseudo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required="">
    </div>
    <div class="mb-6">
        <label for="Password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
        <input type="password" name="Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
    </div>
        <p> <input type="checkbox" onclick="myFunctionVisibilityPassword()"> voir le mot  de passe</p>
        <div class="form-group">
            <p class="text-center">regarder mon vrai compte instagram <a href="https://www.instagram.com/adrthms/">en cliquant ici</a></p>
        </div>


        <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
    </div>

    </div>
        <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
</form>


<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div id="first">
                <div class="myform form ">
                    <div class="logo mb-1">
                        <div class="col-md-12 text-center">
                            <h2>Login</h2>
                        </div>
                    </div>
                    <form action="./process/login.php" method="post">
                        <div class="form-group">
                            <label for="Pseudo">Pseudo</label>
                            <input type="text" name="Pseudo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Password">Mot de passe</label>
                            <input type="password" name="Password" class="form-control" id="myInput">
                        </div>
                        <p> <input type="checkbox" onclick="myFunctionVisibilityPassword()"> voir le mot  de passe</p>

                        <div class="form-group">
                            <p class="text-center">regarder mon vrai compte instagram <a href="https://www.instagram.com/adrthms/">en cliquant ici</a></p>
                        </div>
                        <div class="col-md-12 text-center ">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./utils/index.js"></script>

<!-- </div> -->