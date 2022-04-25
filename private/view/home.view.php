<?php $this->view('includes/header') ?>
<?php $this->view('includes/navigation') ?>

        <div class="container-fluid">
            <h1><i class="fa fa-plus"></i> This is home page.</h1>
        </div>

        <?php
            echo "<pre>";
            print_r($rows);
        ?>
<?php $this->view('includes/footer') ?>