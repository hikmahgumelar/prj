<!DOCTYPE html>
<html lang="en" ng-app="gapps">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gapps</title>
    <link href="../prj/css/bootstrap.min.css" rel="stylesheet">
    <link href="../prj/css/navbar/navbar.css" rel="stylesheet">
    <link href="../prj/css/blog-home.css" rel="stylesheet">
    <script src="../prj/js/jquery.min.js"></script>
    <script src="../prj/js/bootstrap.min.js"></script>
    <script src="../prj/angular/angular.min.js"></script>
    <script src="../prj/js/controller.js"></script>

</head>

<body>

<!-- Navigation -->
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <table>
       <tr>
         <td>
            <img src="../prj/images/logo.png" class="img-responsive" width="50" height="40">
         </td>
         <td>
           <a style="color:white;" class="navbar-brand" href="#">{G.Apps}</a>
         </td>
       </tr>
     </table>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Option<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#"><button class="btn btn-default login">  <span class="glyphicon glyphicon-lock"></span> Login </button></a></li>
        <li><a href="#"><button class="btn btn-success">  <span class="glyphicon glyphicon-user"></span> Daftar </button></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Page Content -->
    <div class="container">
        <div class="row">
                       
<!-- Blog Entries Column -->
    <div class="col-md-8" ng-controller="EventsController">
      <div>
<form ng-submit="proses()">
          <div  class="form-group form-group-sm col-md-3">

