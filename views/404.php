<?php include('components/html5.inc.php')?>
<div class="container-fluid page404">
    <div class="row h-50">
        <div class="col-12 d-flex align-items-center">
            <h1 class="m-auto align-self-center">Page don`t exsist: </h1>
            <h1 class="m-auto align-self-center text-danger">error 404</h1>
        </div>
        <div class="col-12 d-flex align-items-center">
            <a class="btn btn-success" href="/" >Go back to main page!</a>
    </div>
    </div>
</div>


<?php
echo '<pre>';
// print_r($_POST);
// echo '<pre>';
// print_r($_SERVER);
print_r($url);
print_r($subUrl);
var_dump(count($subUrl));

?>