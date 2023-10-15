<br><br><br><br>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92 "
    style="background-image: url('<?php echo base_url('assets/template/images/landingpage2.png') ?> ');">
    <h2 class="ltext-105 cl0 txt-center">
        Acara
    </h2>
    <h4 class="text-105 cl0 txt-center">Cigifarm Group</h4>
</section>
<div class="container my-5">
    <h3>Highlight Acara</h3>
    <div class="row acara-wrap my-3">
        <?php foreach ($acara as $acara) { ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-2">
            <!-- Adjust padding -->
            <div class="d-flex flex-column h-100">
                <div class="card-wrap border p-0 flex-fill">
                    <!-- Use flex-fill class -->
                    <div class="card-img">
                        <img src="<?php echo base_url('assets/template/images/comingsoon.jpg') ?>" alt="comingsoon">
                    </div>
                    <div class="card-desc">
                        <h5>
                            <?= $acara->name; ?>
                        </h5>
                        <p>
                            <?= $acara->date; ?>
                        </p>
                        <p>
                            <?php echo strlen($acara->description) > 100 ? substr($acara->description, 0, 100) . '...' : $acara->description; ?>
                        </p>
                        <a href="<?php echo base_url('acara/detail/' . $acara->id_acara) ?>"
                            class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>