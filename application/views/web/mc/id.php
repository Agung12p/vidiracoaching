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
<div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $mc->img_header ?>);height: 60vh;">
    <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex align-items-center h-100">
            <div class="container">
                <div class="text-white">
                    <h1 class="text-center display-4"><strong>Money Coaching</strong> </h1>
                    <!-- <p style="font-size: medium;" class="text-left">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p> -->
                    <!-- <a class="btn btn-warning btn-lg" href="<?= base_url() ?>moneytype" role="button">Money Type Quiz</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<section class="text-black mb-0 mt-5 test">
    <?php
    $genap = 1;
    foreach ($feature1 as $key) { ?>
        <?php
        if ($genap % 2 == 0) { ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mt-2"><img src="<?= base_url() ?>assets/assets/img/<?= $key->img ?>" alt="" class="img-fluid"></div>
                    <div class="col-lg-6">
                        <h1 class="display-5"><?= $key->header ?></h1>
                        <p style="font-size: large ;" class="text-left mb-0"><?= $key->konten ?></p>
                        <button type="button" class="mt-3 text-center btn btn-lg btn-warning text-dark" data-toggle="modal" data-target=".bd-example-modal-lg">Polling Money Blocks</button>
                        <!-- <a href="<?= base_url() ?>id/contact" class="btn btn-outline-light px-5 rounded-pill shadow-sm mt-5 text-dark">LEARN MORE <i class="fas fa-check"></i></a> -->
                    </div>
                </div>
            </div>
        <?php  } else { ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-5"><?= $key->header ?></h1>
                        <p style="font-size: large;" class="text-left mb-0"><?= $key->konten ?></p>
                    </div>
                    <div class="col-lg-6 "><img src="<?= base_url() ?>assets/assets/img/<?= $key->img ?>" alt="" class="mt-5 pt-5 img-fluid"></div>
                </div>
            </div>
        <?php    } ?>
    <?php
        $genap++;
    } ?>
    <div class="bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $mc->bg ?>);height: auto;">
        <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex align-items-center h-100">
                <div class="container">
                    <div class="text-white">
                        <p style="font-size: 32px;" class="text-center mt-5"><?= $header_feature->header ?></p>
                        <h5 class="text-center display-6 mt-5"><strong><?= $header_feature->konten ?></strong> </h5>
                    </div>
                    <div class="row mt-5 mb-5">
                        <?php foreach ($feature2 as $key) { ?>
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2 mt-3">
                                                <img class="img-fluid" width="60px" src="<?= base_url() ?>assets/assets/img/<?= $key->img ?>" alt="" srcset="">
                                            </div>
                                            <div class="col-md-10">
                                                <p style="font-size: 20px;"><?= $key->header ?></p>
                                                <p style="font-size: 18px; " class="text-left mb-5"><?= $key->konten ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row h-100 ">
            <h1 class="display-3 text-center"><?= $header3->header ?></h1>
            <div class="col-lg-6 text-left mt-5 d-lg-block">
                <img src="<?= base_url() ?>assets/assets/img/<?= $header3->img ?>" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 mt-4">
                <p style="font-size: 20px; " class="text-left mb-0"><?= $header3->konten ?></p>
                <?php foreach ($feature3 as $key) { ?>
                    <div class="row ">
                        <div class="col-md-1 mt-3">
                            <img class="img-fluid" width="60px" src="<?= base_url() ?>assets/assets/img/<?= $key->img ?>" alt="" srcset="">
                        </div>
                        <div class="col-md-11">
                            <p style="font-size: 20px;" class=" text-left"><?= $key->header ?></p>
                            <p style="font-size: 16px;" class=" text-left"><?= $key->konten ?></p>
                        </div>
                    </div>
                <?php  } ?>
            </div>
            <div class="text-center text-dark mt-5">
                <h1>MULAI PERJALANAN ANDA DENGAN</h1>
            </div>
            <div class="text-center">
                <a href="<?= base_url() . $this->uri->segment(1) ?>/moneytype" class="btn btn-outline-warning px-5 rounded-pill shadow-sm mt-5 mb-5">FREE MONEY QUIZ</a>
            </div>
        </div>
    </div>
</section>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">POLLING MONEY MENTAL BLOCK</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form id="polling" action="<?= base_url() ?>main/polling" method="post">
                        <div class="form-group mb-1">
                            <input class="form-control form-control" name="nama" required type="text" title="Kami membutuhkan nama anda" placeholder="Siapa nama anda?">
                            <label for="name"></label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-group mb-1">
                            <input class="form-control form-control" name="email" type="email" placeholder="Alamat email">
                            <label for="email"></label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-group mb-1">
                            <input class="form-control form-control" name="phone" minlength="10" min="0" type="number" placeholder="Nomer Telepon/Whatsapp">
                            <label for="phone"></label>
                        </div>
                        <div class="row justify-content-center">
                            <h6 style="font-size: 18px;" class="text-center mb-5">Silahkan memilih Money Mental Block mana yang saat ini masih Anda miliki <br> (boleh memilih lebih dari satu):</h6>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata1" id="kata1" value="Saya tidak berani/layak punya income besar">
                                            Saya tidak berani/layak punya income besar
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata2" id="kata2" value="Saya tidak bisa menabung tiap bulan (uang selalu habis)">
                                            Saya tidak bisa menabung tiap bulan (uang selalu habis)
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata3" id="kata3" value="Uang tidak membawa bahagia/uang sumber masalah">
                                            Uang tidak membawa bahagia/uang sumber masalah
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata4" id="kata4" value="Cari uang itu susah/uang tidak tertarik dengan saya">
                                            Cari uang itu susah/uang tidak tertarik dengan saya
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata5" id="kata5" value="Saya tidak tahu/bisa/pintar atur uang">
                                            Saya tidak tahu/bisa/pintar atur uang
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata6" id="kata6" value="Uang/orang kaya itu jahat">
                                            Uang/orang kaya itu jahat
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata7" id="kata7" value="Uang gak perlu diatur/direncanakan, yang penting ada uang masuk">
                                            Uang gak perlu diatur/direncanakan, yang penting ada uang masuk
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata8" id="kata8" value="Saya tidak butuh uang">
                                            Saya tidak butuh uang
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata9" id="kata9" value="Kaya raya = bahagia/sukses">
                                            Kaya raya = bahagia/sukses
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata10" id="kata10" value="Tidak ada istilah cukup uang">
                                            Tidak ada istilah cukup uang
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata11" id="kata11" value="Saya harus pelit pada diri sendiri">
                                            Saya harus pelit pada diri sendiri
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="kata12" id="kata12" value="Orang mau berteman dengan saya hanya jika saya memiliki banyak uang">
                                            Orang mau berteman dengan saya hanya jika saya memiliki banyak uang
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-outline-warning text-dark ml-1">Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>