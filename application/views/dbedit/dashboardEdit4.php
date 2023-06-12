<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style.css">


<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap');

    body {
        font-family: 'Noto Sans Thai', sans-serif;
    }
</style>
<div style="background-color:DFE9EC;">
    <div class="container" style="background-color:DFE9EC;">
        <div class="row">
            <div class="col-md-12"></div>
            <div class="mx-auto">

                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center ">
                        <div class="col-sm-50 col-md-12">

                            <div class="card shadow-10-strong" style="border-radius: 1rem;">
                                <div class="card-body">

                                    <h1>สำหรับผู้ดูแลระบบ</h1>
                                    <br>
                                    <h3 class="text-center">แก้ไขข้อสอบ</h3>
                                    <br>
                                    <h5>หมวดหมู่ข้อสอบ</h5>



                                    <form action="<?php echo site_url('Administator/editupdate4'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

                                        <select class="container btn btn-light dropdown-toggle float-md-left " id="select" data-toggle="dropdown" style="background-color:E6E6E6; text-align:left;" name="selectunit" value="<?php echo $questedit->ca_quiz; ?> ">
                                            
                                            <option value="4">บทที่ 4 วิธีการสร้างและใช้งานเมธอด</option>
                                           
                                        </select>
                                        <br><br><br>
                                        <h5>เพิ่มข้อสอบ</h5>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">เพิ่มคำถาม</span>
                                            </div>
                                            <input class="form-control" type="text" name="questionadd" aria-label="With textarea" value="<?php echo $questedit->question; ?>"></input>
                                        </div>

                                        <br>
                                        <h5>เพิ่มรูปภาพ</h5>
                                        <!-- <label for="img"></label> -->
                                        <input type="file" id="img" name="img" accept="image/*" onchange="readURL(this); ">

                                        <img id="blah" class="img" src="<?php echo base_url('img'); ?>/<?php echo $questedit->img_question; ?>" alt="your image" width="50%" height="50% " />
                                        <script>
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        $('#blah').attr('src', e.target.result).width(auto).height(auto);
                                                    };

                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                        <!-- <input type="file" id="img" name="img" accept="image/* " value="<?php echo $questedit->img_question; ?> "> -->

                                        <br><br><br>

                                        <h5>เพิ่มคำตอบ</h5>

                                        <!-- <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">เพิ่มคำตอบ</span>
                                            </div>
                                            <textarea class="form-control" aria-label="With textarea"></textarea>
                                        </div> -->

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">ตัวเลือกที่ 1 </span>
                                            </div>
                                            <input type="text" name="c1" class="form-control" value="<?php echo $questedit->choice1; ?> ">
                                        </div>
                                        <br>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">ตัวเลือกที่ 2 </span>
                                            </div>
                                            <input type="text" name="c2" class="form-control" value="<?php echo $questedit->choice2; ?> ">
                                        </div>
                                        <br>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">ตัวเลือกที่ 3 </span>
                                            </div>
                                            <input type="text" name="c3" class="form-control" value="<?php echo $questedit->choice3; ?> ">
                                        </div>
                                        <br>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">เฉลย </span>
                                            </div>
                                            <input type="text" name="ans" class="form-control" value="<?php echo $questedit->answer; ?> ">
                                        </div>
                                        <br>


                                        <div class="form-group row">
                                            <div class="col-sm-12 text-right">
                                                <input type="hidden" name="quiz_ID" value="<?php echo $questedit->quiz_ID;?>">
                                                <button class="btn btn-light btn-lg" type="button" style="background-color:ffffff;" onclick="location.href='<?php echo base_url(); ?>index.php/Administator/dashboardAllu4'">กลับสู่หน้าหลัก</button>
                                                <button type="submit" class="btn btn-secondary btn-lg" style="background-color:212124;">บันทึกแก้ไข</button>
                                            </div>
                                        </div>

                                        

                                        <form>
                                        <?php
                                        if ($this->session->flashdata('success')) { ?>
                                            <div class="alert alert-success" role="alert">
                                                Successfully Updated
                                            </div>
                                        <?php }
                                        ?>
                                        <?php
                                        if ($this->session->flashdata('error')) { ?>
                                            <div class="alert alert-danger" role="alert">
                                                Failed!
                                            </div>
                                        <?php }
                                        ?>

                                </div>
                            </div>




                        </div>
                    </div>





                </div>

            </div>
        </div>
    </div>