<select class="form-control input-sm select2-offscreen" id="asal" name="asal" ng-model="asal">
<option value="">
</option>
<option value="AKB">Aekloba (AKB), Labuhan Batu</option>
<option value="ATA">Alastuwa (ATA), Semarang</option>
<option value="ABR">Ambarawa (ABR), Lampung Tengah</option>
<option value="AK">Angke (AK), Angke</option>
<option value="AGO">Argopuro (AGO), Argopuro</option>
<option value="AJ">Arjasa (AJ), Arjasa</option>
<option value="AWN">Arjawinangun (AWN), Cirebon</option>
<option value="AW">Awipari (AW), Tasikmalaya</option>
<option value="BBD">Babadan (BBD), Madiun</option>
<option value="BBK">Babakan (BBK), Cirebon</option>
<option value="BBT">Babat (BBT), Lamongan</option>
<option value="BGR">Bagor (BGR), Nganjuk</option>
<option value="BJL">Bajalinggei (BJL), Serdang Bedagai</option>
<option value="BMB">Bamban (BMB), Bamban</option>
<option value="BAP">Bandar Kalipah (BAP), Deli Serdang</option>
<option value="BDT">Bandar Tinggi (BDT), Pematang Siantar</option>
<option value="BD">Bandung (BD), Bandung</option>
<option value="BG">Bangil (BG), Pasuruan</option>
<option value="BDW">Bangoduwa (BDW), Cirebon</option>
<option value="BSS">Bangsalsari (BSS), Bangsalsari</option>
<option value="BJR">Banjar (BJR), Banjar</option>
<option value="BJI">Banjarsari (BJI), Banjarsari</option>
<option value="BW">Banyuwangi Baru (BW), Banyuwangi</option>
<option value="BAT">Barat (BAT), Magetan</option>
<option value="BRN">Baron (BRN), Nganjuk</option>
<option value="BTG">Batang (BTG), Batang</option>
<option value="BTK">Batang Kuis (BTK), Deli Serdang</option>
<option value="BTT">Batu Tulis (BTT), Batu Tulis</option>
<option value="BTA">Baturaja (BTA), Ogan Komering Ulu</option>
<option value="BKS">Bekasi (BKS), Bekasi</option>
<option value="BKI">Bekri (BKI), Bekri</option>
<option value="BNW">Benowo (BNW), Benowo</option>
<option value="BIJ">Binjai (BIJ), Binjai</option>
<option value="BBA">Blambanganpagar (BBA), Blambanganpagar</option>
<option value="BBU">Blambanganumpu (BBU), Way Kanan</option>
<option value="BMG">Blimbing (BMG), Malang</option>
<option value="BIB">Blimbing Pendopo (BIB), Blimbingpendopo</option>
<option value="BL">Blitar (BL), Blitar</option>
<option value="BOO">Bogor (BOO), Bogor</option>
<option value="BH">Boharan (BH), Sidoarjo</option>
<option value="BJ">Bojonegoro (BJ), Bojonegoro</option>
<option value="BJG">Bojong (BJG), Ciamis</option>
<option value="BWO">Bowerno (BWO), Bowerno</option>
<option value="BBN">Brambanan (BBN), Klaten</option>
<option value="BB">Brebes (BB), Brebes</option>
<option value="BBG">Brumbung (BBG), Demak</option>
<option value="BKA">Bulakamba (BKA), Brebes</option>
<option value="BMA">Bumiayu (BMA), Brebes</option>
<option value="BGM">Bungamas (BGM), Bungamas</option>
<option value="CMS">Candimas (CMS), Candimas</option>
<option value="CRB">Caruban (CRB), Madiun</option>
<option value="CT">Catang (CT), Catang</option>
<option value="CU">Cepu (CU), Blora</option>
<option value="CME">Cerme (CME), Cerme</option>
<option value="CI">Ciamis (CI), Ciamis</option>
<option value="CJ">Cianjur (CJ), Cianjur</option>
<option value="CAW">Ciawi (CAW), Tasikmalaya</option>
<option value="CBD">Cibadak (CBD), Cibadak</option>
<option value="CB">Cibatu (CB), Garut</option>
<option value="CBB">Cibeber (CBB), Cibeber</option>
<option value="CBR">Cibungur (CBR), Cibungur</option>
<option value="CCL">Cicalengka (CCL), Bandung</option>
<option value="CCY">Cicayur (CCY), Cicayur</option>
<option value="CCR">Cicurug (CCR), Cicurug</option>
<option value="CA">Ciganea (CA), Ciganea</option>
<option value="CGB">Cigombong (CGB), Cigombong</option>
<option value="CD">Cikadongdong (CD), Bandung Barat</option>
<option value="CKP">Cikampek (CKP), Karawang</option>
<option value="CKR">Cikarang (CKR), Cikarang</option>
<option value="CKL">Cikeusal (CKL), Cikeusal</option>
<option value="CTH">Cikudapateuh (CTH), Cikudapateuh</option>
<option value="CP">Cilacap (CP), Cilacap</option>
<option value="CLK">Cilaku (CLK), Cilaku</option>
<option value="CLE">Cilame (CLE), Cilame</option>
<option value="CLD">Ciledug (CLD), Cirebon</option>
<option value="CLH">Cilegeh (CLH), Indramayu</option>
<option value="CLG">Cilegon (CLG), Cilegon</option>
<option value="CJT">Cilejit (CJT), Cilejit</option>
<option value="CMI">Cimahi (CMI), Cimahi</option>
<option value="CMK">Cimekar (CMK), Cimekar</option>
<option value="CMD">Cimindi (CMD), Cimindi</option>
<option value="CPI">Cipari (CPI), Cilacap</option>
<option value="CPD">Cipeundeuy (CPD), Garut</option>
<option value="CRA">Cipunegara (CRA), Subang</option>
<option value="CN">Cirebon (CN), Cirebon</option>
<option value="CNP">Cirebon Prujakan (CNP), Cirebon</option>
<option value="CRG">Cireungas (CRG), Cireungas</option>
<option value="CIR">Ciroyom (CIR), Ciroyom</option>
<option value="CSA">Cisaat (CSA), Cisaat</option>
<option value="CSK">Cisauk (CSK), Cisauk</option>
<option value="CG">Cisomang (CG), Cisomang</option>
<option value="CTR">Citeras (CTR), Citeras</option>
<option value="CO">Comal (CO), Pemalang</option>
<option value="CRM">Curahmalang (CRM), Curahmalang</option>
<option value="DAR">Daru (DAR), Daru</option>
<option value="DWN">Dawuan (DWN), Dawuan</option>
<option value="DEN">Denpasar (DEN), Denpasar</option>
<option value="DMR">Dolokmerangir (DMR), Simalungun</option>
<option value="DPL">Doplang (DPL), Blora</option>
<option value="DD">Duduk (DD), Duduk</option>
<option value="DUK">Duku (DUK), Duku</option>
<option value="DU">Duri (DU), Duri</option>
<option value="GK">Gadobangkong (GK), Gadobangkong</option>
<option value="GMR" selected>Gambir (GMR), Jakarta Pusat</option>
<option value="GDS">Gandasolih (GDS), Gandasolih</option>
<option value="GDM">Gandrungmangun (GDM), Cilacap</option>
<option value="GRN">Garahan (GRN), Garahan</option>
<option value="GRM">Garum (GRM), Blitar</option>
<option value="GDG">Gedangan (GDG), Sidoarjo</option>
<option value="GDB">Gedebage (GDB), Bandung</option>
<option value="GEB">Gembong (GEB), Gembong</option>
<option value="GG">Geneng (GG), Ngawi</option>
<option value="GHM">Giham (GHM), Giham</option>
<option value="GLM">Glenmore (GLM), Banyuwangi</option>
<option value="GB">Gombong (GB), Kebumen</option>
<option value="GI">Grati (GI), Pasuruan</option>
<option value="GM">Gumilir (GM), Cilacap</option>
<option value="GD">Gundih (GD), Grobogan</option>
<option value="GNM">Gunungmegang (GNM), Muara Enim</option>
<option value="HJP">Hajipemanggilan (HJP), Hajipemanggilan</option>
<option value="HGL">Haurgeulis (HGL), Indramayu</option>
<option value="HRP">Haurpugur (HRP), Bandung</option>
<option value="HL">Hengelo (HL), Karo</option>
<option value="IJ">Ijo (IJ), Kebumen</option>
<option value="IDY">Indralaya (IDY), Indralaya</option>
<option value="JAKK">Jakarta Kota (JAKK), Jakarta Barat</option>
<option value="JBN">Jambon (JBN), Jambon</option>
<option value="JBU">Jambu Baru (JBU), Jambu Baru</option>
<option value="JTB">Jatibarang (JTB), Indramayu</option>
<option value="JNG">Jatinegara (JNG), Jakarta Timur</option>
<option value="JTR">Jatiroto (JTR), Jember</option>
<option value="JR">Jember (JR), Jember</option>
<option value="JN">Jenar (JN), Purworejo</option>
<option value="JRL">Jeruklegi (JRL), Cilacap</option>
<option value="JG">Jombang (JG), Jombang</option>
<option value="KAG">Kalibalangan (KAG), Kalibalangan</option>
<option value="KBR">Kalibaru (KBR), Banyuwangi</option>
<option value="KBD">Kalibodri (KBD), Kendal</option>
<option value="KLT">Kalisat (KLT), Jember</option>
<option value="KSL">Kalisetail (KSL), Banyuwangi</option>
<option value="KIT">Kalitidu (KIT), Bojonegoro</option>
<option value="KLN">Kaliwungu (KLN), Kendal</option>
<option value="KPB">Kampung Bandan (KPB), Kampung Bandan</option>
<option value="KDA">Kandangan (KDA), Kandangan</option>
<option value="KPS">Kapas (KPS), Kapas</option>
<option value="KRAI">Karang Sari (KRAI), Karang Sari</option>
<option value="KE">Karang Tengah (KE), Karang Tengah</option>
<option value="KRA">Karangantu (KRA), Karangantu</option>
<option value="KA">Karanganyar (KA), Kebumen</option>
<option value="KNE">Karangasem (KNE), Banyuwangi</option>
<option value="KGT">Karangjati (KGT), Grobogan</option>
<option value="KRR">Karangsari (KRR), Banyumas</option>
<option value="KRW">Karangsuwung (KRW), Cirebon</option>
<option value="KW">Karawang (KW), Karawang</option>
<option value="KWG">Kawunganten (KWG), Cilacap</option>
<option value="KBS">Kebasen (KBS), Banyumas</option>
<option value="KBY">Kebayoran (KBY), Kebayoran</option>
<option value="KRO">Kebonromo (KRO), Sragen</option>
<option value="KM">Kebumen (KM), Kebumen</option>
<option value="KDN">Kedinding (KDN), Kedinding</option>
<option value="KD">Kediri (KD), Kediri</option>
<option value="KAB">Kedokangabus (KAB), Indramayu</option>
<option value="KDB">Kedungbanteng (KDB), Sragen</option>
<option value="KG">Kedunggalar (KG), Ngawi</option>
<option value="KDH">Kedunggedeh (KDH), Kedunggedeh</option>
<option value="KEJ">Kedungjati (KEJ), Grobogan</option>
<option value="KMO">Kemayoran (KMO), Kemayoran</option>
<option value="KMR">Kemiri (KMR), Kemiri</option>
<option value="KJ">Kemranjen (KJ), Banyumas</option>
<option value="KPN">Kepanjen (KPN), Malang</option>
<option value="KPT">Kertapati (KPT), Palembang</option>
<option value="KTM">Kertasemaya (KTM), Indramayu</option>
<option value="KTS">Kertosono (KTS), Nganjuk</option>
<option value="KSB">Kesamben (KSB), Blitar</option>
<option value="KGG">Ketanggungan (KGG), Brebes</option>
<option value="KGB">Ketanggungan Barat (KGB), Brebes</option>
<option value="KTP">Ketapang (KTP), Ketapang</option>
<option value="KAC">Kiaracondong (KAC), Bandung</option>
<option value="KIS">Kisaran (KIS), Asahan</option>
<option value="KK">Klakah (KK), Lumajang</option>
<option value="KLI">Klari (KLI), Klari</option>
<option value="KT">Klaten (KT), Klaten</option>
<option value="KOS">Kosambi (KOS), Kosambi</option>
<option value="KB">Kotabumi (KB), Kotabumi</option>
<option value="KOP">Kotapadang (KOP), Kotapadang</option>
<option value="KTK">Kotok (KTK), Jember</option>
<option value="KNN">Kradenan (KNN), Kradenan</option>
<option value="KRS">Kras (KRS), Kras</option>
<option value="KEN">Krenceng (KEN), Krenceng</option>
<option value="KNS">Krengseng (KNS), Batang</option>
<option value="KRT">Kretek (KRT), Brebes</option>
<option value="KRN">Krian (KRN), Sidoarjo</option>
<option value="KYA">Kroya (KYA), Cilacap</option>
<option value="KI">Kuraitaji (KI), Kuraitaji</option>
<option value="KTA">Kutoarjo (KTA), Purworejo</option>
<option value="KWN">Kutowinangun (KWN), Kebumen</option>
<option value="LAR">Labuanratu (LAR), Labuanratu</option>
<option value="LT">Lahat (LT), Lahat</option>
<option value="LMG">Lamongan (LMG), Lamongan</option>
<option value="LP">Lampegan (LP), Lampegan</option>
<option value="LN">Langen (LN), Banjar</option>
<option value="LR">Larangan (LR), Brebes</option>
<option value="LRA">Larangan (LRA), Larangan</option>
<option value="LW">Lawang (LW), Malang</option>
<option value="LBJ">Lebakjero (LBJ), Bandung</option>
<option value="LBG">Lebeng (LBG), Cilacap</option>
<option value="LEC">Leces (LEC), Leces</option>
<option value="LDO">Ledokombo (LDO), Ledokombo</option>
<option value="LL">Leles (LL), Garut</option>
<option value="LMB">Lemahabang (LMB), Lemahabang</option>
<option value="LPN">Lempuyangan (LPN), Yogyakarta</option>
<option value="LO">Leuwi Goong (LO), Leuwi Goong</option>
<option value="LDT">Lidah Tanah (LDT), Lidah Tanah</option>
<option value="LMP">Limapuluh (LMP), Batu Bara</option>
<option value="LG">Linggapura (LG), Brebes</option>
<option value="LOS">Losari (LOS), Cirebon</option>
<option value="LA">Lubuk Alung (LA), Lubuk Alung</option>
<option value="LLG">Lubuk Linggau (LLG), Lubuk Linggau</option>
<option value="LBP">Lubukpakam (LBP), Deli Serdang</option>
<option value="LRM">Lubukrukam (LRM), Lubukrukam</option>
<option value="LWG">Luwung (LWG), Cirebon</option>
<option value="MN">Madiun (MN), Madiun</option>
<option value="MGW">Maguwo (MGW), Sleman</option>
<option value="MJ">Maja (MJ), Maja</option>
<option value="ML">Malang (ML), Malang</option>
<option value="MLK">Malang Kota Lama (MLK), Malang</option>
<option value="MLS">Malasan (MLS), Malasan</option>
<option value="MRI">Manggarai (MRI), Jakarta Selatan</option>
<option value="MNJ">Manonjaya (MNJ), Tasikmalaya</option>
<option value="MA">Maos (MA), Cilacap</option>
<option value="MBU">Marbau (MBU), Labuhan Batu</option>
<option value="MP">Martapura (MP), Ogan Komering Ulu Timur</option>
<option value="MSR">Masaran (MSR), Sragen</option>
<option value="MSG">Maseng (MSG), Maseng</option>
<option value="MSI">Maswati (MSI), Maswati</option>
<option value="MDN">Medan (MDN), Medan</option>
<option value="MLW">Meluwung (MLW), Cilacap</option>
<option value="MBM">Membang Muda (MBM), Labuhan Batu</option>
<option value="MER">Merak (MER), Merak</option>
<option value="MGN">Minggiran (MGN), Minggiran</option>
<option value="MR">Mojokerto (MR), Mojokerto</option>
<option value="MRW">Mrawan (MRW), Mrawan</option>
<option value="ME">Muara Enim (ME), Muara Enim</option>
<option value="MSL">Muarasaling (MSL), Muarasaling</option>
<option value="NG">Nagreg (NG), Bandung</option>
<option value="NRR">Negararatu (NRR), Negararatu</option>
<option value="NGN">Negeriagung (NGN), Negeriagung</option>
<option value="NDL">Ngadiluwih (NDL), Ngadiluwih</option>
<option value="NJ">Nganjuk (NJ), Nganjuk</option>
<option value="NB">Ngebruk (NB), Ngebruk</option>
<option value="NBO">Ngrombro (NBO), Grobogan</option>
<option value="NT">Ngunut (NT), Tulungagung</option>
<option value="NTG">Notog (NTG), Banyumas</option>
<option value="PDL">Padalarang (PDL), Bandung Barat</option>
<option value="PD">Padang (PD), Padang</option>
<option value="PHA">Padanghalaban (PHA), Labuhan Batu</option>
<option value="PGG">Pagergunung (PGG), Pagergunung</option>
<option value="PSI">Pakishaji (PSI), Pakisaji</option>
<option value="PLG">Paledang (PLG), Paledang</option>
<option value="PLM">Palmerah (PLM), Palmerah</option>
<option value="PME">Pamingke (PME), Labuhan Batu</option>
<option value="PNW">Paninjawan (PNW), Paninjawan</option>
<option value="PNL">Panunggalan (PNL), Panunggalan</option>
<option value="PPR">Papar (PPR), Kediri</option>
<option value="PMN">Pariaman (PMN), Pariaman</option>
<option value="PA">Paron (PA), Ngawi</option>
<option value="PRK">Parung Kuda (PRK), Parung Kuda</option>
<option value="PRP">Parung Panjang (PRP), Parung Panjang</option>
<option value="PSE">Pasar Senen (PSE), Jakarta Pusat</option>
<option value="PS">Pasuruan (PS), Pasuruan</option>
<option value="PAT">Patuguran (PAT), Brebes</option>
<option value="PAK">Pauhkambar (PAK), Pauhkambar</option>
<option value="PGB">Pegadenbaru (PGB), Subang</option>
<option value="PK">Pekalongan (PK), Pekalongan</option>
<option value="PML">Pemalang (PML), Pemalang</option>
<option value="PBA">Perbaungan (PBA), Serdang Bedagai</option>
<option value="PRA">Perlanaan (PRA), Perlanaan</option>
<option value="PTA">Petarukan (PTA), Pemalang</option>
<option value="PTR">Peterongan (PTR), Jombang</option>
<option value="PLB">Plabuan (PLB), Batang</option>
<option value="PLD">Plered (PLD), Cirebon</option>
<option value="PGJ">Pogajih (PGJ), Pogajih</option>
<option value="PDJ">Pondok Ranji (PDJ), Pondok Ranji</option>
<option value="PR">Porong (PR), Porong</option>
<option value="PBM">Prabumulih (PBM), Prabumulih</option>
<option value="PRB">Prembun (PRB), Kebumen</option>
<option value="PB">Probolinggo (PB), Probolinggo</option>
<option value="PPK">Prupuk (PPK), Tegal</option>
<option value="PC">Pucuk (PC), Pucuk</option>
<option value="PUR">Puluraja (PUR), Simalungun</option>
<option value="PWK">Purwakarta (PWK), Purwakarta</option>
<option value="PWA">Purwoasri (PWA), Purwoasri</option>
<option value="PWT">Purwokerto (PWT), Banyumas</option>
<option value="PWS">Purwosari (PWS), Surakarta (Solo)</option>
<option value="RJP">Rajapolah (RJP), Tasikmalaya</option>
<option value="RBP">Rambipuji (RBP), Jember</option>
<option value="RPH">Rampah (RPH), Serdang Bedagai</option>
<option value="RCK">Rancaekek (RCK), Bandung</option>
<option value="RDG">Randegan (RDG), Banyumas</option>
<option value="RDN">Randegan (RDN), Randegan</option>
<option value="RDA">Randuagung (RDA), Randuagung</option>
<option value="RBG">Randublatung (RBG), Blora</option>
<option value="RK">Rangkasbitung (RK), Lebak</option>
<option value="RAP">Rantau Prapat (RAP), Labuhan Batu</option>
<option value="RJS">Rejosari (RJS), Lampung Selatan</option>
<option value="RJ">Rejotangan (RJ), Rejotangan</option>
<option value="RH">Rendeh (RH), Bandung Barat</option>
<option value="RGS">Rengas (RGS), Rengas</option>
<option value="RGP">Rogojampi (RGP), Banyuwangi</option>
<option value="SAD">Sadang (SAD), Purwakarta</option>
<option value="SLM">Salem (SLM), Salem</option>
<option value="SRD">Saradan (SRD), Madiun</option>
<option value="SKT">Sasaksaat (SKT), Sasaksaat</option>
<option value="SNA">Saungnaga (SNA), Saungnaga</option>
<option value="SBJ">Seibejangkar (SBJ), Batu Bara</option>
<option value="SMC">Semarang Poncol (SMC), Semarang</option>
<option value="SMT">Semarang Tawang (SMT), Semarang</option>
<option value="SMB">Sembung (SMB), Jombang</option>
<option value="SPL">Sempolan (SPL), Sempolan</option>
<option value="STL">Sentolo (STL), Kulon Progo</option>
<option value="SPJ">Sepanjang (SPJ), Sidoarjo</option>
<option value="SG">Serang (SG), Serang</option>
<option value="SRP">Serpong (SRP), Serpong</option>
<option value="SIR">Siantar (SIR), Pematang Siantar</option>
<option value="SDR">Sidareja (SDR), Cilacap</option>
<option value="SDA">Sidoarjo (SDA), Sidoarjo</option>
<option value="SKP">Sikampuh (SKP), Cilacap</option>
<option value="SDU">Sindanglaut (SDU), Cirebon</option>
<option value="SGJ">Singojuruh (SGJ), Singojuruh</option>
<option value="SGS">Singosari (SGS), Singosari</option>
<option value="SLW">Slawi (SLW), Slawi</option>
<option value="SLO">Solobalapan (SLO), Surakarta (Solo)</option>
<option value="SK">Solojebres (SK), Surakarta (Solo)</option>
<option value="SGG">Songgom (SGG), Brebes</option>
<option value="SR">Sragen (SR), Sragen</option>
<option value="SRI">Sragi (SRI), Pekalongan</option>
<option value="SWT">Srowot (SWT), Klaten</option>
<option value="SRW">Sruweng (SRW), Kebumen</option>
<option value="SDM">Sudimara (SDM), Sudimara</option>
<option value="SI">Sukabumi (SI), Sukabumi</option>
<option value="SUT">Sukatani (SUT), Sukatani</option>
<option value="SKM">Sukomoro (SKM), Sukomoro</option>
<option value="SKJ">Sukorejo (SKJ), Sukorejo</option>
<option value="SLS">Sulusuban (SLS), Lampung Selatan</option>
<option value="SBL">Sumbergempol (SBL), Sumbergempol</option>
<option value="SUM">Sumberlawang (SUM), Sragen</option>
<option value="SBP">Sumberpucung (SBP), Malang</option>
<option value="SRJ">Sumberrejo (SRJ), Bojonegoro</option>
<option value="SWD">Sumberwadung (SWD), Banyuwangi</option>
<option value="SLR">Sumlaran (SLR), Sumlaran</option>
<option value="SBO">Sumobito (SBO), Jombang</option>
<option value="SPH">Sumpiuh (SPH), Banyumas</option>
<option value="SGU">Surabaya Gubeng (SGU), Surabaya</option>
<option value="SGUX">Surabaya Gubeng (SGUX), Surabaya Gubengx</option>
<option value="SB">Surabaya Kota (SB), Surabaya</option>
<option value="SBI">Surabaya Pasar Turi (SBI), Surabaya</option>
<option value="SD">Surodadi (SD), Surodadi</option>
<option value="SS">Susuhan (SS), Susuhan</option>
<option value="TAB">Tabing (TAB), Tabing</option>
<option value="TAL">Talun (TAL), Blitar</option>
<option value="TBK">Tambak (TBK), Banyumas</option>
<option value="TB">Tambun (TB), Tambun</option>
<option value="THB">Tanah Abang (THB), Jakarta Pusat</option>
<option value="TES">Tandes (TES), Tandes</option>
<option value="TNG">Tangerang (TNG), Tangerang</option>
<option value="TGL">Tanggul (TGL), Jember</option>
<option value="TGA">Tanggulangin (TGA), Tanggulangin</option>
<option value="TGN">Tanjung (TGN), Brebes</option>
<option value="TPK">Tanjung Priuk (TPK), Jakarta Utara</option>
<option value="TNB">Tanjungbalai (TNB), Tanjung Balai</option>
<option value="TNK">Tanjungkarang (TNK), Bandar Lampung</option>
<option value="TJS">Tanjungrasa (TJS), Subang</option>
<option value="TRK">Tarik (TRK), Sidoarjo</option>
<option value="TSM">Tasikmalaya (TSM), Tasikmalaya</option>
<option value="TBI">Tebing Tinggi (TBI), Tebing Tinggi</option>
<option value="TI">Tebing Tinggi (TI), Tebing Tinggi</option>
<option value="TG">Tegal (TG), Tegal</option>
<option value="TGI">Tegineneng (TGI), Tegineneng</option>
<option value="TW">Telawa (TW), Boyolali</option>
<option value="TGR">Temuguruh (TGR), Banyuwangi</option>
<option value="TEJ">Tenjo (TEJ), Tenjo</option>
<option value="TIS">Terisi (TIS), Indramayu</option>
<option value="TGS">Tigaraksa (TGS), Tigaraksa</option>
<option value="TIG">Tigaraksa (TIG), Tigaraksa</option>
<option value="TOJB">Tonjong Baru (TOJB), Tonjong Baru</option>
<option value="YK">Tugu Yogyakarta (YK), Yogyakarta</option>
<option value="TA">Tulungagung (TA), Tulungagung</option>
<option value="TLY">Tulungbuyut (TLY), Tulungbuyut</option>
<option value="UJM">Ujanmas (UJM), Ujanmas</option>
<option value="UJN">Ujungnegoro (UJN), Ujungnegoro</option>
<option value="WDU">Wadu (WDU), Wadu</option>
<option value="WLT">Walantaka (WLT), Walantaka</option>
<option value="WK">Walikukun (WK), Ngawi</option>
<option value="WR">Waru (WR), Waru</option>
<option value="WDW">Waruduwur (WDW), Cirebon</option>
<option value="WB">Warung Bandrek (WB), Garut</option>
<option value="WT">Wates (WT), Kulon Progo</option>
<option value="WAY">Waytuba (WAY), Waytuba</option>
<option value="WLR">Weleri (WLR), Kendal</option>
<option value="WIL">Wilangan (WIL), Nganjuk</option>
<option value="WG">Wlingi (WG), Blitar</option>
<option value="WN">Wonokerto (WN), Wonokerto</option>
<option value="WO">Wonokromo (WO), Surabaya</option>
<option value="WOX">Wonokromox (WOX), Wonokromox</option>
<option value="WNS">Wonosari (WNS), Kebumen</option>
</select>
</div>
<div class="form-group form-group-sm col-md-3">

