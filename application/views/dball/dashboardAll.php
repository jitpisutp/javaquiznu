<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="css/style.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap');

    body {
        font-family: 'Noto Sans Thai', sans-serif;
    }
</style>

<body style="background-color:DFE9EC;"></body>

<div style="background-color:DFE9EC;">
    <div class="container" style="background-color:DFE9EC;">
        <div class="row">
            <div class="col-md-12"></div>
            <div class="mx-auto">
                <section class="vh-100" style="background-color: #DFE9EC;">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center ">
                            <div class="col-sm-50 col-md-12">

                                <div class="card shadow-10-strong" style="border-radius: 1rem;">
                                    <div class="card-body">
                                        <h1>สำหรับผู้ดูแลระบบ</h1>
                                        
                                        <h3 class="text-center">ข้อสอบทั้งหมด</h3>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-10">
                                                    <h4>หมวดหมู่ข้อสอบ</h4>
                                                </div>
                                                <!-- <div class="col-sm-2">
                                                    <button type="addQuiz" class="btn btn-secondary btn-lg" type="button" style="background-color:212124;" onclick="location.href='<?php echo base_url(); ?>index.php/Administator/dashboardAdd'">เพิ่มข้อสอบ</button>

                                                </div> -->
                                            </div>
                                        </div>
                                        <br>
                                        <div class="container">
                                            <div class="row center">
                                                <div class="col-sm-3 ">
                                                    <button class="btn btn-light  " type="button" onclick="location.href='<?php echo base_url(); ?>index.php/Administator/dashboardAllu1'"> บทที่ 1 การเขียนโปรแกรมเบื้องต้นด้วยภาษาจาวา</button>
                                                </div>
                                                <div class="col-sm-2">
                                                    <button class="btn btn-light " type="button" onclick="location.href='<?php echo base_url(); ?>index.php/Administator/dashboardAllu2'"> บทที่ 2 การเขียนโปรแกรมแบบมีทางเลือก</button>
                                                </div>
                                                <div class="col-sm-2">
                                                    <button class="btn btn-light " type="button" onclick="location.href='<?php echo base_url(); ?>index.php/Administator/dashboardAllu3'"> บทที่ 3 การเขียนโปรแกรมแบบทำซ้ำ</button>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button class="btn btn-light " type="button" onclick="location.href='<?php echo base_url(); ?>index.php/Administator/dashboardAllu4'"> บทที่ 4 วิธีการสร้างและใช้งานเมธอด</button>
                                                </div>
                                                <div class="col-sm-2">
                                                    <button class="btn btn-light " type="button" onclick="location.href='<?php echo base_url(); ?>index.php/Administator/dashboardAllu5'"> บทที่ 5 อาร์เรย์</button>
                                                </div>
                                        
                                            </div>
                                        </div>




                                        <!-- <form id="filter-posts-form" method="post" action="">
                                            <select name="filter-posts" id="filter-posts" class="container filter-posts btn btn-light dropdown-toggle float-md-left " style="background-color:E6E6E6; text-align:left;">
                                                <option value="0" <?= (isset($_POST['filter-posts']) && $_POST['filter-posts'] == 0 ? 'selected' : '') ?>>-เลือกหมวดหมู่ข้อสอบ-</option>
                                                <option value="1" <?= (isset($_POST['filter-posts']) && $_POST['filter-posts'] == 1 ? 'selected' : '') ?>>บทที่ 1 การเขียนโปรแกรมเบื้องต้นด้วยภาษาจาวา</option>
                                                <option value="2" <?= (isset($_POST['filter-posts']) && $_POST['filter-posts'] == 2 ? 'selected' : '') ?>>บทที่ 2 การเขียนโปรแกรมแบบมีทางเลือก</option>
                                                <option value="3" <?= (isset($_POST['filter-posts']) && $_POST['filter-posts'] == 3 ? 'selected' : '') ?>>บทที่ 3 การเขียนโปรแกรมแบบทำซ้ำ</option>
                                                <option value="4" <?= (isset($_POST['filter-posts']) && $_POST['filter-posts'] == 4 ? 'selected' : '') ?>>บทที่ 4 วิธีการสร้างและใช้งานเมธอด</option>
                                                <option value="5" <?= (isset($_POST['filter-posts']) && $_POST['filter-posts'] == 5 ? 'selected' : '') ?>>บทที่ 5 อาร์เรย์</option>
                                                <option value="6" <?= (isset($_POST['filter-posts']) && $_POST['filter-posts'] == 6 ? 'selected' : '') ?>>บทที่ 6 การเขียนโปรแกรมเชิงวัตถุ</option>

                                            </select>
                                            <script type="text/javascript">
                                                $(function() {
                                                    $('select').on('change', function() {
                                                        $('#filter-posts-form').submit();
                                                    });
                                                });
                                            </script>
                                        </form> -->

                                       <br>
                                    </div>
                                </div>






                            </div>
                        </div>
                </section>




            </div>

        </div>
    </div>
</div>