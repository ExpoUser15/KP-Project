<!-- Main -->
<div id="main">

<!-- One -->
    <section id="one">
        <header class="major">
            <h2>Tentang kotak saran dan pelayanan surat online Kelurahan Pal Putih</h2>
        </header>
        <p>Anda dapat berbagi suara Anda melalui kotak saran. Setiap masukan Anda sangat penting untuk perubahan positif. Kami mendengar, kami peduli, dan kami berkomitmen untuk meningkatkan pelayanan kami. Surat online Pal Putih mempercepat proses administratif. Sekarang, pengurusan surat menjadi lebih efisien dan praktis.</p>
        <p style="margin: 0;">Hari Pelayanan: Senin - Jumat</p>
        <p>Jam Pelayanan: 09:00 - 14:00</p>
    </section>

    <section id="three">
        <h2>Kotak Saran</h2>
        <p>Sampaikan saran, kritik, atau keluhan Anda melalui kotak saran kami. Kami percaya bahwa keterbukaan adalah kunci menuju pelayanan yang lebih baik, dan setiap umpan balik Anda membantu kami menuju kesempurnaan. Jika anda mempunyai saran, kritik, dan lainnya silahkan mengisi form dibawah ini.</p>
        <div class="row">
            <div class="col-12 col-12-small">
                <form method="POST" action="pages/form/action.php?q=kotaksaran">
                    <div class="row gtr-uniform gtr-50" style="margin-bottom: 1.1rem;">
                    <input type="hidden" name="id" value="<?php echo 'ks-' . time(); ?>">
                        <div class="col-6 col-12-xsmall"><input type="text" name="nama"  placeholder="Nama" /></div>
                        <div class="col-6 col-12-xsmall"><input type="text" name="rtrw" placeholder="RT/RW" /></div>
                        <div class="col-6 col-12-xsmall"><input type="text" name="no_telp" placeholder="No Telepon" /></div>
                        <div class="col-6 col-12-xsmall">
                            <select name="kategori">
                                <option>Saran</option>
                                <option>Kritik</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div class="col-12"><textarea name="pesan" placeholder="Berikan Pesan" rows="4"></textarea></div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" name="submitSaran" value="Send Message" /></li>
                    </ul>
                </form>
            </div>
        </div>
    </section>

    <section id="three">
        <h2>Pelayanan Surat</h2>
        <p>Pelayanan surat online memberikan kemudahan dan efisiensi dalam proses administratif bagi masyarakat. Dengan akses mudah, transparansi, dan kualitas layanan yang meningkat, pelayanan surat online dapat menghemat waktu dan tenaga pengguna. Jika anda ingin membuat surat silahkan mengisi form dibawah ini.</p>
        <div class="row">
            <div class="col-8 col-12-small">
                <form method="POST" action="pages/form/action.php?q=surat" enctype="multipart/form-data">
                    <div class="row gtr-uniform gtr-50" style="margin-bottom: 1.1rem;">
                    <input type="hidden" value="<?php echo 's-'.time(); ?>" name="id">
                    <input type="hidden" value="Proses" name="status">
                        <div class="col-6 col-12-xsmall"><input type="text" name="nama" placeholder="Name" /></div>
                        <div class="col-6 col-12-xsmall"><input type="text" name="js" placeholder="Jenis Surat" /></div>
                        <div class="col-12 col-12-xsmall"><input type="text" name="no_telp" placeholder="No. Telepon" /></div>
                        <div class="col-12 col-12-xsmall"><label for="sp">Surat Pengantar RT/RW</label><input type="file" name="sp"  placeholder="Surat Pengantar" /></div>
                        <div class="col-6 col-12-xsmall"><label for="ktp">KTP</label><input type="file" name="ktp"/></div>
                        <div class="col-6 col-12-xsmall"><label for="kk">Kartu Keluarga</label><input type="file" name="kk" /></div>
                    </div>
                    <hr>
                    <ul class="actions">
                        <li><input type="submit" name="submitSurat" value="Send Message" /></li>
                    </ul>
                </form>
            </div>
            <div class="col-4 col-12-small">
                <ul class="labeled-icons">
                    <li>
                        <h3 class="icon solid fa-home"><span class="label">Address</span></h3>
                        Jl. Danau Maninjau,<br />
                        Kel. Pal Putih,<br />
                        Distrik Sorong Barat
                    </li>
                    <li>
                        <h3 class="icon solid fa-mobile-alt"><span class="label">Phone</span></h3>
                        0822-3923-1131
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>