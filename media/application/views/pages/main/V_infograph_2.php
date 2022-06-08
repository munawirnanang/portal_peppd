<!-- author  : Muhamad Munawir Amin
Email        : muhamadmunawiramin@gmail.com
Last Update  : 15 March 2022 -->

<div class="container-md" style="margin-top: 7rem">

    <!-- <?php print_r($IndikatorTable); ?>
    <br />
    <br />
    <?php print_r($infograph); ?>
    <br>
    <br>
    <?php print_r($indikator); ?>
    <br>
    <br>
    <?php print_r($wilayah); ?>
    <br>
    <br>
    <?php print_r($graphperbandinganwilayah); ?> -->
    <div class="row">
        <div class="col-lg-4 order-lg-2 d-none d-lg-block">

            <!-- Section Search -->
            <div class="col-md-12">
                <section class="search">

                    <div class="card">
                        <div class="card-header">
                            <p style="font-family: 'Monda', sans-serif; font-size: 14px; margin: 0px;"><b>CARI...</b></p>
                        </div>
                        <form id="formSearchIndicator" method="get" action="<?php base_url('infograph') ?>">
                            <div class="card-body" style="height: 350px;">
                                <!-- <div class="form-group">
                                    <label for="category">Subject Category</label>
                                    <select class="form-control" id="selectCategory">
                                        <option>Sosial dan Kependudukan</option>
                                        <option>Ekonomi dan Perdagangan</option>
                                        <option>Pertanian dan Perdagangan</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-subject" style="display: none;">
                                    <label for="category">Subject</label>
                                    <select class="form-control" id="selectSubject">
                                        <option>-Pilih-</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label for="indikator">Indikator</label>
                                    <select class="form-control" class="selectIndikator" name="indikator">
                                        <?php foreach ($list_indikator as $list_ind) { ?>
                                            <option value="<?php echo $list_ind['nama_indikator'] ?>"><?php echo $list_ind['nama_indikator'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="wilayah">Wilayah</label>
                                    <select class="form-control" id="selectWilayah" name="wilayah">
                                        <option value="nasional">Nasional</option>
                                        <option value="provinsi">Provinsi</option>
                                        <option value="kabupatenkota">Kabupaten/ Kota</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-sub-wilayah" style="display: none;">
                                    <label for="sub-wilayah">Sub Wilayah</label>
                                    <select class="form-control" id="selectSubWilayah" name="subWilayah">
                                        <option>-Pilih-</option>
                                        <?php foreach ($list_provinsi as $list_p) { ?>
                                            <option value="<?php echo $list_p['id'] ?>"><?php echo $list_p['nama_provinsi'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group form-group-kabupaten-kota" style="display: none;">
                                    <label for="sub-wilayah">Kabupaten/ Kota</label>
                                    <select class="form-control" id="selectKabupatenKota" name="kabupatenkota">
                                        <option>-Pilih-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer" style="padding: 0.3rem 1.4rem 2.8rem 1rem;">
                                <button type="submit" style="padding: 0.5% 5%; float: right; font-size: 14px;" class="button-read-more btn-read-more-article">
                                    Cari <i class="fa fa-xs fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                </section>
            </div>
            <!-- End Section Search -->

            <!-- Section file -->
            <div class="col-md-12">
                <section class="file">

                    <div class="card">
                        <div class="card-header">
                            <p style="font-family: 'Monda', sans-serif; font-size: 14px; margin: 0px;"><b>FILE</b></p>
                        </div>
                        <div class="card-body">
                            <!-- list file -->
                            <div class="row" style="display: flex; align-items: center; margin-top: 10px; margin-bottom: 10px;">
                                <div class="col-10">
                                    <p style="font-family: 'Monda', sans-serif; font-size: 12px; margin: 0px;">Pertumbuhan Ekonomi Nasional 2022.xls</p>
                                </div>
                                <div class="col-2">
                                    <a type="button" style="padding: 3px 8px 3px 8px; float: right; font-size: 11px; margin-top: 0px;" class="button-read-more btn-read-more-article">
                                        <i class="fa fa-xs fa-download"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="display: flex; align-items: center; margin-top: 10px; margin-bottom: 10px;">
                                <div class="col-10">
                                    <p style="font-family: 'Monda', sans-serif; font-size: 12px; margin: 0px;">Pertumbuhan Ekonomi Daerah.xls</p>
                                </div>
                                <div class="col-2">
                                    <a type="button" style="padding: 3px 8px 3px 8px; float: right; font-size: 11px; margin-top: 0px;" class="button-read-more btn-read-more-article">
                                        <i class="fa fa-xs fa-download"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="display: flex; align-items: center; margin-top: 10px; margin-bottom: 10px;">
                                <div class="col-10">
                                    <p style="font-family: 'Monda', sans-serif; font-size: 12px; margin: 0px;">Perbandingan Pertumbuhan Ekonomi Nasional dan Daerah 2020-2025.xls</p>
                                </div>
                                <div class="col-2">
                                    <a type="button" style="padding: 3px 8px 3px 8px; float: right; font-size: 11px; margin-top: 0px;" class="button-read-more btn-read-more-article">
                                        <i class="fa fa-xs fa-download"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- end list file -->
                        </div>
                    </div>

                </section>
            </div>
            <!-- End Section file -->

        </div>
        <div class="col-lg-12 mt-3 d-lg-none">
            <div class="col-12">
                <div class="row">
                    <div class="col-6" data-toggle="modal" data-target="#exampleModal">
                        <div class="card p-1" id="menuSearch">
                            <div class="card-body">
                                <b>CARI...</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" data-toggle="modal" data-target="#exampleModal2">
                        <div class="card p-1" id="menuFile">
                            <div class="card-body">
                                <b>FILE</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 order-lg-1">
            <!-- Section Infograph -->
            <div class="col-md-12">
                <section class="infograph">

                    <div class="card">
                        <div class="card-body">

                            <div class="col-12 order-md-1">
                                <div class="card" style="border: 2px solid black; margin: 20px;">
                                    <div class="card-body" style="display: flex; padding: 0.5rem 0.5rem;">
                                        <div class="d-none d-md-block col-md-3 col-lg-3">
                                            <img class="w-100" src="<?= base_url(); ?>assets/images/img/icon_pemantauan/<?php echo strtolower(str_replace(" ", "_", $indikator)); ?>.jpg" alt="<?php echo $indikator ?>" />
                                        </div>
                                        <div class="col-12 col-md-9 col-lg-9" style="align-self: center; text-align: end;">
                                            <p style="font-family: 'Monda', sans-serif; font-size: 28px; margin: 0px;"><b><?php echo $IndikatorTable[0]['nama_indikator']; ?></b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 order-md-2">
                                <div class="card" style="border: 2px solid black; margin: 20px; margin-top: 40px; margin-bottom: 10px; height: 320px;">
                                    <div class="card-body" style="display: flex; padding: 0.5rem 0.5rem;">
                                        <div id="googleMap" style="width:100%;height:300px;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 order-md-3">
                                <div class="card" style="border: 2px solid black; margin: 20px; margin-top: 10px; background-color: #4CC9F0;">
                                    <div class="card-body" style="display: flex; padding: 0.5rem 0.5rem;">
                                        <p class="deskripsiIndikator" style="font-family: 'Monda', sans-serif; font-size: 12px; font-style: italic; margin: 0px; color: white;">
                                            <?php echo $IndikatorTable[0]['deskripsi']; ?> </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin: 20px; margin-top: 40px;">

                                <div class="<?php echo ($wilayah == 'nasional' ? 'col-md-12' : 'col-md-12') ?> order-md-4" style="margin-bottom: 20px;">
                                    <div class="card" style="height: 250px;">
                                        <div class="card-body" style="padding: 10px; padding-left: 3px;">
                                            <script src="https://code.highcharts.com/highcharts.js"></script>
                                            <script src="https://code.highcharts.com/modules/exporting.js"></script>
                                            <script src="https://code.highcharts.com/modules/export-data.js"></script>
                                            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                                            <figure class="highcharts-figure">
                                                <div id="container"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($wilayah == 'nasional') { ?>
                                    <div class="col-md-12 order-md-5">
                                        <div class="card" style="border: 2px solid black; background-color: #3E86DA;">
                                            <div class="card-title" style="position: absolute; top: -10px; border: 2px solid black; align-self: center; text-align: center; padding-left: 5px; padding-right: 5px; margin-bottom: 0px; background-color: #85B9F5; color: white;">
                                                <p class="JudulGrafikPerbandingan" style="margin-bottom: 0px;">Jumlah <?php echo $IndikatorTable[0]['nama_indikator']; ?> Nasional</p>
                                            </div>
                                            <div class="card-body" style="display: flex; padding: 1rem 0.5rem 0.5rem 0.5rem;">
                                                <p class="deskripsiGrafikPerbandingan" style="font-family: 'Monda', sans-serif; font-size: 12px; font-style: italic; margin: 0px; color: white;">
                                                    <?php if ($infographnasional[4]['nasional'] >= $infographnasional[5]['nasional']) {
                                                        $status_capaian = 'di bawah';
                                                    } elseif ($infographnasional[4]['nasional'] <= $infographnasional[5]['nasional']) {
                                                        $status_capaian = 'di atas';
                                                    } elseif ($infographnasional[4]['nasional'] == $infographnasional[5]['nasional']) {
                                                        $status_capaian = 'sama dengan';
                                                    } else {
                                                        $status_capaian = 'unknown';
                                                    } ?>
                                                    Capaian <?php echo $IndikatorTable[0]['nama_indikator']; ?> Nasional pada <?php echo date("F", mktime(0, 0, 0, $infographnasional[5]['periode'], 10)); ?> <?php echo $infographnasional[5]['tahun'] ?> berada <?php echo $status_capaian; ?> capaian pada <?php echo date("F", mktime(0, 0, 0, $infographnasional[4]['periode'], 10)); ?> <?php echo $infographnasional[4]['tahun'] ?>. Capaian <?php echo $IndikatorTable[0]['nama_indikator']; ?> Nasional pada <?php echo date("F", mktime(0, 0, 0, $infographnasional[5]['periode'], 10)); ?> <?php echo $infographnasional[5]['tahun'] ?> sebesar <?php echo $infographnasional[5]['nasional'] ?><?php echo $infographnasional[5]['satuan']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } elseif ($wilayah == 'provinsi') { ?>
                                    <div class="col-md-12 order-md-5">
                                        <div class="card" style="border: 2px solid black; background-color: #3E86DA; margin-bottom: 20px;">
                                            <div class="card-title" style="width: 80%; position: absolute; top: -12px; border: 2px solid black; align-self: center; text-align: center; padding-left: 5px; padding-right: 5px; margin-bottom: 0px; background-color: #85B9F5; color: white;">
                                                <p class="JudulGrafikPerbandingan" style="margin-bottom: 0px;">Perbandingan <?php echo $IndikatorTable[0]['nama_indikator']; ?> <?php echo ($wilayah == "provinsi" ? "Nasional dengan Provinsi" : "Nasional"); ?> </p>
                                            </div>
                                            <div class="card-body" style="display: flex; padding: 1rem 0.5rem 0.5rem 0.5rem;">
                                                <p class="deskripsiGrafikPerbandingan" style="font-family: 'Monda', sans-serif; font-size: 12px; font-style: italic; margin: 0px; color: white;">
                                                    <?php if ($infographprovinsi[4]['nilai'] >= $infographprovinsi[5]['nilai']) {
                                                        $status_capaian = 'di bawah';
                                                    } elseif ($infographprovinsi[4]['nilai'] <= $infographprovinsi[5]['nilai']) {
                                                        $status_capaian = 'di atas';
                                                    } elseif ($infographprovinsi[4]['nilai'] == $infographprovinsi[5]['nilai']) {
                                                        $status_capaian = 'sama dengan';
                                                    } else {
                                                        $status_capaian = 'unknown';
                                                    } ?>
                                                    <?php echo $IndikatorTable[0]['nama_indikator']; ?> <?php echo $subWilayah[0]['nama_provinsi']; ?> pada tahun <?php echo $infographprovinsi[5]['tahun'] ?> <?php echo $status_capaian; ?> dibandingkan dengan tahun <?php echo $infographprovinsi[4]['tahun'] ?>. Pada tahun <?php echo $infographprovinsi[5]['tahun'] ?> <?php echo $IndikatorTable[0]['nama_indikator']; ?> <?php echo $subWilayah[0]['nama_provinsi']; ?> adalah sebesar <?php echo $infographprovinsi[5]['nilai'] ?>%, sedangkan pada tahun <?php echo $infographprovinsi[4]['tahun'] ?> pertumbuhannya tercatat sebesar <?php echo $infographprovinsi[4]['nilai'] ?>%.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } elseif ($wilayah == 'kabupatenkota') { ?>
                                    <div class="col-md-12 order-md-5">
                                        <div class="card" style="border: 2px solid black; background-color: #3E86DA; margin-bottom: 20px;">
                                            <div class="card-title" style="width: 80%; position: absolute; top: -12px; border: 2px solid black; align-self: center; text-align: center; padding-left: 5px; padding-right: 5px; margin-bottom: 0px; background-color: #85B9F5; color: white;">
                                                <p class="JudulGrafikPerbandingan" style="margin-bottom: 0px;">Perbandingan <?php echo $IndikatorTable[0]['nama_indikator']; ?> <?php if ($wilayah == 'nasional') {
                                                                                                                                                                                    echo 'Nasional';
                                                                                                                                                                                } elseif ($wilayah == 'provinsi') {
                                                                                                                                                                                    echo 'Nasional dengan Provinsi';
                                                                                                                                                                                } elseif ($wilayah == 'kabupatenkota') {
                                                                                                                                                                                    echo 'Nasional dengan Daerah';
                                                                                                                                                                                } ?> </p>
                                            </div>
                                            <div class="card-body" style="display: flex; padding: 1rem 0.5rem 0.5rem 0.5rem;">
                                                <p class="deskripsiGrafikPerbandingan" style="font-family: 'Monda', sans-serif; font-size: 12px; font-style: italic; margin: 0px; color: white;">
                                                    <?php if ($infographkabupatenkota[4]['nilai'] >= $infographkabupatenkota[5]['nilai']) {
                                                        $status_capaian = 'di bawah';
                                                    } elseif ($infographkabupatenkota[4]['nilai'] <= $infographkabupatenkota[5]['nilai']) {
                                                        $status_capaian = 'di atas';
                                                    } elseif ($infographkabupatenkota[4]['nilai'] == $infographkabupatenkota[5]['nilai']) {
                                                        $status_capaian = 'sama dengan';
                                                    } else {
                                                        $status_capaian = 'unknown';
                                                    } ?>
                                                    <?php echo $IndikatorTable[0]['nama_indikator']; ?> <?php echo $subWilayahDaerah[0]['nama_kabupaten']; ?> pada tahun <?php echo $infographkabupatenkota[5]['tahun'] ?> <?php echo $status_capaian; ?> dibandingkan dengan tahun <?php echo $infographkabupatenkota[4]['tahun'] ?>. Pada tahun <?php echo $infographkabupatenkota[5]['tahun'] ?> <?php echo $IndikatorTable[0]['nama_indikator']; ?> <?php echo $subWilayahDaerah[0]['nama_kabupaten']; ?> adalah sebesar <?php echo $infographkabupatenkota[5]['nilai'] ?>, sedangkan pada tahun <?php echo $infographkabupatenkota[4]['tahun'] ?> pertumbuhannya tercatat sebesar <?php echo $infographkabupatenkota[4]['nilai'] ?>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

                            <?php if ($wilayah != 'nasional') { ?>
                                <div class="row" style="margin: 20px; margin-top: 0px;">

                                    <div class="col-12 order-md-6">
                                        <div class="card" style="height: 315px; margin-bottom: 10px;">
                                            <div class="card-body" style="padding: 10px; padding-left: 3px;">
                                                <script src="https://code.highcharts.com/highcharts.js"></script>
                                                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                                                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                                                <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                                                <figure class="highcharts-figure">
                                                    <div id="container-2"></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 order-md-7">
                                        <div class="card" style="border: 2px solid black; border-radius: 5px 15px 5px 15px; background-color: #FFB703; margin-bottom: 20px;">
                                            <div class="card-body" style="display: flex; padding: 0.5rem 0.5rem 0.5rem 0.5rem;">
                                                <?php if ($wilayah == 'nasional') { ?>
                                                    <?php if ($infographnasional[5]['nasional'] >= $infographnasional[5]['nilai']) {
                                                        $status_capaian_indikator = 'di bawah';
                                                    } elseif ($infographnasional[5]['nasional'] <= $infographnasional[5]['nilai']) {
                                                        $status_capaian_indikator = 'di atas';
                                                    } elseif ($infographnasional[5]['nasional'] == $infographnasional[5]['nilai']) {
                                                        $status_capaian_indikator = 'sama dengan';
                                                    } else {
                                                        $status_capaian_indikator = 'unknown';
                                                    } ?>
                                                    <p style="font-family: 'Monda', sans-serif; font-size: 12px; font-style: italic; margin: 0px;">
                                                        Capaian <?php echo $IndikatorTable[0]['nama_indikator'] ?> <?php echo $subWilayah[0]['nama_provinsi'] ?> pada tahun <?php echo $infographnasional[5]['tahun'] ?> <?php echo $status_capaian_indikator; ?> Nasional. <?php echo $IndikatorTable[0]['nama_indikator'] ?> Nasional pada tahun <?php echo $infographnasional[5]['tahun'] ?> adalah sebesar <?php echo $infographnasional[5]['nilai']; ?>%.
                                                    <?php } else if ($wilayah == 'provinsi') { ?>
                                                        <?php if ($infographprovinsi[5]['nasional'] >= $infographprovinsi[5]['nilai']) {
                                                            $status_capaian_indikator = 'di bawah';
                                                        } elseif ($infographprovinsi[5]['nasional'] <= $infographprovinsi[5]['nilai']) {
                                                            $status_capaian_indikator = 'di atas';
                                                        } elseif ($infographprovinsi[5]['nasional'] == $infographprovinsi[5]['nilai']) {
                                                            $status_capaian_indikator = 'sama dengan';
                                                        } else {
                                                            $status_capaian_indikator = 'unknown';
                                                        } ?>
                                                    <p style="font-family: 'Monda', sans-serif; font-size: 12px; font-style: italic; margin: 0px;">
                                                        Capaian <?php echo $IndikatorTable[0]['nama_indikator'] ?> <?php echo $subWilayah[0]['nama_provinsi'] ?> pada tahun <?php echo $infographprovinsi[5]['tahun'] ?> <?php echo $status_capaian_indikator; ?> capaian Nasional. <?php echo $IndikatorTable[0]['nama_indikator'] ?> <?php echo $subWilayah[0]['nama_provinsi'] ?> pada tahun <?php echo $infographprovinsi[5]['tahun'] ?> adalah sebesar <?php echo $infographprovinsi[5]['nilai']; ?>, sedangkan <?php echo $IndikatorTable[0]['nama_indikator'] ?> Nasional pada tahun <?php echo $infographprovinsi[5]['tahun'] ?> adalah sebesar <?php echo $infographprovinsi[5]['nasional']; ?>.
                                                    <?php } else if ($wilayah == 'kabupatenkota') { ?>
                                                        <?php if ($infographkabupatenkota[5]['nasional'] >= $infographkabupatenkota[5]['nilai']) {
                                                            $status_capaian_indikator_nasional_daerah = 'di bawah';
                                                        } elseif ($infographkabupatenkota[5]['nasional'] <= $infographkabupatenkota[5]['nilai']) {
                                                            $status_capaian_indikator_nasional_daerah = 'di atas';
                                                        } elseif ($infographkabupatenkota[5]['nasional'] == $infographkabupatenkota[5]['nilai']) {
                                                            $status_capaian_indikator_nasional_daerah = 'sama dengan';
                                                        } else {
                                                            $status_capaian_indikator_nasional_daerah = 'unknown';
                                                        } ?>
                                                        <?php if ($infographprovinsi[5]['nilai'] >= $infographkabupatenkota[5]['nilai']) {
                                                            $status_capaian_indikator_provinsi_daerah = 'di bawah';
                                                        } elseif ($infographprovinsi[5]['nilai'] <= $infographkabupatenkota[5]['nilai']) {
                                                            $status_capaian_indikator_provinsi_daerah = 'di atas';
                                                        } elseif ($infographprovinsi[5]['nilai'] == $infographkabupatenkota[5]['nilai']) {
                                                            $status_capaian_indikator_provinsi_daerah = 'sama dengan';
                                                        } else {
                                                            $status_capaian_indikator_provinsi_daerah = 'unknown';
                                                        } ?>
                                                    <p style="font-family: 'Monda', sans-serif; font-size: 12px; font-style: italic; margin: 0px;">
                                                        Capaian <?php echo $IndikatorTable[0]['nama_indikator'] ?> <?php echo $subWilayahDaerah[0]['nama_kabupaten'] ?> pada tahun <?php echo $infographkabupatenkota[5]['tahun'] ?> <?php echo $status_capaian_indikator_nasional_daerah; ?> capaian Nasional dan <?php echo $status_capaian_indikator_provinsi_daerah; ?> capaian Provinsi. <?php echo $IndikatorTable[0]['nama_indikator'] ?> <?php echo $subWilayahDaerah[0]['nama_kabupaten'] ?> pada tahun <?php echo $infographkabupatenkota[5]['tahun'] ?> adalah sebesar <?php echo $infographkabupatenkota[5]['nilai']; ?>, sedangkan <?php echo $IndikatorTable[0]['nama_indikator'] ?> Nasional pada tahun <?php echo $infographkabupatenkota[5]['tahun'] ?> adalah sebesar <?php echo $infographkabupatenkota[5]['nasional']; ?> dan <?php echo $IndikatorTable[0]['nama_indikator'] ?> Provinsi pada tahun <?php echo $infographprovinsi[5]['tahun'] ?> adalah sebesar <?php echo $infographprovinsi[5]['nilai']; ?>.
                                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <?php } ?>

                            <div class="col-12 order-md-8">
                                <div class="card" style="border: 2px solid black; border-radius: 5px 5px 15px 15px; margin: 20px; margin-top: 10px; background-color: #4CC9F0;">
                                    <div class="card-body" style="display: flex; padding: 0rem 0rem; align-self: center; text-align: end;">
                                        <p style="font-family: 'Monda', sans-serif; font-size: 12px; margin: 0px; color: white;">
                                            Sumber data:
                                            <?php if ($wilayah == 'nasional') {
                                                echo $infographnasional[0]['sumber'];
                                            } else if ($wilayah == 'provinsi') {
                                                echo $infographprovinsi[0]['sumber'];
                                            } else if ($wilayah == 'kabupatenkota') {
                                                echo $infographkabupatenkota[0]['sumber'];
                                            } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </section>
            </div>
            <!-- End Section Infograph -->
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">CARI...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="indikator">Indikator</label>
                        <select class="form-control" class="selectIndikator">
                            <option>Pertumbuhan Ekonomi</option>
                            <option>Gini Rasio</option>
                            <option>Tingkat Pengangguran Terbuka</option>
                            <option>Tingkat Kemiskinan</option>
                            <option>Lama Harapan Hidup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="wilayah">Wilayah</label>
                        <select class="form-control" id="selectWilayahMobile">
                            <option>Nasional</option>
                            <option>Provinsi</option>
                            <option>Kabupaten/ Kota</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sub-wilayah">Sub Wilayah</label>
                        <select class="form-control" id="selectSubWilayahMobile">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="button" type="button" style="padding: 0.5% 5%; float: right; font-size: 14px;" class="button-read-more btn-read-more-article">
                    Cari <i class="fa fa-xs fa-search"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FILE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- list file -->
                <div class="row" style="display: flex; align-items: center; margin-top: 10px; margin-bottom: 10px;">
                    <div class="col-10">
                        <p style="font-family: 'Monda', sans-serif; font-size: 12px; margin: 0px;">Pertumbuhan Ekonomi Nasional 2022.xls</p>
                    </div>
                    <div class="col-2">
                        <a type="button" style="padding: 3px 8px 3px 8px; float: right; font-size: 11px; margin-top: 0px;" class="button-read-more btn-read-more-article">
                            <i class="fa fa-xs fa-download"></i>
                        </a>
                    </div>
                </div>
                <div class="row" style="display: flex; align-items: center; margin-top: 10px; margin-bottom: 10px;">
                    <div class="col-10">
                        <p style="font-family: 'Monda', sans-serif; font-size: 12px; margin: 0px;">Pertumbuhan Ekonomi Daerah.xls</p>
                    </div>
                    <div class="col-2">
                        <a type="button" style="padding: 3px 8px 3px 8px; float: right; font-size: 11px; margin-top: 0px;" class="button-read-more btn-read-more-article">
                            <i class="fa fa-xs fa-download"></i>
                        </a>
                    </div>
                </div>
                <div class="row" style="display: flex; align-items: center; margin-top: 10px; margin-bottom: 10px;">
                    <div class="col-10">
                        <p style="font-family: 'Monda', sans-serif; font-size: 12px; margin: 0px;">Perbandingan Pertumbuhan Ekonomi Nasional dan Daerah 2020-2025.xls</p>
                    </div>
                    <div class="col-2">
                        <a type="button" style="padding: 3px 8px 3px 8px; float: right; font-size: 11px; margin-top: 0px;" class="button-read-more btn-read-more-article">
                            <i class="fa fa-xs fa-download"></i>
                        </a>
                    </div>
                </div>
                <!-- end list file -->
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" type="button" style="padding: 0.5% 5%; float: right; font-size: 14px;" class="button-read-more btn-read-more-article">
                    Cari <i class="fa fa-xs fa-search"></i>
                </button>
            </div> -->
        </div>
    </div>
</div>


<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(51.508742, -0.120850),
            zoom: 5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

<script>
    Highcharts.chart('container', {
        chart: {
            type: '<?php echo $IndikatorTable[0]['chart'] ?>',
            // height: 90 + '%'
            height: 230
        },
        title: {
            text: 'Perbandingan <?php echo $IndikatorTable[0]['nama_indikator'] ?> <?php if ($wilayah == 'nasional') {
                                                                                        echo 'Nasional';
                                                                                    } else if ($wilayah == 'provinsi') {
                                                                                        echo 'Nasional dengan Provinsi';
                                                                                    } else if ($wilayah == 'kabupatenkota') {
                                                                                        echo 'Nasional dengan Daerah';
                                                                                    } ?>',
            style: {
                fontFamily: 'monospace',
                fontSize: '1.2em',
            }
        },
        subtitle: {
            text: 'Source: <?php if ($wilayah == 'nasional') {
                                echo $infographnasional[0]['sumber'];
                            } else if ($wilayah == 'provinsi') {
                                echo $infographprovinsi[0]['sumber'];
                            } else if ($wilayah == 'kabupatenkota') {
                                echo $infographkabupatenkota[0]['sumber'];
                            } ?>',
            style: {
                fontFamily: 'monospace',
                fontSize: '0.8em'
            }
        },
        xAxis: {
            categories: [
                '<?php if ($wilayah == 'nasional') {
                        echo $infographnasional[1]['periode'];
                    } else if ($wilayah == 'provinsi') {
                        echo $infographprovinsi[1]['periode'];
                    } else if ($wilayah == 'kabupatenkota') {
                        echo $infographkabupatenkota[1]['periode'];
                    } ?> -`<?php if ($wilayah == 'nasional') {
                                echo substr($infographnasional[1]['tahun'], 2);
                            } else if ($wilayah == 'provinsi') {
                                echo substr($infographprovinsi[1]['tahun'], 2);
                            } else if ($wilayah == 'kabupatenkota') {
                                echo substr($infographkabupatenkota[1]['tahun'], 2);
                            } ?>',
                '<?php if ($wilayah == 'nasional') {
                        echo $infographnasional[2]['periode'];
                    } else if ($wilayah == 'provinsi') {
                        echo $infographprovinsi[2]['periode'];
                    } else if ($wilayah == 'kabupatenkota') {
                        echo $infographkabupatenkota[2]['periode'];
                    } ?> -`<?php if ($wilayah == 'nasional') {
                                echo substr($infographnasional[2]['tahun'], 2);
                            } else if ($wilayah == 'provinsi') {
                                echo substr($infographprovinsi[2]['tahun'], 2);
                            } else if ($wilayah == 'kabupatenkota') {
                                echo substr($infographkabupatenkota[2]['tahun'], 2);
                            } ?>',
                '<?php if ($wilayah == 'nasional') {
                        echo $infographnasional[3]['periode'];
                    } else if ($wilayah == 'provinsi') {
                        echo $infographprovinsi[3]['periode'];
                    } else if ($wilayah == 'kabupatenkota') {
                        echo $infographkabupatenkota[3]['periode'];
                    } ?> -`<?php if ($wilayah == 'nasional') {
                                echo substr($infographnasional[3]['tahun'], 2);
                            } else if ($wilayah == 'provinsi') {
                                echo substr($infographprovinsi[3]['tahun'], 2);
                            } else if ($wilayah == 'kabupatenkota') {
                                echo substr($infographkabupatenkota[3]['tahun'], 2);
                            } ?>',
                '<?php if ($wilayah == 'nasional') {
                        echo $infographnasional[4]['periode'];
                    } else if ($wilayah == 'provinsi') {
                        echo $infographprovinsi[4]['periode'];
                    } else if ($wilayah == 'kabupatenkota') {
                        echo $infographkabupatenkota[4]['periode'];
                    } ?> -`<?php if ($wilayah == 'nasional') {
                                echo substr($infographnasional[4]['tahun'], 2);
                            } else if ($wilayah == 'provinsi') {
                                echo substr($infographprovinsi[4]['tahun'], 2);
                            } else if ($wilayah == 'kabupatenkota') {
                                echo substr($infographkabupatenkota[4]['tahun'], 2);
                            } ?>',
                '<?php if ($wilayah == 'nasional') {
                        echo $infographnasional[5]['periode'];
                    } else if ($wilayah == 'provinsi') {
                        echo $infographprovinsi[5]['periode'];
                    } else if ($wilayah == 'kabupatenkota') {
                        echo $infographkabupatenkota[5]['periode'];
                    } ?> -`<?php if ($wilayah == 'nasional') {
                                echo substr($infographnasional[5]['tahun'], 2);
                            } else if ($wilayah == 'provinsi') {
                                echo substr($infographprovinsi[5]['tahun'], 2);
                            } else if ($wilayah == 'kabupatenkota') {
                                echo substr($infographkabupatenkota[5]['tahun'], 2);
                            } ?>'
            ]
        },
        yAxis: {
            title: {
                text: '<?php if ($wilayah == 'nasional') {
                            echo $infographnasional[5]['satuan'];
                        } else if ($wilayah == 'provinsi') {
                            echo $infographprovinsi[5]['satuan'];
                        } else if ($wilayah == 'kabupatenkota') {
                            echo $infographkabupatenkota[5]['satuan'];
                        } ?>',
                style: {
                    fontFamily: 'monospace',
                    fontSize: '0.8em'
                }
            }
        },
        plotOptions: {
            <?php echo $IndikatorTable[0]['chart'] ?>: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true
            }
        },
        series: [
            <?php if ($wilayah == 'nasional') { ?> {
                    name: 'Nasional',
                    data: [<?php echo $infographnasional[1]['nasional']; ?>, <?php echo $infographnasional[2]['nasional']; ?>, <?php echo $infographnasional[3]['nasional']; ?>, <?php echo $infographnasional[4]['nasional']; ?>, <?php echo $infographnasional[5]['nasional']; ?>]
                },
            <?php } ?>
            <?php if ($wilayah == 'provinsi') { ?> {
                    name: 'Nasional',
                    data: [<?php echo $infographprovinsi[1]['nasional']; ?>, <?php echo $infographprovinsi[2]['nasional']; ?>, <?php echo $infographprovinsi[3]['nasional']; ?>, <?php echo $infographprovinsi[4]['nasional']; ?>, <?php echo $infographprovinsi[5]['nasional']; ?>]
                },
                {
                    name: '<?php echo $subWilayah[0]['nama_provinsi'] ?>',
                    data: [<?php echo $infographprovinsi[1]['nilai']; ?>, <?php echo $infographprovinsi[2]['nilai']; ?>, <?php echo $infographprovinsi[3]['nilai']; ?>, <?php echo $infographprovinsi[4]['nilai']; ?>, <?php echo $infographprovinsi[5]['nilai']; ?>]
                },
            <?php } ?>
            <?php if ($wilayah == 'kabupatenkota') { ?> {
                    name: 'Nasional',
                    data: [<?php echo $infographkabupatenkota[1]['nasional']; ?>, <?php echo $infographkabupatenkota[2]['nasional']; ?>, <?php echo $infographkabupatenkota[3]['nasional']; ?>, <?php echo $infographkabupatenkota[4]['nasional']; ?>, <?php echo $infographkabupatenkota[5]['nasional']; ?>]
                },
                {
                    name: '<?php echo $subWilayah[0]['nama_provinsi'] ?>',
                    data: [<?php echo $infographprovinsi[1]['nilai']; ?>, <?php echo $infographprovinsi[2]['nilai']; ?>, <?php echo $infographprovinsi[3]['nilai']; ?>, <?php echo $infographprovinsi[4]['nilai']; ?>, <?php echo $infographprovinsi[5]['nilai']; ?>]
                },
                {
                    name: '<?php echo $subWilayahDaerah[0]['nama_kabupaten'] ?>',
                    data: [<?php echo $infographkabupatenkota[1]['nilai']; ?>, <?php echo $infographkabupatenkota[2]['nilai']; ?>, <?php echo $infographkabupatenkota[3]['nilai']; ?>, <?php echo $infographkabupatenkota[4]['nilai']; ?>, <?php echo $infographkabupatenkota[5]['nilai']; ?>]
                },
            <?php } ?>
        ]
    });
</script>

<script>
    Highcharts.chart('container-2', {
        chart: {
            type: 'column',
            // height: 90 + '%'
            height: 300
        },
        title: {
            text: 'Perbandingan <?php echo $IndikatorTable[0]['nama_indikator'] ?> antar <?php echo ($wilayah == 'provinsi' ? 'Provinsi' : 'Daerah'); ?>',
            style: {
                fontFamily: 'monospace',
                fontSize: '1.2em',
            }
        },
        subtitle: {
            text: 'Source: BPS, diolah',
            style: {
                fontFamily: 'monospace',
                fontSize: '0.8em'
            }
        },
        xAxis: {
            categories: [
                <?php foreach ($graphperbandinganwilayah as $graphwil) {
                    echo "'" . $graphwil['label'] . "',";
                } ?>
            ]
        },
        yAxis: {
            title: {
                text: 'Value',
                style: {
                    fontFamily: 'monospace',
                    fontSize: '0.8em'
                }
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true
            }
        },
        credits: {
            enabled: false
        },
        series: [{
            name: '<?php echo $IndikatorTable[0]['nama_indikator'] ?>',
            data: [
                <?php foreach ($graphperbandinganwilayah as $graphwil) {
                    echo $graphwil['nilai'] . ",";
                } ?>
            ]
        }]
    });
</script>

<script>
    $.get("https://webapi.bps.go.id/v1/api/list/model/subcat/lang/ind/domain/0000/key/24fb1b646304e23577aaad005eb40714/", function(data) {
        // console.log(data.data[1]);

        var txt = "<option value=''>-Pilih-</option>";
        for (let i = 0; i < data.data[1].length; i++) {
            txt += "<option value=" + data.data[1][i].subcat_id + ">" + data.data[1][i].title + "</option>";
        }
        $("#selectCategory").html(txt);
    });

    $('#selectCategory').on('change', function() {

        var valueSelectedCategory = this.value;
        if (valueSelectedCategory == '') {
            $(".form-group-subject").hide();
        } else {
            $(".form-group-subject").show();
        }

        $.get("https://webapi.bps.go.id/v1/api/list/model/subject/lang/ind/domain/0000/subcat/" + valueSelectedCategory + "/key/24fb1b646304e23577aaad005eb40714/", function(data) {
            // console.log(this);
            // console.log(data);
            // console.log(data.data[1][0].domain_id);
            // console.log(data.data[1][0].domain_id.substr(2, 1));

            var txt = "";
            if (data.data == '') {
                txt += "<option value=''>-Pilih-</option>";
            } else {
                for (let i = 0; i < data.data[1].length; i++) {
                    txt += "<option value=" + data.data[1][i].sub_id + ">" + data.data[1][i].title + "</option>";
                }
            }

            $("#selectSubject").html(txt);

        });

    });

    $('#selectWilayah').on('change', function() {

        if (this.value == 'provinsi') {

            // $.get("https://webapi.bps.go.id/v1/api/domain/type/prov/key/24fb1b646304e23577aaad005eb40714/", function(data) {

            //     var txt = "<option value=''>-Pilih-</option>";
            //     for (let i = 0; i < data.data[1].length; i++) {
            //         txt += "<option value=" + data.data[1][i].domain_id + ">" + data.data[1][i].domain_name + "</option>";
            //     }
            //     $("#selectSubWilayah").html(txt);
            //     $("#selectSubWilayahMobile").html(txt);
            // });

            $(".form-group-sub-wilayah").show();
            $(".form-group-kabupaten-kota").hide();

        } else if (this.value == 'kabupatenkota') {

            // $.get("https://webapi.bps.go.id/v1/api/domain/type/prov/key/24fb1b646304e23577aaad005eb40714/", function(data) {

            //     var txt = "<option value=''>-Pilih-</option>";
            //     for (let i = 0; i < data.data[1].length; i++) {
            //         txt += "<option value=" + data.data[1][i].domain_id + ">" + data.data[1][i].domain_name + "</option>";
            //     }
            //     $("#selectSubWilayah").html(txt);
            //     $("#selectSubWilayahMobile").html(txt);
            // });

            $(".form-group-sub-wilayah").show();
            $(".form-group-kabupaten-kota").show();

        } else {

            $(".form-group-sub-wilayah").hide();
            $(".form-group-kabupaten-kota").hide();

        }

    });

    $('#selectSubWilayah').on('change', function() {

        $.get("https://webapi.bps.go.id/v1/api/domain/type/kabbyprov/prov/" + this.value + "/key/24fb1b646304e23577aaad005eb40714/", function(data) {
            // console.log(data.data[1]);
            // console.log(data.data[1][0].domain_id);
            // console.log(data.data[1][0].domain_id.substr(2, 1));

            var txt = "<option value=''>-Pilih-</option>";
            for (let i = 0; i < data.data[1].length; i++) {
                if (data.data[1][i].domain_id.substr(2, 1) == 7) {
                    txt += "<option value=" + data.data[1][i].domain_id + ">Kota " + data.data[1][i].domain_name + "</option>";
                } else {
                    txt += "<option value=" + data.data[1][i].domain_id + ">Kabupaten " + data.data[1][i].domain_name + "</option>";
                }
            }

            $("#selectKabupatenKota").html(txt);

        });

    });

    /* $(document).on("submit", "#formSearchIndicator", function(e) {
        // $('.btn-comment-submit').append( ' <i class="fa fa-spinner fa-spin icon-comment-loading"></i>' );
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "<?= base_url(); ?>infographController/index",
            data: formData,
            success: function(result) {
                const obj = JSON.parse(result);
                console.log(obj);

                if (obj.indikator[0].nama_indikator == 'Pertumbuhan Ekonomi') {

                    $(".deskripsiIndikator").html(obj.indikator[0].deskripsi);
                    $(".JudulGrafikPerbandingan").html('Jumlah Pertumbuhan Ekonomi Nasional');

                    if (obj.data[5].nilai > obj.data[4].nilai) {
                        txtPertumbuhanEkonomi = 'Meningkat';
                    } else if (obj.data[5].nilai < obj.data[4].nilai) {
                        txtPertumbuhanEkonomi = 'Menurun';
                    } else {
                        txtPertumbuhanEkonomi = 'Sama';
                    }
                    var deskripsiGrafikPerbandingan = 'Pertumbuhan ekonomi Nasional pada tahun ' + obj.data[5].tahun + ' <mark style="line-height: 0px; padding: 0px; background-color: #FFB703;">' + txtPertumbuhanEkonomi + '</mark> dibandingkan dengan tahun ' + obj.data[4].tahun + '. Pada <mark style="line-height: 0px; padding: 0px; background-color: #FFB703;">tahun ' + obj.data[5].tahun + ' pertumbuhan ekonomi Nasional adalah sebesar ' + obj.data[5].nilai + '' + obj.indikator[0].satuan + '.</mark> Sedangkan, pada <mark style="line-height: 0px; padding: 0px; background-color: #FFB703;">tahun ' + obj.data[4].tahun + ' pertumbuhannya tercatat sebesar ' + obj.data[4].nilai + '' + obj.indikator[0].satuan + '.</mark>';
                    $(".deskripsiGrafikPerbandingan").html(deskripsiGrafikPerbandingan);

                    const tahunGrafik = [];
                    for (let i = 0; i < obj.data.length; i++) {
                        tahunGrafik.push(obj.data[i].tahun);
                    }

                    const nilaiNasional = [];
                    for (let i = 0; i < obj.data.length; i++) {
                        nilaiNasional.push(parseFloat(obj.data[i].nilai));
                    }

                    console.log(nilaiNasional);

                    Highcharts.chart('container', {
                        chart: {
                            type: obj.indikator[0].chart,
                            // height: 90 + '%'
                            height: 230
                        },
                        title: {
                            text: 'Perbandingan ' + obj.indikator[0].nama_indikator,
                            style: {
                                fontFamily: 'monospace',
                                fontSize: '1.2em',
                            }
                        },
                        subtitle: {
                            text: 'Source: BPS, diolah',
                            style: {
                                fontFamily: 'monospace',
                                fontSize: '0.8em'
                            }
                        },
                        xAxis: {
                            categories: tahunGrafik
                        },
                        yAxis: {
                            title: {
                                text: obj.indikator[0].nama_indikator + ' (' + obj.indikator[0].satuan + ") ",
                                style: {
                                    fontFamily: 'monospace',
                                    fontSize: '0.8em'
                                }
                            }
                        },
                        plotOptions: {
                            line: {
                                dataLabels: {
                                    enabled: true
                                },
                                enableMouseTracking: true
                            }
                        },
                        series: [{
                            name: 'Nasional',
                            data: nilaiNasional
                        }]
                    });

                }
            },
            error: function(result) {
                console.log(result);
            }
        });
    }); */
</script>