<select class="form-control input-sm select2-offscreen" id="tujuan" name="tujuan" ng-model="tujuan">
<option value="">
</option>
<option value="AKB">Aekloba (AKB), Labuhan Batu</option>
<option value="ATA">Alastuwa (ATA), Semarang</option>
<option value="ABR">Ambarawa (ABR), Lampung Tengah</option>
<option value="AK">Angke (AK), Angke</option>
<option value="AGO">Argopuro (AGO), Argopuro</option>
<option value="AJ">Arjasa (AJ), Arjasa</option>
<option value="AWN">Arjawinangun (AWN), Cirebon</option>
<option value="AW">Awipari (AW), Tasikmalaya</option>
<option value="BBD">Babadan (BBD), Madiun</option>
<option value="BBK">Babakan (BBK), Cirebon</option>
<option value="BBT">Babat (BBT), Lamongan</option>
<option value="BGR">Bagor (BGR), Nganjuk</option>
<option value="BJL">Bajalinggei (BJL), Serdang Bedagai</option>
<option value="BMB">Bamban (BMB), Bamban</option>
<option value="BAP">Bandar Kalipah (BAP), Deli Serdang</option>
<option value="BDT">Bandar Tinggi (BDT), Pematang Siantar</option>
<option value="BD" selected>Bandung (BD), Bandung</option>
<option value="BG">Bangil (BG), Pasuruan</option>
<option value="BDW">Bangoduwa (BDW), Cirebon</option>
<option value="BSS">Bangsalsari (BSS), Bangsalsari</option>
<option value="BJR">Banjar (BJR), Banjar</option>
<option value="BJI">Banjarsari (BJI), Banjarsari</option>
<option value="BW">Banyuwangi Baru (BW), Banyuwangi</option>
<option value="BAT">Barat (BAT), Magetan</option>
<option value="BRN">Baron (BRN), Nganjuk</option>
<option value="BTG">Batang (BTG), Batang</option>
<option value="BTK">Batang Kuis (BTK), Deli Serdang</option>
<option value="BTT">Batu Tulis (BTT), Batu Tulis</option>
<option value="BTA">Baturaja (BTA), Ogan Komering Ulu</option>
<option value="BKS">Bekasi (BKS), Bekasi</option>
<option value="BKI">Bekri (BKI), Bekri</option>
<option value="BNW">Benowo (BNW), Benowo</option>
<option value="BIJ">Binjai (BIJ), Binjai</option>
<option value="BBA">Blambanganpagar (BBA), Blambanganpagar</option>
<option value="BBU">Blambanganumpu (BBU), Way Kanan</option>
<option value="BMG">Blimbing (BMG), Malang</option>
<option value="BIB">Blimbing Pendopo (BIB), Blimbingpendopo</option>
<option value="BL">Blitar (BL), Blitar</option>
<option value="BOO">Bogor (BOO), Bogor</option>
<option value="BH">Boharan (BH), Sidoarjo</option>
<option value="BJ">Bojonegoro (BJ), Bojonegoro</option>
<option value="BJG">Bojong (BJG), Ciamis</option>
<option value="BWO">Bowerno (BWO), Bowerno</option>
<option value="BBN">Brambanan (BBN), Klaten</option>
<option value="BB">Brebes (BB), Brebes</option>
<option value="BBG">Brumbung (BBG), Demak</option>
<option value="BKA">Bulakamba (BKA), Brebes</option>
<option value="BMA">Bumiayu (BMA), Brebes</option>
<option value="BGM">Bungamas (BGM), Bungamas</option>
<option value="CMS">Candimas (CMS), Candimas</option>
<option value="CRB">Caruban (CRB), Madiun</option>
<option value="CT">Catang (CT), Catang</option>
<option value="CU">Cepu (CU), Blora</option>
<option value="CME">Cerme (CME), Cerme</option>
<option value="CI">Ciamis (CI), Ciamis</option>
<option value="CJ">Cianjur (CJ), Cianjur</option>
<option value="CAW">Ciawi (CAW), Tasikmalaya</option>
<option value="CBD">Cibadak (CBD), Cibadak</option>
<option value="CB">Cibatu (CB), Garut</option>
<option value="CBB">Cibeber (CBB), Cibeber</option>
<option value="CBR">Cibungur (CBR), Cibungur</option>
<option value="CCL">Cicalengka (CCL), Bandung</option>
<option value="CCY">Cicayur (CCY), Cicayur</option>
<option value="CCR">Cicurug (CCR), Cicurug</option>
<option value="CA">Ciganea (CA), Ciganea</option>
<option value="CGB">Cigombong (CGB), Cigombong</option>
<option value="CD">Cikadongdong (CD), Bandung Barat</option>
<option value="CKP">Cikampek (CKP), Karawang</option>
<option value="CKR">Cikarang (CKR), Cikarang</option>
<option value="CKL">Cikeusal (CKL), Cikeusal</option>
<option value="CTH">Cikudapateuh (CTH), Cikudapateuh</option>
<option value="CP">Cilacap (CP), Cilacap</option>
<option value="CLK">Cilaku (CLK), Cilaku</option>
<option value="CLE">Cilame (CLE), Cilame</option>
<option value="CLD">Ciledug (CLD), Cirebon</option>
<option value="CLH">Cilegeh (CLH), Indramayu</option>
<option value="CLG">Cilegon (CLG), Cilegon</option>
<option value="CJT">Cilejit (CJT), Cilejit</option>
<option value="CMI">Cimahi (CMI), Cimahi</option>
<option value="CMK">Cimekar (CMK), Cimekar</option>
<option value="CMD">Cimindi (CMD), Cimindi</option>
<option value="CPI">Cipari (CPI), Cilacap</option>
<option value="CPD">Cipeundeuy (CPD), Garut</option>
<option value="CRA">Cipunegara (CRA), Subang</option>
<option value="CN">Cirebon (CN), Cirebon</option>
<option value="CNP">Cirebon Prujakan (CNP), Cirebon</option>
<option value="CRG">Cireungas (CRG), Cireungas</option>
<option value="CIR">Ciroyom (CIR), Ciroyom</option>
<option value="CSA">Cisaat (CSA), Cisaat</option>
<option value="CSK">Cisauk (CSK), Cisauk</option>
<option value="CG">Cisomang (CG), Cisomang</option>
<option value="CTR">Citeras (CTR), Citeras</option>
<option value="CO">Comal (CO), Pemalang</option>
<option value="CRM">Curahmalang (CRM), Curahmalang</option>
<option value="DAR">Daru (DAR), Daru</option>
<option value="DWN">Dawuan (DWN), Dawuan</option>
<option value="DEN">Denpasar (DEN), Denpasar</option>
<option value="DMR">Dolokmerangir (DMR), Simalungun</option>
<option value="DPL">Doplang (DPL), Blora</option>
<option value="DD">Duduk (DD), Duduk</option>
<option value="DUK">Duku (DUK), Duku</option>
<option value="DU">Duri (DU), Duri</option>
<option value="GK">Gadobangkong (GK), Gadobangkong</option>
<option value="GMR">Gambir (GMR), Jakarta Pusat</option>
<option value="GDS">Gandasolih (GDS), Gandasolih</option>
<option value="GDM">Gandrungmangun (GDM), Cilacap</option>
<option value="GRN">Garahan (GRN), Garahan</option>
<option value="GRM">Garum (GRM), Blitar</option>
<option value="GDG">Gedangan (GDG), Sidoarjo</option>
<option value="GDB">Gedebage (GDB), Bandung</option>
<option value="GEB">Gembong (GEB), Gembong</option>
<option value="GG">Geneng (GG), Ngawi</option>
<option value="GHM">Giham (GHM), Giham</option>
<option value="GLM">Glenmore (GLM), Banyuwangi</option>
<option value="GB">Gombong (GB), Kebumen</option>
<option value="GI">Grati (GI), Pasuruan</option>
<option value="GM">Gumilir (GM), Cilacap</option>
<option value="GD">Gundih (GD), Grobogan</option>
<option value="GNM">Gunungmegang (GNM), Muara Enim</option>
<option value="HJP">Hajipemanggilan (HJP), Hajipemanggilan</option>
<option value="HGL">Haurgeulis (HGL), Indramayu</option>
<option value="HRP">Haurpugur (HRP), Bandung</option>
<option value="HL">Hengelo (HL), Karo</option>
<option value="IJ">Ijo (IJ), Kebumen</option>
<option value="IDY">Indralaya (IDY), Indralaya</option>
<option value="JAKK">Jakarta Kota (JAKK), Jakarta Barat</option>
<option value="JBN">Jambon (JBN), Jambon</option>
<option value="JBU">Jambu Baru (JBU), Jambu Baru</option>
<option value="JTB">Jatibarang (JTB), Indramayu</option>
<option value="JNG">Jatinegara (JNG), Jakarta Timur</option>
<option value="JTR">Jatiroto (JTR), Jember</option>
<option value="JR">Jember (JR), Jember</option>
<option value="JN">Jenar (JN), Purworejo</option>
<option value="JRL">Jeruklegi (JRL), Cilacap</option>
<option value="JG">Jombang (JG), Jombang</option>
<option value="KAG">Kalibalangan (KAG), Kalibalangan</option>
<option value="KBR">Kalibaru (KBR), Banyuwangi</option>
<option value="KBD">Kalibodri (KBD), Kendal</option>
<option value="KLT">Kalisat (KLT), Jember</option>
<option value="KSL">Kalisetail (KSL), Banyuwangi</option>
<option value="KIT">Kalitidu (KIT), Bojonegoro</option>
<option value="KLN">Kaliwungu (KLN), Kendal</option>
<option value="KPB">Kampung Bandan (KPB), Kampung Bandan</option>
<option value="KDA">Kandangan (KDA), Kandangan</option>
<option value="KPS">Kapas (KPS), Kapas</option>
<option value="KRAI">Karang Sari (KRAI), Karang Sari</option>
<option value="KE">Karang Tengah (KE), Karang Tengah</option>
<option value="KRA">Karangantu (KRA), Karangantu</option>
<option value="KA">Karanganyar (KA), Kebumen</option>
<option value="KNE">Karangasem (KNE), Banyuwangi</option>
<option value="KGT">Karangjati (KGT), Grobogan</option>
<option value="KRR">Karangsari (KRR), Banyumas</option>
<option value="KRW">Karangsuwung (KRW), Cirebon</option>
<option value="KW">Karawang (KW), Karawang</option>
<option value="KWG">Kawunganten (KWG), Cilacap</option>
<option value="KBS">Kebasen (KBS), Banyumas</option>
<option value="KBY">Kebayoran (KBY), Kebayoran</option>
<option value="KRO">Kebonromo (KRO), Sragen</option>
<option value="KM">Kebumen (KM), Kebumen</option>
<option value="KDN">Kedinding (KDN), Kedinding</option>
<option value="KD">Kediri (KD), Kediri</option>
<option value="KAB">Kedokangabus (KAB), Indramayu</option>
<option value="KDB">Kedungbanteng (KDB), Sragen</option>
<option value="KG">Kedunggalar (KG), Ngawi</option>
<option value="KDH">Kedunggedeh (KDH), Kedunggedeh</option>
<option value="KEJ">Kedungjati (KEJ), Grobogan</option>
<option value="KMO">Kemayoran (KMO), Kemayoran</option>
<option value="KMR">Kemiri (KMR), Kemiri</option>
<option value="KJ">Kemranjen (KJ), Banyumas</option>
<option value="KPN">Kepanjen (KPN), Malang</option>
<option value="KPT">Kertapati (KPT), Palembang</option>
<option value="KTM">Kertasemaya (KTM), Indramayu</option>
<option value="KTS">Kertosono (KTS), Nganjuk</option>
<option value="KSB">Kesamben (KSB), Blitar</option>
<option value="KGG">Ketanggungan (KGG), Brebes</option>
<option value="KGB">Ketanggungan Barat (KGB), Brebes</option>
<option value="KTP">Ketapang (KTP), Ketapang</option>
<option value="KAC">Kiaracondong (KAC), Bandung</option>
<option value="KIS">Kisaran (KIS), Asahan</option>
<option value="KK">Klakah (KK), Lumajang</option>
<option value="KLI">Klari (KLI), Klari</option>
<option value="KT">Klaten (KT), Klaten</option>
<option value="KOS">Kosambi (KOS), Kosambi</option>
<option value="KB">Kotabumi (KB), Kotabumi</option>
<option value="KOP">Kotapadang (KOP), Kotapadang</option>
<option value="KTK">Kotok (KTK), Jember</option>
<option value="KNN">Kradenan (KNN), Kradenan</option>
<option value="KRS">Kras (KRS), Kras</option>
<option value="KEN">Krenceng (KEN), Krenceng</option>
<option value="KNS">Krengseng (KNS), Batang</option>
<option value="KRT">Kretek (KRT), Brebes</option>
<option value="KRN">Krian (KRN), Sidoarjo</option>
<option value="KYA">Kroya (KYA), Cilacap</option>
<option value="KI">Kuraitaji (KI), Kuraitaji</option>
<option value="KTA">Kutoarjo (KTA), Purworejo</option>
<option value="KWN">Kutowinangun (KWN), Kebumen</option>
<option value="LAR">Labuanratu (LAR), Labuanratu</option>
<option value="LT">Lahat (LT), Lahat</option>
<option value="LMG">Lamongan (LMG), Lamongan</option>
<option value="LP">Lampegan (LP), Lampegan</option>
<option value="LN">Langen (LN), Banjar</option>
<option value="LR">Larangan (LR), Brebes</option>
<option value="LRA">Larangan (LRA), Larangan</option>
<option value="LW">Lawang (LW), Malang</option>
<option value="LBJ">Lebakjero (LBJ), Bandung</option>
<option value="LBG">Lebeng (LBG), Cilacap</option>
<option value="LEC">Leces (LEC), Leces</option>
<option value="LDO">Ledokombo (LDO), Ledokombo</option>
<option value="LL">Leles (LL), Garut</option>
<option value="LMB">Lemahabang (LMB), Lemahabang</option>
<option value="LPN">Lempuyangan (LPN), Yogyakarta</option>
<option value="LO">Leuwi Goong (LO), Leuwi Goong</option>
<option value="LDT">Lidah Tanah (LDT), Lidah Tanah</option>
<option value="LMP">Limapuluh (LMP), Batu Bara</option>
<option value="LG">Linggapura (LG), Brebes</option>
<option value="LOS">Losari (LOS), Cirebon</option>
<option value="LA">Lubuk Alung (LA), Lubuk Alung</option>
<option value="LLG">Lubuk Linggau (LLG), Lubuk Linggau</option>
<option value="LBP">Lubukpakam (LBP), Deli Serdang</option>
<option value="LRM">Lubukrukam (LRM), Lubukrukam</option>
<option value="LWG">Luwung (LWG), Cirebon</option>
<option value="MN">Madiun (MN), Madiun</option>
<option value="MGW">Maguwo (MGW), Sleman</option>
<option value="MJ">Maja (MJ), Maja</option>
<option value="ML">Malang (ML), Malang</option>
<option value="MLK">Malang Kota Lama (MLK), Malang</option>
<option value="MLS">Malasan (MLS), Malasan</option>
<option value="MRI">Manggarai (MRI), Jakarta Selatan</option>
<option value="MNJ">Manonjaya (MNJ), Tasikmalaya</option>
<option value="MA">Maos (MA), Cilacap</option>
<option value="MBU">Marbau (MBU), Labuhan Batu</option>
<option value="MP">Martapura (MP), Ogan Komering Ulu Timur</option>
<option value="MSR">Masaran (MSR), Sragen</option>
<option value="MSG">Maseng (MSG), Maseng</option>
<option value="MSI">Maswati (MSI), Maswati</option>
<option value="MDN">Medan (MDN), Medan</option>
<option value="MLW">Meluwung (MLW), Cilacap</option>
<option value="MBM">Membang Muda (MBM), Labuhan Batu</option>
<option value="MER">Merak (MER), Merak</option>
<option value="MGN">Minggiran (MGN), Minggiran</option>
<option value="MR">Mojokerto (MR), Mojokerto</option>
<option value="MRW">Mrawan (MRW), Mrawan</option>
<option value="ME">Muara Enim (ME), Muara Enim</option>
<option value="MSL">Muarasaling (MSL), Muarasaling</option>
<option value="NG">Nagreg (NG), Bandung</option>
<option value="NRR">Negararatu (NRR), Negararatu</option>
<option value="NGN">Negeriagung (NGN), Negeriagung</option>
<option value="NDL">Ngadiluwih (NDL), Ngadiluwih</option>
<option value="NJ">Nganjuk (NJ), Nganjuk</option>
<option value="NB">Ngebruk (NB), Ngebruk</option>
<option value="NBO">Ngrombro (NBO), Grobogan</option>
<option value="NT">Ngunut (NT), Tulungagung</option>
<option value="NTG">Notog (NTG), Banyumas</option>
<option value="PDL">Padalarang (PDL), Bandung Barat</option>
<option value="PD">Padang (PD), Padang</option>
<option value="PHA">Padanghalaban (PHA), Labuhan Batu</option>
<option value="PGG">Pagergunung (PGG), Pagergunung</option>
<option value="PSI">Pakishaji (PSI), Pakisaji</option>
<option value="PLG">Paledang (PLG), Paledang</option>
<option value="PLM">Palmerah (PLM), Palmerah</option>
<option value="PME">Pamingke (PME), Labuhan Batu</option>
<option value="PNW">Paninjawan (PNW), Paninjawan</option>
<option value="PNL">Panunggalan (PNL), Panunggalan</option>
<option value="PPR">Papar (PPR), Kediri</option>
<option value="PMN">Pariaman (PMN), Pariaman</option>
<option value="PA">Paron (PA), Ngawi</option>
<option value="PRK">Parung Kuda (PRK), Parung Kuda</option>
<option value="PRP">Parung Panjang (PRP), Parung Panjang</option>
<option value="PSE">Pasar Senen (PSE), Jakarta Pusat</option>
<option value="PS">Pasuruan (PS), Pasuruan</option>
<option value="PAT">Patuguran (PAT), Brebes</option>
<option value="PAK">Pauhkambar (PAK), Pauhkambar</option>
<option value="PGB">Pegadenbaru (PGB), Subang</option>
<option value="PK">Pekalongan (PK), Pekalongan</option>
<option value="PML">Pemalang (PML), Pemalang</option>
<option value="PBA">Perbaungan (PBA), Serdang Bedagai</option>
<option value="PRA">Perlanaan (PRA), Perlanaan</option>
<option value="PTA">Petarukan (PTA), Pemalang</option>
<option value="PTR">Peterongan (PTR), Jombang</option>
<option value="PLB">Plabuan (PLB), Batang</option>
<option value="PLD">Plered (PLD), Cirebon</option>
<option value="PGJ">Pogajih (PGJ), Pogajih</option>
<option value="PDJ">Pondok Ranji (PDJ), Pondok Ranji</option>
<option value="PR">Porong (PR), Porong</option>
<option value="PBM">Prabumulih (PBM), Prabumulih</option>
<option value="PRB">Prembun (PRB), Kebumen</option>
<option value="PB">Probolinggo (PB), Probolinggo</option>
<option value="PPK">Prupuk (PPK), Tegal</option>
<option value="PC">Pucuk (PC), Pucuk</option>
<option value="PUR">Puluraja (PUR), Simalungun</option>
<option value="PWK">Purwakarta (PWK), Purwakarta</option>
<option value="PWA">Purwoasri (PWA), Purwoasri</option>
<option value="PWT">Purwokerto (PWT), Banyumas</option>
<option value="PWS">Purwosari (PWS), Surakarta (Solo)</option>
<option value="RJP">Rajapolah (RJP), Tasikmalaya</option>
<option value="RBP">Rambipuji (RBP), Jember</option>
<option value="RPH">Rampah (RPH), Serdang Bedagai</option>
<option value="RCK">Rancaekek (RCK), Bandung</option>
<option value="RDG">Randegan (RDG), Banyumas</option>
<option value="RDN">Randegan (RDN), Randegan</option>
<option value="RDA">Randuagung (RDA), Randuagung</option>
<option value="RBG">Randublatung (RBG), Blora</option>
<option value="RK">Rangkasbitung (RK), Lebak</option>
<option value="RAP">Rantau Prapat (RAP), Labuhan Batu</option>
<option value="RJS">Rejosari (RJS), Lampung Selatan</option>
<option value="RJ">Rejotangan (RJ), Rejotangan</option>
<option value="RH">Rendeh (RH), Bandung Barat</option>
<option value="RGS">Rengas (RGS), Rengas</option>
<option value="RGP">Rogojampi (RGP), Banyuwangi</option>
<option value="SAD">Sadang (SAD), Purwakarta</option>
<option value="SLM">Salem (SLM), Salem</option>
<option value="SRD">Saradan (SRD), Madiun</option>
<option value="SKT">Sasaksaat (SKT), Sasaksaat</option>
<option value="SNA">Saungnaga (SNA), Saungnaga</option>
<option value="SBJ">Seibejangkar (SBJ), Batu Bara</option>
<option value="SMC">Semarang Poncol (SMC), Semarang</option>
<option value="SMT">Semarang Tawang (SMT), Semarang</option>
<option value="SMB">Sembung (SMB), Jombang</option>
<option value="SPL">Sempolan (SPL), Sempolan</option>
<option value="STL">Sentolo (STL), Kulon Progo</option>
<option value="SPJ">Sepanjang (SPJ), Sidoarjo</option>
<option value="SG">Serang (SG), Serang</option>
<option value="SRP">Serpong (SRP), Serpong</option>
<option value="SIR">Siantar (SIR), Pematang Siantar</option>
<option value="SDR">Sidareja (SDR), Cilacap</option>
<option value="SDA">Sidoarjo (SDA), Sidoarjo</option>
<option value="SKP">Sikampuh (SKP), Cilacap</option>
<option value="SDU">Sindanglaut (SDU), Cirebon</option>
<option value="SGJ">Singojuruh (SGJ), Singojuruh</option>
<option value="SGS">Singosari (SGS), Singosari</option>
<option value="SLW">Slawi (SLW), Slawi</option>
<option value="SLO">Solobalapan (SLO), Surakarta (Solo)</option>
<option value="SK">Solojebres (SK), Surakarta (Solo)</option>
<option value="SGG">Songgom (SGG), Brebes</option>
<option value="SR">Sragen (SR), Sragen</option>
<option value="SRI">Sragi (SRI), Pekalongan</option>
<option value="SWT">Srowot (SWT), Klaten</option>
<option value="SRW">Sruweng (SRW), Kebumen</option>
<option value="SDM">Sudimara (SDM), Sudimara</option>
<option value="SI">Sukabumi (SI), Sukabumi</option>
<option value="SUT">Sukatani (SUT), Sukatani</option>
<option value="SKM">Sukomoro (SKM), Sukomoro</option>
<option value="SKJ">Sukorejo (SKJ), Sukorejo</option>
<option value="SLS">Sulusuban (SLS), Lampung Selatan</option>
<option value="SBL">Sumbergempol (SBL), Sumbergempol</option>
<option value="SUM">Sumberlawang (SUM), Sragen</option>
<option value="SBP">Sumberpucung (SBP), Malang</option>
<option value="SRJ">Sumberrejo (SRJ), Bojonegoro</option>
<option value="SWD">Sumberwadung (SWD), Banyuwangi</option>
<option value="SLR">Sumlaran (SLR), Sumlaran</option>
<option value="SBO">Sumobito (SBO), Jombang</option>
<option value="SPH">Sumpiuh (SPH), Banyumas</option>
<option value="SGU">Surabaya Gubeng (SGU), Surabaya</option>
<option value="SGUX">Surabaya Gubeng (SGUX), Surabaya Gubengx</option>
<option value="SB">Surabaya Kota (SB), Surabaya</option>
<option value="SBI">Surabaya Pasar Turi (SBI), Surabaya</option>
<option value="SD">Surodadi (SD), Surodadi</option>
<option value="SS">Susuhan (SS), Susuhan</option>
<option value="TAB">Tabing (TAB), Tabing</option>
<option value="TAL">Talun (TAL), Blitar</option>
<option value="TBK">Tambak (TBK), Banyumas</option>
<option value="TB">Tambun (TB), Tambun</option>
<option value="THB">Tanah Abang (THB), Jakarta Pusat</option>
<option value="TES">Tandes (TES), Tandes</option>
<option value="TNG">Tangerang (TNG), Tangerang</option>
<option value="TGL">Tanggul (TGL), Jember</option>
<option value="TGA">Tanggulangin (TGA), Tanggulangin</option>
<option value="TGN">Tanjung (TGN), Brebes</option>
<option value="TPK">Tanjung Priuk (TPK), Jakarta Utara</option>
<option value="TNB">Tanjungbalai (TNB), Tanjung Balai</option>
<option value="TNK">Tanjungkarang (TNK), Bandar Lampung</option>
<option value="TJS">Tanjungrasa (TJS), Subang</option>
<option value="TRK">Tarik (TRK), Sidoarjo</option>
<option value="TSM">Tasikmalaya (TSM), Tasikmalaya</option>
<option value="TBI">Tebing Tinggi (TBI), Tebing Tinggi</option>
<option value="TI">Tebing Tinggi (TI), Tebing Tinggi</option>
<option value="TG">Tegal (TG), Tegal</option>
<option value="TGI">Tegineneng (TGI), Tegineneng</option>
<option value="TW">Telawa (TW), Boyolali</option>
<option value="TGR">Temuguruh (TGR), Banyuwangi</option>
<option value="TEJ">Tenjo (TEJ), Tenjo</option>
<option value="TIS">Terisi (TIS), Indramayu</option>
<option value="TGS">Tigaraksa (TGS), Tigaraksa</option>
<option value="TIG">Tigaraksa (TIG), Tigaraksa</option>
<option value="TOJB">Tonjong Baru (TOJB), Tonjong Baru</option>
<option value="YK">Tugu Yogyakarta (YK), Yogyakarta</option>
<option value="TA">Tulungagung (TA), Tulungagung</option>
<option value="TLY">Tulungbuyut (TLY), Tulungbuyut</option>
<option value="UJM">Ujanmas (UJM), Ujanmas</option>
<option value="UJN">Ujungnegoro (UJN), Ujungnegoro</option>
<option value="WDU">Wadu (WDU), Wadu</option>
<option value="WLT">Walantaka (WLT), Walantaka</option>
<option value="WK">Walikukun (WK), Ngawi</option>
<option value="WR">Waru (WR), Waru</option>
<option value="WDW">Waruduwur (WDW), Cirebon</option>
<option value="WB">Warung Bandrek (WB), Garut</option>
<option value="WT">Wates (WT), Kulon Progo</option>
<option value="WAY">Waytuba (WAY), Waytuba</option>
<option value="WLR">Weleri (WLR), Kendal</option>
<option value="WIL">Wilangan (WIL), Nganjuk</option>
<option value="WG">Wlingi (WG), Blitar</option>
<option value="WN">Wonokerto (WN), Wonokerto</option>
<option value="WO">Wonokromo (WO), Surabaya</option>
<option value="WOX">Wonokromox (WOX), Wonokromox</option>
<option value="WNS">Wonosari (WNS), Kebumen</option>
</select>
    <p><button type="submit" class="btn btn-default">Cari</button> </p>
    </form>
