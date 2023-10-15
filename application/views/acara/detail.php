<br><br><br><br>
<div class="container">
    <div class="wrap-detail">
        <h2 class="text-center font-weight-bold">
            <?= $acara['name']; ?>
        </h2>
        <div class="img-banner">
            <img src="<?php echo base_url('assets/upload/image/acara/' . $acara['banner']) ?>" alt="banner"
                alt="comingsoon">
            <div class="desc-banner">
                <div class="content-banner">
                    <span>Tanggal</span>
                    <p>
                        <?= $acara['date']; ?>
                    </p>
                </div>
                <div class="content-banner">
                    <span>Waktu</span>
                    <p>
                        <?= $acara['time']; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="desc-detail">
            <div class="content-detaill">

                <?= $acara['content'] ?>
            </div>
            <div class="wrap-btn">
                <a href='<?= $acara['register_url']; ?> ' target='_blank' class="register-button">
                    Daftar
                </a>
            </div>
        </div>

    </div>
</div>