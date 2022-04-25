<?php $this->view('includes/header') ?>
<?php $this->view('includes/navigation') ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1200px; margin-top: 20px">
    <?php $this->view('includes/cramp') ?>
    <div class=" row">
        <div class=" text-center col-sm-4 col-md-3">
            <img class=" rounded-circle" src="assets/male.png" alt="Male" style="width: 150px;">
            <h3 class=" my-3">Danodya Supun</h3>
        </div>
        <div class=" col-sm-8 col-md-9 bg-light p-2">
            <table class=" table table-hover table-bordered table-striped">
                <tr>
                    <th>First Name:</th>
                    <td>Danodya</td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td>Supun</td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td>Male</td>
                </tr>
                <tr>
                    <th>Created Date:</th>
                    <td>2022-10-13</td>
                </tr>
            </table>
        </div>
    </div>
    <hr class="mx-auto my-4" style=" border: none; border-top: 10px dotted grey; color:#fff;background-color: #fff; height:1px; width:10%;">
    <div class=" container-fluid">
        <ul class="nav nav-tabs">
            <li class=" nav-item">
                <a class=" nav-link" href="#">Basic Info</a>
            </li>
            <li class=" nav-item">
                <a class=" nav-link" href="#">Classes</a>
            </li>
            <li class=" nav-item">
                <a class=" nav-link" href="#">Tests</a>
            </li>
        </ul>
        <nav class=" my-2 navbar navbar-light bg-light">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</div>


<?php $this->view('includes/footer') ?>