<div class="form-group form-group-sm col-md-1">
    
</div>
          </div>
          
<!--akhir options    -->      
          <table class="table table-striped" >
    <thead>
      <tr>
        <th>Nama Kereta</th>
        <th>Jadwal berangkat</th>
        <th>Kelas</th>
          <th>Status</th>
      </tr>
    </thead>
    <tbody   ng-repeat="item in events">
    <tr ng-repeat="class in item.class">
          <td>{{item.kereta}}</td>
     <td>{{item.tanggal_berangkat}}</td>
     <td>{{class.subclass}}</td>
    <td>{{class.status}}</td>      
      </tr>
    </tbody>
  </table>
        </div> 
    <div ng-controller="EventsController">


    </div>

            
            </div>
        
<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">
   
<!-- Blog Search Well -->
                <div class="well">
                        <h4>Blog Search</h4>
                        <div class="input-group">
                        <form action="/cari" method="POST" >
                        <input type="text" class="form-control" name="input" id="input" ng-model="cari">
                        <button class="btn btn-default" type="submit">mulai mencari {{cari}}</button>
                        </form>     
                        </div>
<!-- /.input-group -->
                </div>
      
<!-- Judul Artikel -->
            <div class="well">
                <h4></h4>
                    <div class="row">
                        <div class="col-lg-6">
                                    <ul class="list-unstyled">
                                        <li><a href="/detail/<%=data[i].id%>"></a>
                                        </li>
                                    </ul>
<!-- /.col-lg-6 -->
                
                            <div class="col-lg-6">
                
                            </div>
<!-- /.col-lg-6 -->
                
      
                        </div>
<!-- /.row -->
                        </div>

<!-- Side Widget Well -->
                       <div class="well">
                          <h4>Gapps Transport</h4>
                          <p>Web applikasi jadwal kereta api tujuan seluruh indonesia powered by angularjs dan amanahcorps.com.</p>
                       </div>

            </div>

</div>
<!-- /.row -->

        

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; {G.apps} Production 2016</p>
        </div>
<!-- /.col-lg-12 -->
    </div>
<!-- /.row -->
</footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="../js/socket.io.js"></script>
    <script src="../js/jquery.min.js"></script>
 
  
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
        <h1></h1>
</body>

</html>
