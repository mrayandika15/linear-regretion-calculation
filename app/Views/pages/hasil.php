<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hasil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">


</head>

<body>




    <main id="main" class="main">


    <?= $this->include('/layout/sidebar') ?>



        <!-- Header -->
        <div class="container custom__wrapper__pemsil">
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column custom__header">
                        <h1>Muhammad Rayandika</h1>
                        <h1>152018132</h1>
                        <h4>Regresi Linear</h4>
                    </div>

                </div>

            </div>

            <!-- ENd Header -->


            <div class="custom__wrapper">

                <!-- end of small card -->


                <div class="custom__card__large">
                    <form enctype="multipart/form-data" role="form"
                        action="<?= base_url('/Hasil/create'); ?>" method="post" >


                       
                        <div class="d-flex justify-content-between align-items-center container__create">
                            <h3 for="a">A</h3>
                            <input class="form-control " name="a" type="input" id="a" readonly >

                        </div>
                        <div class="d-flex justify-content-between align-items-center container__create" readonly>
                            <h3 for="b">B</h3>
                            <input class="form-control " name="b" type="input" id="b" readonly>

                        </div>
                        <div class="d-flex justify-content-between align-items-center container__create">
                            <h3 for="result">Y = A + BX</h3>
                            <input class="form-control " name="result" type="input" id="result" readonly>

                        </div>

                        <div class="d-flex justify-content-between align-items-center container__create">
                            <h3 for="result">Pearson</h3>
                            <input class="form-control " name="pearson" type="input" id="pearson" readonly>

                        </div>


                        
                        <div class="d-flex justify-content-between align-items-center container__create">
                            <h3 for="result">Koevisien Determinasi</h3>
                            <input class="form-control " name="koefisien_determinasi" type="input" id="koefisien_determinasi" readonly>

                        </div>
                        <div class="d-flex justify-content-between align-items-center container__create">
                            <h3 for="result">Kesimpulan</h3>
                            <textarea class="form-control " name="simpulan" type="input" id="simpulan" readonly> </textarea>

                        </div>
                        <div class="d-flex justify-content-between align-items-center container__create">
                            <h3 for="result">Kesimpulan Korelasi</h3>
                            <textarea class="form-control " name="simpulan-korelasi" type="input" id="simpulan-korelasi" readonly></textarea>

                        </div>

                        <div class="custom__header__card__large">
                            <button type="button" class="btn btn-primary" onclick="doMath()" >Cek Hasil</button>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>

                        </div>
                    </form>

                </div>


                <div class="custom__card__large">
                    <div class="custom__header__card__large">

                        
                    </div>

                    <div class="table__wrapper">
                        <table class="custom__table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">a</th>
                                    <th scope="col">b</th>
                                    <th scope="col">y = a + bx</th>
                                    <th scope="col">Pearson</th>
                                    <th scope="col">Koevisien Determinasi</th>
                                </tr>

                               
                            </thead>
                            <tbody>
                            <tbody>
                             <?php foreach ($hasil as $data) : ?>
                                    
                                    <tr>
                                        <td><?= $data['id']?></td>
                                        <td><?= $data['a']?></td>
                                        <td><?= $data['b']?></td>
                                        <td><?= $data['result']?></td>
                                        <td><?= $data['pearson']?></td>
                                        <td><?= $data['koefisien_determinasi']?></td>

                                    </tr>
                                    <?php endforeach; ?>

                                

                            </tbody>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>









    </main>






    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/quill/quill.min.js"></script>
    <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/vendor/tinymce/tinymce.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/style.js"></script>

</body>


<script>


  // bikin variabel x dan y  

  const originalOutput = (<?php echo json_encode($input) ?>);


//   variabel X

const variabelX = originalOutput.map(function(item) {
    return item.x;
});

const convertX = variabelX.map(function(item) {
    return parseFloat(item);
});

// variabel y

const variabelY = originalOutput.map(function(item) {
    return item.y;
});

