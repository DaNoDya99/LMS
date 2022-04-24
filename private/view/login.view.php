<?php $this->view('includes/header') ?>

<div class=" container-fluid">
    <div class=" p-4 mx-auto shadow rounded" style="margin-top:250px; width:100%; max-width: 340px;">
    <h2 class=" text-center">My School</h2> 
    <img class="mx-auto d-block border border-dark rounded-circle " style="width: 100px;border: 2px solid !important;" src="assets/logo.png" alt="Logo">   
    <h3 class="my-2">Login</h3>
        <input class="my-2 form-control" type="email" name="email" placeholder="Email" autofocus>
        <input class="my-2 form-control" type="password" name="password" placeholder="Password">
        <div class=" text-center">
            <button class=" my-2 btn btn-primary">Login</button>
        </div>
    </div>
</div>

<?php $this->view('includes/footer') ?>

