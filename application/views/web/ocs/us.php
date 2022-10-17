<style>
    .border-right {
        border-right: 1px solid #ddd;
    }

    .borders {
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        margin: -1px;
    }

    .border-left {
        border-left: 1px solid #ddd;
    }

    .test {
        line-height: 1.5;
    }
</style>
<div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $ocs->img_header ?>);height: 60vh;">
    <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex align-items-center h-100">
            <div class="container">
                <div class="text-white">
                    <h1 class="text-center display-4"><strong>One-Coin Service</strong> </h1>
                    <!-- <p style="font-size: medium;" class="text-left">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p> -->
                    <!-- <a class="btn btn-warning btn-lg" href="<?= base_url() ?>moneytype" role="button">Money Type Quiz</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<section class=" text-black mb-0 test">
    <div class="container">
        <div class="row h-100 ">
            <div class="col-lg-6">
                <h1 class="display-4"><?= $ocs->feature ?></h1>
                <p style="font-size: large;" class="text-left mb-0"><?= $ocs->sub_feature ?></p>
                <a href="<?= base_url() ?>contact" class="btn btn-outline-warning px-5 rounded-pill shadow-sm mt-5 ">GET STARTED</a>
            </div>
            <div class="col-lg-6 mt-5 pt-5 d-lg-block"><img src="<?= base_url() ?>assets/assets/img/<?= $ocs->img_feature ?>" alt="" class="img-fluid"></div>
        </div>
        <hr>
    </div>
    <div class="bg-white py-5">
        <div class="container py-5">
            <div class="row">
                <?php
                $i = 0;
                foreach ($type as $data) {
                    $i++;
                ?>
                    <div class="col-md-4 border-right border-left">
                        <h2 class="display-6"><?= $data->header ?></h2>
                        <p style="font-size: large;" class="text-left mb-5"><?= $data->konten ?></p>
                        <?php
                        if ($i == 1) { ?>
                            <a href="<?= base_url() ?>financial-planning" class="btn btn-outline-light mt-5 text-warning">LEARN MORE</a>
                        <?php } elseif ($i == 2) { ?>
                            <a href="<?= base_url() ?>money-coaching" class="btn btn-outline-light mt-5 text-warning">LEARN MORE</a>
                        <?php } elseif ($i == 3) { ?>
                            <a href="<?= base_url() ?>eight-money-types" class="btn btn-outline-light mt-5 text-warning">LEARN MORE</a>
                        <?php }
                        ?>
                    </div>
                <?php } ?>
                <p class="text-center mt-5 pt-5" style="font-size: large;"> The Eight Money Types and the Money Type Quiz are excerpted from the book Money Magic by Deborah L. Price © Copyright 2001 All rights reserved. Used with Permission.</p>
            </div>
        </div>
    </div>
</section>