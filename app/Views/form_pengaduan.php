
<link rel="stylesheet" href="css/style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    
</head>
<body>
    
    <!-- Contact-->
<section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Pengaduan</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Laporkan permasalahan dan keluhanmu disini</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <h2 class="mt-0 mb-3">Biodata</h2>

                        <form id="pengaduan" method="POST" action="pengaduan/send">
                            <?php foreach ($biodata as $item) : ?>
                                
                           
                            
                            
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                            
                                <input class="form-control " id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" name="nama" value="<?php echo $item['nama']; ?>"/>
                                <label for="name">Nama Lengkap</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- RT input-->
                            <div class="row mb-3">
                            <div class="form-floating mb-3 col-md-6">
                                <input class="form-control" name="RT" id="RT" type="text" placeholder="RT" data-sb-validations="required" value="<?php echo $item['RT']; ?>"/>
                                <label class="mx-2" for="RT">RT</label>
                            </div>
                            <div class="form-floating mb-3 col-md-6">
                                <input class="form-control" name="RW" id="RW" type="text" placeholder="RW" data-sb-validations="required" value="<?php echo $item['RW']; ?>" />
                                <label class="mx-2" for="RW">RW</label>
                            </div>
                        </div>
                            <!-- Domisili input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="Domisili" id="Domisili" type="text" placeholder="(123) 456-7890" data-sb-validations="required" value="<?php echo $item['domisili']; ?>"/>
                                <label for="Domisili">Domisili</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- NIK input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="NIK" id="NIK" type="text" placeholder="(123) 456-7890" data-sb-validations="required" value="<?php echo $item['nik']; ?>" />
                                <label for="NIK">NIK</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>

                            <div class="container mb-5"></div>

                            <h2 class="mt-0 mb-3">Pengaduan</h2>
                            <!-- Subject input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="subject" id="subject" type="text" placeholder="Isi Subjek" data-sb-validations="required" />
                                <label for="subject">Subject</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>

                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="isi_laporan" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            
                            <div class="form-floating mb-3">
                            
                                
                            <h2 class="mt-0 mb-3">Upload Bukti</h2>
                                <input type="file" name="file" id="file">
                                
                                
                            </div>
                            
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl " id="submitButton" type="submit">Submit</button></div>
                            <?php endforeach ?>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>

        
        
</body>
</html>