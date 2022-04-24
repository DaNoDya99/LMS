<?php $this->view('includes/header') ?>

<div class=" container-fluid">
    <div class=" p-4 mx-auto shadow rounded" style="margin-top:100px; width:100%; max-width: 340px;">
    <h2 class=" text-center">My School</h2> 
    <img class="mx-auto d-block border border-dark rounded-circle " style="width: 100px;border: 2px solid !important;" src="assets/logo.png" alt="Logo">   
    <h3 class=" my-2">Add User</h3>
    <input class="my-2 form-control" type="firstname" name="firstname" placeholder="First Name" autofocus>
        <input class="my-2 form-control" type="lastname" name="lastname" placeholder="Last Name" autofocus>
        <input class="my-2 form-control" type="email" name="email" placeholder="Email" autofocus>
        <select class=" my-2 form-control">
            <option>--Select a Gender--</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        <select class=" my-2 form-control">
            <option value="">--Select a Rank--</option>
            <option value="student">Student</option>
            <option value="receptionist">Receptionist</option>
            <option value="lecturer">Lecturer</option>
            <option value="admin">Admin</option>
            <option value="super_admin">Super Admin</option>
        </select>
        <input class="my-2 form-control" type="text" name="password1" placeholder="Password">
        <input class="my-2 form-control" type="text" name="password2" placeholder="Retype Password">
        <div class=" text-center">
            <button class=" my-2 btn btn-primary">Add User</button>
            <button class=" my-2 btn btn-danger text-white">Cancel</button>
        </div>
    </div>
</div>

<?php $this->view('includes/footer') ?>