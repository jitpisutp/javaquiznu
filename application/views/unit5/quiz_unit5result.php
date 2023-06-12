<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap');

    body {
        font-family: 'Noto Sans Thai', sans-serif;
    }
</style>
<link rel="stylesheet" href="css/style.css">
<html>

<body style="background-color:DFE9EC;">
</body>

</html>
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
                                    <h1>บทที่ 5 อาร์เรย์</h1>
                                        <hr width="100%" color="black" />
                                        <div class="body">

                                            <div id="container">

                                                <?php $score = 0; ?>

                                                <?php $array1 = array(); ?>
                                                <?php $array2 = array(); ?>
                                                <?php $array3 = array(); ?>
                                                <?php $array4 = array(); ?>
                                                <?php $array5 = array(); ?>
                                                <?php $array6 = array(); ?>
                                                <?php $array7 = array(); ?>
                                                <?php $array8 = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10'); ?>
                                                <?php $array9 = array(); ?>

                                                <?php foreach ($checks as $checkans) { ?>
                                                <?php array_push($array1, $checkans);
                                                } ?>

                                                <?php foreach ($results as $res) { ?>
                                                <?php array_push($array2, $res->answer);
                                                    array_push($array3, $res->quiz_ID);
                                                    array_push($array4, $res->question);
                                                    array_push($array5, $res->choice1);
                                                    array_push($array6, $res->choice2);
                                                    array_push($array7, $res->choice3);
                                                    array_push($array9, $res->img_question);
                                                } ?>


                                                <?php
                                                for ($x = 0; $x < 10; $x++) { ?>


                                                    <form name="result" method="post" action="<?php echo base_url(); ?>index.php/Unit5">


                                                        <?php if ($array2[$x] != $array1[$x]) { ?>
                                                            <!-- <p><span style="background-color: #FF9C9E"><?= $array1[$x] ?></span> </p>
                                                            <p>Correct Answer : <span style="background-color: #ADFFB4 "><?= $array2[$x] ?></span></p> -->

                                                        <?php } else { ?>
                                                            <!-- <p><span style="background-color: #ADFFB4"><?= $array1[$x] ?></span></p> -->
                                                            <?php $score = $score + 1; ?>
                                                    <?php }
                                                    } ?>



                                                    <!-- <h2>Your Score: </h2> -->
                                                    <h1>คะแนนที่ได้ <?= $score ?>/10 คะแนน</h1>

                                                    </form>


                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12 text-right">
                                                                <button type="addQuiz" class="btn btn-light btn-lg" type="button" style="background-color:ffffff;" onclick="location.href='<?php echo base_url(); ?>index.php/Home_New'">กลับสู่หน้าหลัก</button>
                                                                <button class="btn btn-secondary btn-lg" style="background-color:212124;" onclick="location.href='<?php echo base_url(); ?>index.php/Unit5'">ทำข้อสอบใหม่</button>
                                                                <button id="toggleBtn" class="btn btn-secondary btn-lg" style="background-color:212124;" onclick="myFunction()">ดูเฉลย</button>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div id="secondDiv" style="display:none;">
                                                        <div id="container">

                                                            <?php $score = 0; ?>

                                                            <?php $array1 = array(); ?>
                                                            <?php $array2 = array(); ?>
                                                            <?php $array3 = array(); ?>
                                                            <?php $array4 = array(); ?>
                                                            <?php $array5 = array(); ?>
                                                            <?php $array6 = array(); ?>
                                                            <?php $array7 = array(); ?>
                                                            <?php $array8 = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10'); ?>
                                                            <?php $array9 = array(); ?>

                                                            <?php foreach ($checks as $checkans) { ?>
                                                            <?php array_push($array1, $checkans);
                                                            } ?>

                                                            <?php foreach ($results as $res) { ?>
                                                            <?php array_push($array2, $res->answer);
                                                                array_push($array3, $res->quiz_ID);
                                                                array_push($array4, $res->question);
                                                                array_push($array5, $res->choice1);
                                                                array_push($array6, $res->choice2);
                                                                array_push($array7, $res->choice3);
                                                                array_push($array9, $res->img_question);
                                                            } ?>


                                                            <?php
                                                            for ($x = 0; $x < 10; $x++) { ?>


                                                                <form name="result" method="post" action="<?php echo base_url(); ?>index.php/Home_New/unit1">

                                                                    <p><?= $array8[$x] ?>.<?= $array4[$x] ?></p>

                                                                    <?php if (!empty($array9[$x])) { ?>
                                                                        <img src="<?php echo base_url('img'); ?>/<?php echo $array9[$x]; ?>" width="50%" height="50% ">
                                                                    <?php } ?>


                                                                    <?php if ($array2[$x] != $array1[$x]) { ?>
                                                                        <p><span style="background-color: #FF9C9E"><?= $array1[$x] ?></span> </p>
                                                                        <p>Correct Answer : <span style="background-color: #ADFFB4 "><?= $array2[$x] ?></span></p>

                                                                    <?php } else { ?>
                                                                        <p><span style="background-color: #ADFFB4"><?= $array1[$x] ?></span></p>
                                                                        <?php $score = $score + 1; ?>
                                                                <?php }
                                                                } ?>

                                                                </form>

                                                        </div>
                                                    </div>
                                            </div>

                                            <script>
                                                document.getElementById("toggleBtn").onclick = function() {
                                                    var secondDiv = document.getElementById("secondDiv");
                                                    if (secondDiv.style.display === "none") {
                                                        secondDiv.style.display = "block";
                                                    } else {
                                                        secondDiv.style.display = "none";
                                                    }
                                                };
                                            </script>


                                        </div>

                                    </div>



                                </div>
                            </div>




                        </div>
                    </div>
                </section>




            </div>

        </div>
    </div>
</div>