const convertY = variabelY.map(function(item) {
    return parseFloat(item);
});


        // bikin perhitungan sigma x (total x ) 

        const totalX = convertX.reduce(function(a, b) {
            return a + b;
        }, 0);

        

        // bikin perhitungan kuadrat dari total x (sigma x * sigma x)

        const kuadratTotalX = totalX * totalX;



        // bikin perhitungan sigma y (total y)

        const totalY = convertY.reduce(function(a, b) {
            return a + b;
        }, 0);


        


        // bikin x kuadrat (x * x )

        const xKuadrat = convertX.map(function(item) {
            return item * item;
        });

        const convertXKuadrat = xKuadrat.map(function(item) {
            return parseFloat(item);
        });




        // bikin total dari x kuadrat ( total x kuadrat)

        const totalXKuadrat = convertXKuadrat.reduce(function(a, b) {
            return a + b;
        }, 0);

        





        // bikin y kuadrat ( y * y )

        const yKuadrat = convertY.map(function(item) {
            return item * item;
        });

        const convertYKuadrat = yKuadrat.map(function(item) {
            return parseFloat(item);
        });


        
        
        // bikin x kali y (x * y)

        const xKaliY = convertX.map((item, index)=>  {
            return item * convertY[index]; ;
        });

        const convertXKaliY = xKaliY.map(function(item) {
            return parseFloat(item);
        });


        // total x kali y ( total x kali y)

        const totalXKaliY = convertXKaliY.reduce(function(a, b) {
            return a + b;
        }, 0);



    
        
        
        


        // jumlah data (length data)

        const lengthData = convertX.length;


        // total Y kuadrat ( total y kuadrat)

        const totalYKuadrat = convertYKuadrat.reduce(function(a, b) {
            return a + b;
        }, 0);


        
        // kuadrat total Y ( total y kuadrat * total y kuadrat)

        const kuadratTotalY = totalY * totalY;


        
        

        







  function doMath()
    {

        const a = (totalY * totalXKuadrat) - (totalX * totalXKaliY) / (lengthData *  totalXKuadrat - kuadratTotalX );

        const b = (lengthData * totalXKaliY - totalX * totalY) / (lengthData * totalX - kuadratTotalX);


        const result = "Y = " + a + " + " + "(" + b + "X" + ")" ;


        


        const pearson = ( lengthData *  totalXKaliY  - (totalX * totalY) / lengthData) /  Math.sqrt((lengthData * totalXKuadrat - (totalX * totalX) ) *  ( lengthData * totalYKuadrat - (totalY * totalY) ));






        

        const koefisienDeterminasiPersentase =   pearson * pearson * 100/100 + "%"  ;

        const koefisienDeterminasi = pearson * pearson * 100/100  ;

        

        const sisa = 100 - koefisienDeterminasi  + "%" ;

        

        const simpulan = "Sebuah hubungan linear yang terjadi antara " + "X" + " dan " + "Y" + " adalah " + " " + result + " dengan besar kontribusi variabel X adalah sebesar" + " " + koefisienDeterminasiPersentase + " dari perubahan yang ada di variabel Y sisa nya sebesar "  +  " " + sisa + " " +  "dijelaskan oleh variabel selain X" ;



        



        
        const korelasiPearson = [];


        if(0 <= pearson < 0.2){
            korelasiPearson.push("Sangat Lemah");
        }

        if(0.2 <= pearson < 0.4){
            korelasiPearson.push("Lemah");
        }

        if(0.4 <= pearson < 0.6){
            korelasiPearson.push("Cukup");
        }

        if(0.6 <= pearson < 0.8){
            korelasiPearson.push("Baik");
        }

        if(0.8 <= pearson <= 1){
            korelasiPearson.push("Sangat Baik");
        }


        
        const kesimpulanKorelasi = "arah hubungan - atau +, sehingga dapat dikatakan jika variable x lebih besar maka y akan mengecil, dan juga sebaliknya. besar hubungan" + " " + pearson + " " +  "adalah" + " " +  korelasiPearson.join(" ") ;

        

        
        
        document.getElementById('a').value=a;

        document.getElementById('b').value=b;

        document.getElementById('result').value=result;


        document.getElementById('pearson').value=pearson;


        document.getElementById('koefisien_determinasi').value=koefisienDeterminasi;

        document.getElementById('simpulan').value=simpulan;

        document.getElementById('simpulan-korelasi').value=kesimpulanKorelasi;



        

    }

</script>


</html>