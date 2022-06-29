<!-- author  : Muhamad Munawir Amin
Email        : muhamadmunawiramin@gmail.com
Last Update  : 15 March 2022 -->

<div class="container-md" style="margin-top: 7rem">

    <!-- <?php print_r($IndikatorTable); ?>
    <br />
    <br />
    <?php print_r($infographkabupatenkota); ?>
    <br>
    <br>
    <?php print_r($indikator); ?>
    <br>
    <br>
    <?php print_r($subWilayah[0]['id']); ?>
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
                        <?php if (isset($IndikatorTable)) { ?>
                            <form id="formSearchIndicator" method="get" action="<?php base_url('infograph') ?>">
                                <div class="card-body" style="height: 350px;">
                                    <div class="form-group">
                                        <label for="indikator">Indikator</label>
                                        <select class="form-control" class="selectIndikator" id="indikator" name="indikator">
                                            <!-- <?php foreach ($list_indikator as $list_ind) { ?>
                                                <option value="<?php echo $list_ind['nama_indikator'] ?>" <?php echo ($IndikatorTable[0]['nama_indikator'] == $list_ind['nama_indikator'] ? "selected" : "") ?>><?php echo $list_ind['nama_indikator'] ?></option>
                                            <?php } ?> -->
                                            <option value="Pertumbuhan Ekonomi" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Pertumbuhan Ekonomi' ? "selected" : "") ?>>Pertumbuhan Ekonomi</option>
                                            <option value="PDRB per Kapita ADHB" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'PDRB per Kapita ADHB' ? "selected" : "") ?>>PDRB per Kapita ADHB</option>
                                            <option value="PDRB per Kapita ADHK Tahun Dasar 2010" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'PDRB per Kapita ADHK Tahun Dasar 2010' ? "selected" : "") ?>>PDRB per Kapita ADHK Tahun Dasar 2010</option>
                                            <option value="Jumlah Penganggur" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Jumlah Penganggur' ? "selected" : "") ?>>Jumlah Penganggur</option>
                                            <option value="Tingkat Pengangguran Terbuka" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Tingkat Pengangguran Terbuka' ? "selected" : "") ?>>Tingkat Pengangguran Terbuka</option>
                                            <option value="Indeks Pembangunan Manusia" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Indeks Pembangunan Manusia' ? "selected" : "") ?>>Indeks Pembangunan Manusia</option>
                                            <option value="Gini Rasio" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Gini Rasio' ? "selected" : "") ?>>Gini Rasio</option>
                                            <option value="Angka Harapan Hidup" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Angka Harapan Hidup' ? "selected" : "") ?>>Angka Harapan Hidup</option>
                                            <option value="Rata-rata Lama Sekolah" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Rata-rata Lama Sekolah' ? "selected" : "") ?>>Rata-rata Lama Sekolah</option>
                                            <option value="Harapan Lama Sekolah" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Harapan Lama Sekolah' ? "selected" : "") ?>>Harapan Lama Sekolah</option>
                                            <option value="Pengeluaran per Kapita" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Pengeluaran per Kapita' ? "selected" : "") ?>>Pengeluaran per Kapita</option>
                                            <option value="Indeks Kedalaman Kemiskinan" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Indeks Kedalaman Kemiskinan' ? "selected" : "") ?>>Indeks Kedalaman Kemiskinan</option>
                                            <option value="Tingkat Kemiskinan" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Tingkat Kemiskinan' ? "selected" : "") ?>>Tingkat Kemiskinan</option>
                                            <option value="Jumlah Penduduk Miskin" <?php echo ($IndikatorTable[0]['nama_indikator'] == 'Jumlah Penduduk Miskin' ? "selected" : "") ?>>Jumlah Penduduk Miskin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="wilayah">Wilayah</label>
                                        <select class="form-control" id="selectWilayah" name="wilayah">
                                            <option value="nasional" <?php echo ($wilayah == 'nasional') ? 'selected' : '' ?>>Nasional</option>
                                            <option value="provinsi" <?php echo ($wilayah == 'provinsi') ? 'selected' : '' ?>>Provinsi</option>
                                            <option value="kabupatenkota" <?php echo ($wilayah == 'kabupatenkota') ? 'selected' : '' ?>>Kabupaten/ Kota</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-sub-wilayah" style="display: <?php if (($wilayah == 'provinsi') || ($wilayah == 'kabupatenkota')) {
                                                                                                        echo 'block';
                                                                                                    } else {
                                                                                                        echo 'none';
                                                                                                    } ?>;">
                                        <?php $subWil = (isset($subWilayah[0]['nama_provinsi']) ? $subWilayah[0]['nama_provinsi'] : "") ?>
                                        <label for="sub-wilayah">Sub Wilayah</label>
                                        <select class="form-control" id="selectSubWilayah" name="subWilayah" <?php if (($wilayah == 'provinsi') || ($wilayah == 'kabupatenkota')) {
                                                                                                                    echo 'required';
                                                                                                                } else {
                                                                                                                    echo '';
                                                                                                                } ?>>
                                            <?php foreach ($list_provinsi as $list_p) { ?>
                                                <option value="<?php echo $list_p['id'] ?>" <?php echo ($subWil == $list_p['nama_provinsi'] ? 'selected' : '') ?>><?php echo $list_p['nama_provinsi'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-kabupaten-kota" style="display: <?php echo ($wilayah == 'kabupatenkota' ? 'block' : 'none') ?>;">
                                        <label for="sub-wilayah">Kabupaten/ Kota</label>
                                        <select class="form-control" id="selectKabupatenKota" name="kabupatenkota" <?php echo ($wilayah == 'kabupatenkota' ? 'required' : '') ?>>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer" style="padding: 0.3rem 1.4rem 2.8rem 1rem;">
                                    <button type="submit" style="padding: 0.5% 5%; float: right; font-size: 14px;" class="button-read-more btn-read-more-article">
                                        Cari <i class="fa fa-xs fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        <?php } else { ?>
                            <form id="formSearchIndicator" method="get" action="<?php base_url('infograph') ?>">
                                <div class="card-body" style="height: 350px;">
                                    <div class="form-group">
                                        <label for="indikator">Indikator</label>
                                        <select class="form-control" class="selectIndikator" name="indikator">
                                            <!-- <?php foreach ($list_indikator as $list_ind) { ?>
                                                <option value="<?php echo $list_ind['nama_indikator'] ?>"><?php echo $list_ind['nama_indikator'] ?></option>
                                            <?php } ?> -->
                                            <option value="Pertumbuhan Ekonomi">Pertumbuhan Ekonomi</option>
                                            <option value="PDRB per Kapita ADHB">PDRB per Kapita ADHB</option>
                                            <option value="PDRB per Kapita ADHK Tahun Dasar 2010">PDRB per Kapita ADHK Tahun Dasar 2010</option>
                                            <option value="Jumlah Penganggur">Jumlah Penganggur</option>
                                            <option value="Tingkat Pengangguran Terbuka">Tingkat Pengangguran Terbuka</option>
                                            <option value="Indeks Pembangunan Manusia">Indeks Pembangunan Manusia</option>
                                            <option value="Gini Rasio">Gini Rasio</option>
                                            <option value="Angka Harapan Hidup">Angka Harapan Hidup</option>
                                            <option value="Rata-rata Lama Sekolah">Rata-rata Lama Sekolah</option>
                                            <option value="Harapan Lama Sekolah">Harapan Lama Sekolah</option>
                                            <option value="Pengeluaran per Kapita">Pengeluaran per Kapita</option>
                                            <option value="Indeks Kedalaman Kemiskinan">Indeks Kedalaman Kemiskinan</option>
                                            <option value="Tingkat Kemiskinan">Tingkat Kemiskinan</option>
                                            <option value="Jumlah Penduduk Miskin">Jumlah Penduduk Miskin</option>
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
                                            <?php foreach ($list_provinsi as $list_p) { ?>
                                                <option value="<?php echo $list_p['id'] ?>"><?php echo $list_p['nama_provinsi'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-kabupaten-kota" style="display: none;">
                                        <label for="sub-wilayah">Kabupaten/ Kota</label>
                                        <select class="form-control" id="selectKabupatenKota" name="kabupatenkota">
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer" style="padding: 0.3rem 1.4rem 2.8rem 1rem;">
                                    <button type="submit" style="padding: 0.5% 5%; float: right; font-size: 14px;" class="button-read-more btn-read-more-article">
                                        Cari <i class="fa fa-xs fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        <?php } ?>
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
                        <div class="card-body" style="padding-left: 0px; padding-right: 0px;">

                            <?php if (isset($IndikatorTable)) { ?>
                                <div class="col-12 order-md-1">
                                    <div class="card" style="border: 2px solid black; margin: 20px; background-image: url('<?= base_url(); ?>assets/images/img/pattern/pattern_8.png');">
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

                                <?php if ((($wilayah == 'nasional') && (isset($infographnasional[5])) && ($infographnasional[5] != null)) || (($wilayah == 'provinsi') && (isset($infographprovinsi[5])) && ($infographprovinsi[5] != null)) || (($wilayah == 'kabupatenkota') && (isset($infographkabupatenkota[5])) && ($infographkabupatenkota[5] != null))) { ?>
                                    <div class="col-12 order-md-2">
                                        <div class="card" style="border: 2px solid black; border-bottom: 1.5px solid black; margin: 20px; margin-top: 40px; margin-bottom: 0px; height: 320px; border-radius: 0.25rem 0.25rem 0rem 0rem;">
                                            <div class="card-body" style="display: flex; padding: 0.5rem 0.5rem;">
                                                <!-- <div id="googleMap" style="width:100%;height:300px;"></div> -->
                                                <div id='map' style='width: 100%; height: 100%;'></div>
                                                <div class='map-overlay' id='features'>
                                                    <!-- <h4>US population density</h4> -->
                                                    <div>
                                                        <p><b id='pd'>Sorot kursor pada daerah</b></p>
                                                    </div>
                                                </div>
                                                <!-- <div class="map-legend" id="legend"></div>
                                                <div class="map-description" id="description"></div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 order-md-2" style="padding-right: 0px;">
                                            <div class="card" style="border: 2px solid black; border-top: 1px solid black; border-right: 1px solid black; margin-left: 35px; margin-right: 0px; margin-top: 0px; margin-bottom: 10px; height: 100px; border-radius: 0rem 0rem 0rem 0.25rem; background-image: url('<?= base_url(); ?>assets/images/img/pattern/pattern_8.png');">
                                                <div class="card-body" style="display: flex; padding: 0.5rem 0.5rem;">
                                                    <div id="legend">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 order-md-2" style="padding-left: 0px;">
                                            <div class="card" style="border: 2px solid black; border-top: 1px solid black; border-left: 1.5px solid black; margin-right: 35px; margin-left: 0px; margin-top: 0px; margin-bottom: 10px; height: 100px; border-radius: 0rem 0rem 0.25rem 0rem; background-image: url('<?= base_url(); ?>assets/images/img/pattern/pattern_8.png'); background-position-x: center;">
                                                <div class="card-body" style="display: flex; padding: 0.5rem 0.5rem;">
                                                    <p id="description"><b>Keterangan</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 order-md-3">
                                        <div class="card" style="border: 2px solid black; margin: 20px; margin-top: 0px; background-color: #4CC9F0;">
                                            <div class="card-body" style="display: flex; padding: 0.5rem 0.5rem;">
                                                <p class="deskripsiIndikator" style="font-family: 'Monda', sans-serif; font-size: 12px; margin: 0px; color: white;">
                                                    <?php echo $IndikatorTable[0]['deskripsi']; ?> </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin: 20px; margin-top: 40px;">

                                        <div class="<?php echo ($wilayah == 'nasional' ? 'col-md-12' : 'col-md-12') ?> order-md-4" style="margin-bottom: 10px;">
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
                                            <div class="col-md-12 order-md-5" style="margin-bottom: 10px;">
                                                <table class="table table-bordered table-hover">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th><b>Wilayah/Tahun</b></th>
                                                            <th>
                                                                <center><b><?php echo $infographnasional[1]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographnasional[2]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographnasional[3]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographnasional[4]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographnasional[5]['tahun'] ?></b></center>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><b>Nasional</b></td>
                                                            <td>
                                                                <center><?php echo $infographnasional[1]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographnasional[2]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographnasional[3]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographnasional[4]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographnasional[5]['nasional'] ?></center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-12 order-md-6">
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
                                            <div class="col-md-12 order-md-5" style="margin-bottom: 10px;">
                                                <table class="table table-bordered table-hover">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th><b>Wilayah/Tahun</b></th>
                                                            <th>
                                                                <center><b><?php echo $infographprovinsi[1]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographprovinsi[2]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographprovinsi[3]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographprovinsi[4]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographprovinsi[5]['tahun'] ?></b></center>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><b>Nasional</b></td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[1]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[2]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[3]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[4]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[5]['nasional'] ?></center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><b><?php echo $subWilayah[0]['nama_provinsi'] ?></b></td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[1]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[2]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[3]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[4]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[5]['nilai'] ?></center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

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
                                            <div class="col-md-12 order-md-5" style="margin-bottom: 10px;">
                                                <table class="table table-bordered table-hover">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th><b>Wilayah/Tahun</b></th>
                                                            <th>
                                                                <center><b><?php echo $infographkabupatenkota[1]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographkabupatenkota[2]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographkabupatenkota[3]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographkabupatenkota[4]['tahun'] ?></b></center>
                                                            </th>
                                                            <th>
                                                                <center><b><?php echo $infographkabupatenkota[5]['tahun'] ?></b></center>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><b>Nasional</b></td>
                                                            <td>
                                                                <center><?php echo $infographkabupatenkota[1]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographkabupatenkota[2]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographkabupatenkota[3]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographkabupatenkota[4]['nasional'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographkabupatenkota[5]['nasional'] ?></center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><b><?php echo $subWilayah[0]['nama_provinsi'] ?></b></td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[1]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[2]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[3]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[4]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographprovinsi[5]['nilai'] ?></center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><b><?php echo $subWilayahDaerah[0]['nama_kabupaten'] ?></b></td>
                                                            <td>
                                                                <center><?php echo $infographkabupatenkota[1]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographkabupatenkota[2]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographkabupatenkota[3]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographkabupatenkota[4]['nilai'] ?></center>
                                                            </td>
                                                            <td>
                                                                <center><?php echo $infographkabupatenkota[5]['nilai'] ?></center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-12 order-md-6">
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

                                    <?php if (isset($graphperbandinganwilayah) && ($graphperbandinganwilayah != null)) { ?>
                                        <?php if ($wilayah != 'nasional') { ?>
                                            <div class="row" style="margin: 20px; margin-top: 0px;">

                                                <div class="col-12 order-md-7">
                                                    <div class="card" style="height: 415px; margin-bottom: 10px;">
                                                        <div class="card-body" style="padding: 10px; padding-left: 3px;">
                                                            <script src="https://code.highcharts.com/highcharts.js"></script>
                                                            <script src="https://code.highcharts.com/highcharts-more.js"></script>
                                                            <script src="https://code.highcharts.com/modules/exporting.js"></script>
                                                            <script src="https://code.highcharts.com/modules/export-data.js"></script>
                                                            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                                                            <figure class="highcharts-figure">
                                                                <div id="container-3"></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 order-md-8">
                                                    <table class="table table-bordered table-hover">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>
                                                                    <center>Wilayah/Jenis</center>
                                                                </th>
                                                                <th>
                                                                    <center><?php echo $IndikatorTable[0]['nama_indikator'] ?></center>
                                                                </th>
                                                                <th>
                                                                    <center>Target RKP <?php echo $IndikatorTable[0]['nama_indikator'] ?></center>
                                                                </th>
                                                                <th>
                                                                    <center>Nasional</center>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if (isset($graphperbandinganwilayah)) {
                                                                foreach ($graphperbandinganwilayah as $graphwil) { ?>
                                                                    <tr <?php echo ($graphwil['wilayah'] == $subWilayah[0]['id'] ? 'style="background-color: antiquewhite;"' : '') ?>>
                                                                        <td><?php echo $graphwil['label'] ?></td>
                                                                        <td>
                                                                            <center><?php echo $graphwil['nilai'] ?></center>
                                                                        </td>
                                                                        <td>
                                                                            <center><?php echo $graphwil['target'] ?></center>
                                                                        </td>
                                                                        <td>
                                                                            <center><?php echo $graphwil['nasional'] ?></center>
                                                                        </td>
                                                                    </tr>
                                                            <?php }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-12 order-md-9">
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
                                    <?php } ?>

                                    <div class="col-12 order-md-10">
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
                                <?php } else { ?>
                                    <div class="col-12">
                                        <div class="card" style="border: 2px solid black; margin: 20px;">
                                            <div class="card-body" style="display: flex; text-align: center; align-items: center; width: 100%; height: 79vh;">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img src="<?= base_url() ?>/assets/assets/icon/404-not-found.png" alt="Data Not Found" style="width: 40%;" />
                                                    </div>
                                                    <div class="col-12">
                                                        <h3 style="margin-top: 20px;">-Data Not Found-</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } else { ?>
                                <div class="col-12">
                                    <div class="card" style="border: 2px solid black; margin: 20px;">
                                        <div class="card-body" style="display: flex; text-align: center; align-items: center; width: 100%; height: 79vh;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="<?= base_url() ?>/assets/assets/icon/404-not-found.png" alt="Data Not Found" style="width: 40%;" />
                                                </div>
                                                <div class="col-12">
                                                    <h3 style="margin-top: 20px;">-Data Not Found-</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

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

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(51.508742, -0.120850),
            zoom: 5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script> -->

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
            text: 'Sumber: <?php if ($wilayah == 'nasional') {
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
            text: 'Sumber: <?php if ($wilayah == 'nasional') {
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
                <?php
                if (isset($graphperbandinganwilayah)) {
                    foreach ($graphperbandinganwilayah as $graphwil) {
                        echo "'" . $graphwil['label'] . "',";
                    }
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
        legend: {
            shadow: false
        },
        tooltip: {
            shared: true
        },
        plotOptions: {
            column: {
                grouping: false,
                shadow: false,
                borderWidth: 0
            }
        },
        series: [{
                name: '<?php echo $IndikatorTable[0]['nama_indikator'] ?>',
                <?php
                if (isset($graphperbandinganwilayah)) {
                    foreach ($graphperbandinganwilayah as $graphwil) {
                        if ($wilayah == 'provinsi') {
                            if ($graphwil['wilayah'] == $subWilayah[0]['id']) {
                                echo "color: 'rgba(248,161,63,1)',";
                            } else {
                                echo "color: 'rgba(248,161,63,1)',";
                            }
                        } elseif ($wilayah == 'kabupatenkota') {
                            if ($graphwil['wilayah'] == $subWilayahDaerah[0]['id']) {
                                echo "color: 'rgba(248,161,63,1)',";
                            } else {
                                echo "color: 'rgba(248,161,63,1)',";
                            }
                        } else {
                            echo "color: 'rgba(248,161,63,1)',";
                        }
                    }
                } ?>
                data: [
                    <?php
                    if (isset($graphperbandinganwilayah)) {
                        foreach ($graphperbandinganwilayah as $graphwil) {
                            echo $graphwil['nilai'] . ",";
                        }
                    } ?>
                ],
                pointPadding: 0.3,
                pointPlacement: -0.2
            },
            {
                name: 'Target RKP <?php echo $IndikatorTable[0]['nama_indikator'] ?>',
                color: 'rgba(186,60,61,.9)',
                data: [
                    <?php
                    if (isset($graphperbandinganwilayah)) {
                        foreach ($graphperbandinganwilayah as $graphwil) {
                            echo $graphwil['target'] . ",";
                        }
                    } ?>
                ],
                pointPadding: 0.4,
                pointPlacement: -0.2
            },
            {
                name: 'Nasional',
                type: 'spline',
                marker: {
                    enabled: false
                },
                data: [
                    <?php
                    if (isset($graphperbandinganwilayah)) {
                        foreach ($graphperbandinganwilayah as $graphwil) {
                            echo $graphwil['nasional'] . ",";
                        }
                    } ?>
                ],
                // tooltip: {
                //     valueSuffix: '°C'
                // }
            }
        ]
        // series: [{
        //         name: 'Employees',
        //         color: 'rgba(165,170,217,1)',
        //         data: [150, 73, 20],
        //         pointPadding: 0.3,
        //         pointPlacement: -0.2
        //     }, {
        //         name: 'Employees Optimized',
        //         color: 'rgba(126,86,134,.9)',
        //         data: [140, 90, 40],
        //         pointPadding: 0.4,
        //         pointPlacement: -0.2
        //     }, {
        //         name: 'Profit',
        //         color: 'rgba(248,161,63,1)',
        //         data: [183.6, 178.8, 198.5],
        //         tooltip: {
        //             valuePrefix: '$',
        //             valueSuffix: ' M'
        //         },
        //         pointPadding: 0.3,
        //         pointPlacement: 0.2,
        //         yAxis: 1
        //     }, {
        //         name: 'Profit Optimized',
        //         color: 'rgba(186,60,61,.9)',
        //         data: [203.6, 198.8, 208.5],
        //         tooltip: {
        //             valuePrefix: '$',
        //             valueSuffix: ' M'
        //         },
        //         pointPadding: 0.4,
        //         pointPlacement: 0.2,
        //         yAxis: 1
        //     },
        //     {
        //         name: 'Temperature',
        //         type: 'spline',
        //         marker: {
        //             enabled: false
        //         },
        //         data: [7.0, 6.9, 9.5],
        //         tooltip: {
        //             valueSuffix: '°C'
        //         }
        //     }
        // ]
    });
</script>

<script>
    Highcharts.chart('container-3', {

        chart: {
            polar: true,
            type: 'line',
            margin: [70, 90, 90, 90]
        },

        // accessibility: {
        //     description: 'A spiderweb chart compares the allocated budget against actual spending within an organization. The spider chart has six spokes. Each spoke represents one of the 6 departments within the organization: sales, marketing, development, customer support, information technology and administration. The chart is interactive, and each data point is displayed upon hovering. The chart clearly shows that 4 of the 6 departments have overspent their budget with Marketing responsible for the greatest overspend of $20,000. The allocated budget and actual spending data points for each department are as follows: Sales. Budget equals $43,000; spending equals $50,000. Marketing. Budget equals $19,000; spending equals $39,000. Development. Budget equals $60,000; spending equals $42,000. Customer support. Budget equals $35,000; spending equals $31,000. Information technology. Budget equals $17,000; spending equals $26,000. Administration. Budget equals $10,000; spending equals $14,000.'
        // },

        title: {
            text: 'Perbandingan <?php echo $IndikatorTable[0]['nama_indikator'] ?> antar <?php echo ($wilayah == 'provinsi' ? 'Provinsi' : 'Daerah'); ?>',
            style: {
                fontFamily: 'monospace',
                fontSize: '1.2em',
            }
        },
        subtitle: {
            text: 'Sumber: <?php if ($wilayah == 'nasional') {
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

        pane: {
            size: '85%'
        },

        xAxis: {
            categories: [
                <?php
                if (isset($graphperbandinganwilayah)) {
                    foreach ($graphperbandinganwilayah as $graphwil) {
                        echo "'" . $graphwil['label'] . "',";
                    }
                } ?>
            ],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br/>'
        },

        legend: {
            align: 'center',
            verticalAlign: 'bottom',
            layout: 'vertical'
        },

        series: [{
            name: '<?php echo $IndikatorTable[0]['nama_indikator'] ?>',
            data: [
                <?php
                if (isset($graphperbandinganwilayah)) {
                    foreach ($graphperbandinganwilayah as $graphwil) {
                        echo $graphwil['nilai'] . ",";
                    }
                } ?>
            ],
            pointPlacement: 'on'
        }, {
            name: 'Target RKP <?php echo $IndikatorTable[0]['nama_indikator'] ?>',
            data: [
                <?php
                if (isset($graphperbandinganwilayah)) {
                    foreach ($graphperbandinganwilayah as $graphwil) {
                        echo $graphwil['target'] . ",";
                    }
                } ?>
            ],
            pointPlacement: 'on'
        }, {
            name: 'Nasional',
            marker: {
                enabled: false
            },
            data: [
                <?php
                if (isset($graphperbandinganwilayah)) {
                    foreach ($graphperbandinganwilayah as $graphwil) {
                        echo $graphwil['nasional'] . ",";
                    }
                } ?>
            ],
            pointPlacement: 'on'
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        align: 'center',
                        verticalAlign: 'bottom',
                        layout: 'horizontal'
                    },
                    pane: {
                        size: '100%'
                    }
                }
            }]
        }

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

    $(document).ready(function() {
        var value = $('#selectSubWilayah').val();
        var kodeKabKota = '<?php echo (isset($kodeKabkota) ? $kodeKabkota : '') ?>';
        // console.log($('#selectSubWilayah').val());
        console.log(kodeKabKota);
        $.get("https://webapi.bps.go.id/v1/api/domain/type/kabbyprov/prov/" + value + "/key/24fb1b646304e23577aaad005eb40714/", function(data) {
            // console.log(data.data[1]);
            // console.log(data.data[1][0].domain_id);
            // console.log(data.data[1][0].domain_id.substr(2, 1));

            var txt = "";
            for (let i = 0; i < data.data[1].length; i++) {
                var selectedKabKota = (kodeKabKota == data.data[1][i].domain_id ? 'selected' : '');
                if (data.data[1][i].domain_id.substr(2, 1) == 7) {
                    txt += "<option value=" + data.data[1][i].domain_id + " " + selectedKabKota + ">Kota " + data.data[1][i].domain_name + "</option>";
                } else {
                    txt += "<option value=" + data.data[1][i].domain_id + " " + selectedKabKota + ">Kabupaten " + data.data[1][i].domain_name + "</option>";
                }
            }

            $("#selectKabupatenKota").html(txt);

        });
    });

    $('#selectSubWilayah').on('change', function() {

        $.get("https://webapi.bps.go.id/v1/api/domain/type/kabbyprov/prov/" + this.value + "/key/24fb1b646304e23577aaad005eb40714/", function(data) {
            // console.log(data.data[1]);
            // console.log(data.data[1][0].domain_id);
            // console.log(data.data[1][0].domain_id.substr(2, 1));

            var txt = "";
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

            $.get("https://webapi.bps.go.id/v1/api/domain/type/prov/key/24fb1b646304e23577aaad005eb40714/", function(data) {
                // console.log(data.data[1][0].domain_name);
                // console.log(data.data[1].length);

                var txt = "<option value=''>-Pilih-</option>";
                for (let i = 0; i < data.data[1].length; i++) {
                    txt += "<option value=" + data.data[1][i].domain_id + ">" + data.data[1][i].domain_name + "</option>";
                }
                $("#selectSubWilayah").html(txt);
                $("#selectSubWilayahMobile").html(txt);
            });

            $(".form-group-sub-wilayah").show();
            $(".form-group-kabupaten-kota").hide();

        } else if (this.value == 'kabupatenkota') {

            $.get("https://webapi.bps.go.id/v1/api/domain/type/prov/key/24fb1b646304e23577aaad005eb40714/", function(data) {
                // console.log(data.data[1][0].domain_name);
                // console.log(data.data[1].length);

                var txt = "<option value=''>-Pilih-</option>";
                for (let i = 0; i < data.data[1].length; i++) {
                    txt += "<option value=" + data.data[1][i].domain_id + ">" + data.data[1][i].domain_name + "</option>";
                }
                $("#selectSubWilayah").html(txt);
                $("#selectSubWilayahMobile").html(txt);
            });

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


    function peta() {
        mapboxgl.accessToken = 'pk.eyJ1IjoiZnJhbnNhbGFtb25kYSIsImEiOiJja2NlZ2xtMjkwMzgxMzJubm9paGJ5dmMyIn0.QJc2VJF6md9CaTilCmgYag';
        url = "<?= base_url(); ?>/C_infographController/peta";
        //$('form#form_edit input[name="iduser"]').val();
        //var provinsi = $("#inp_pro");
        // var provinsi = $('form#form_s select[name="inp_pro"]').val();
        // data1 = "provinsi=" + $("#inp_pro").val();

        <?php if ($wilayah == 'nasional') { ?>
            data1 = "provinsi=1000&indikator=<?php echo $IndikatorTable[0]['id'] ?>";
            // {provinsi: 1000, indikator: name}
        <?php } elseif ($wilayah == 'provinsi') { ?>
            data1 = "provinsi=<?php echo $subWilayah[0]['id'] ?>&indikator=<?php echo $IndikatorTable[0]['id'] ?>";
        <?php } elseif ($wilayah == 'kabupatenkota') { ?>
            // data1 = "provinsi=<?php echo $subWilayahDaerah[0]['id'] ?>";
            data1 = "provinsi=<?php echo $subWilayah[0]['id'] ?>&indikator=<?php echo $IndikatorTable[0]['id'] ?>";
        <?php } ?>
        // alert(data1 + "&" + data2);

        jQuery.ajax({
            type: "POST", // HTTP method POST or GET
            url: url, //Where to make Ajax calls
            dataType: "text", // Data type, HTML, json etc.
            data: data1, //Form variables

            success: function(response) {
                var obj = jQuery.parseJSON(response);
                console.log(obj.peta);

                var zoomThreshold = 4;
                var map = new mapboxgl.Map({
                    container: 'map',
                    //style: 'mapbox://styles/mapbox/streets-v11',
                    style: 'mapbox://styles/mapbox/light-v10',
                    center: obj.js_tengah,
                    //center: [119.206479, -0.320152],
                    zoom: obj.js_zoom
                });
                let hoveredStateId = null;
                let clickedStateId = null;

                map.addControl(new mapboxgl.NavigationControl());
                map.on('load', function(e) {
                    map.addSource('maine', {
                        'type': 'geojson',
                        //'data': obj.js_geo
                        'data': obj.peta
                    });
                    map.addLayer({
                        'id': 'states-layer',
                        'type': 'fill',
                        'source': 'maine',
                        'paint': {
                            'fill-color': [
                                'interpolate',
                                ['linear'],
                                ['get', 'population'],
                                // [logical expression, ['get', 'data who will get'], ['get', 'data who will compare]]
                                // ['<', ['get', 'population'], ['get', 'nasional']]
                                obj.peta.features[0].properties.nasional - 0.0001,
                                'rgba(186, 6, 24, 1)', //merah
                                obj.peta.features[0].properties.nasional,
                                'rgba(250, 250, 7, 1)', //kuning
                            ],
                            'fill-opacity': [
                                'case',
                                ['boolean', ['feature-state', 'hover'], false],
                                1,
                                0.5
                            ],
                        }
                    });

                    var htmlLegend = '';

                    htmlLegend += '<div style="display: flex;">';
                    htmlLegend += '<div style="height: 20px; width: 20px; background-color: rgba(186, 6, 24, 1); margin-right: 20px;"></div>';
                    htmlLegend += '<p style="margin-bottom: 5px;"><b> < rata-rata nasional ' + obj.peta.features[0].properties.nasional + '</b></p>';
                    htmlLegend += '</div>';

                    htmlLegend += '<div style="display: flex;">';
                    htmlLegend += '<div style="height: 20px; width: 20px; background-color: rgba(250, 250, 7, 1); margin-right: 20px;"></div>';
                    htmlLegend += '<p style="margin-bottom: 5px;"><b> >= rata-rata nasional ' + obj.peta.features[0].properties.nasional + '</b></p>';
                    htmlLegend += '</div>';

                    htmlLegend += '<p><b>Satuan : </b>' + obj.peta.features[0].properties.satuan + '</p>';

                    document.getElementById('legend').innerHTML = htmlLegend;

                    // When the user moves their mouse over the state-fill layer, we'll update the
                    // feature state for the feature under the mouse.
                    map.on('mousemove', 'states-layer', (e) => {
                        // console.log(e.features[0].properties.target);
                        if (e.features.length > 0) {
                            if (hoveredStateId !== null) {
                                map.setFeatureState({
                                    source: 'maine',
                                    id: hoveredStateId
                                }, {
                                    hover: false
                                });
                            }
                            hoveredStateId = e.features[0].id;
                            map.setFeatureState({
                                source: 'maine',
                                id: hoveredStateId
                            }, {
                                hover: true
                            });
                        }
                    });

                    map.on('mousemove', 'states-layer', (e) => {
                        document.getElementById('pd').innerHTML = '<p>' + e.features[0].properties.NAME_2 + '</p>';
                        // document.getElementById('description').innerHTML = '<p style="margin-bottom: 2px;">' + e.features[0].properties.description + '</p>';
                    });

                    map.on('mouseleave', 'states-layer', (e) => {
                        document.getElementById('pd').innerHTML = '<p>Sorot kursor pada daerah</p>';
                        // document.getElementById('description').innerHTML = '<p><b>Keterangan</b></p>';
                    });

                    map.on('click', 'states-layer', (e) => {
                        document.getElementById('description').innerHTML = '<p style="margin-bottom: 2px;">' + e.features[0].properties.description + '</p>';
                    });

                    // map.on('mousemove', (event) => {
                    //     const states = map.queryRenderedFeatures(event.point, {
                    //         layers: ['statedata']
                    //     });
                    //     document.getElementById('pd').innerHTML = states.length ?
                    //         `<h3>${states[0].properties.name}</h3>` :
                    //         `<p>Hover over a state!</p>`;
                    // });

                    // When the mouse leaves the state-fill layer, update the feature state of the
                    // previously hovered feature.
                    map.on('mouseleave', 'states-layer', () => {
                        if (hoveredStateId !== null) {
                            map.setFeatureState({
                                source: 'maine',
                                id: hoveredStateId
                            }, {
                                hover: false
                            });
                        }
                        hoveredStateId = null;
                    });


                    // Add a black outline around the polygon.
                    map.addLayer({
                        'id': 'outline',
                        'type': 'line',
                        'source': 'maine',
                        'layout': {},
                        'paint': {
                            'line-color': '#000',
                            'line-width': [
                                'case',
                                ['boolean', ['feature-state', 'click'], false],
                                2,
                                0.5
                            ]
                        }
                    });

                    // map.on('click', 'states-layer', function(e) {
                    //     new mapboxgl.Popup()
                    //         .setLngLat(e.lngLat)
                    //         .setHTML(e.features[0].properties.description)
                    //         .addTo(map);
                    // });

                    // When the user clicks we'll update the
                    // feature state for the feature under the mouse.
                    map.on('click', 'states-layer', function(e) {
                        if (e.features.length > 0) {
                            if (clickedStateId) {
                                map.setFeatureState({
                                    source: 'maine',
                                    id: clickedStateId
                                }, {
                                    click: false
                                });
                            }
                            clickedStateId = e.features[0].id;
                            map.setFeatureState({
                                source: 'maine',
                                id: clickedStateId
                            }, {
                                click: true
                            });
                        }
                    });

                });

                //   $('div#div_header h3[name="judul').html(obj.judul);    
                //   $('div#form_nsl a[name="n_nsl"]').html(obj.nasional);
                //  $('div#form_nsl a[name="n_thn"]').html(obj.tahun_a);

            },
            error: function(xhr, ajaxOptions, thrownError) {
                loading.hide();
                alert(thrownError);
            }
        });
    }
    peta();

    $("#inp_pro").change(function(e) {
        e.preventDefault();
        peta();
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