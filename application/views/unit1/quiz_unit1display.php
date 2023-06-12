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

<body style="background-color:DFE9EC;"></body>

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
                                        <h1>บทที่ 1 การเขียนโปรแกรมเบื้องต้นด้วยภาษาจาวา</h1>
                                        <hr width="100%" color="black" />
                                        <div class="body">

                                            <div id="container">

                                                <form method="post" action="<?php echo base_url(); ?>index.php/Unit1/resultdisplay">


                                                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                    <?php } ?>

                                                    <?php foreach ($questions as $row) { ?>



                                                        <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->answer);
                                                        shuffle($ans_array); ?>
                                                        <br>
                                                        <p><?= $row->quiz_ID ?>.<?php $row->quiz_ID ?><?= $row->question ?></p>
                                                        <?php if (!empty($row->img_question)) { ?>
                                                            <img src="<?php echo base_url('img'); ?>/<?php echo $row->img_question; ?>" width="50%" height="50% ">
                                                        <?php } ?>

                                                        <!-- <img src="<?php echo base_url('img'); ?>/<?php echo $row->img_question; ?>" width="50%" height="50% "> -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="quizid<?= $row->quiz_ID ?>" value="<?= $ans_array[0] ?>" required> <?= $ans_array[0] ?><br>
                                                            <input class="form-check-input" type="radio" name="quizid<?= $row->quiz_ID ?>" value="<?= $ans_array[1] ?>"> <?= $ans_array[1] ?><br>
                                                            <input class="form-check-input" type="radio" name="quizid<?= $row->quiz_ID ?>" value="<?= $ans_array[2] ?>"> <?= $ans_array[2] ?><br>
                                                            <input class="form-check-input" type="radio" name="quizid<?= $row->quiz_ID ?>" value="<?= $ans_array[3] ?>"> <?= $ans_array[3] ?><br>
                                                        </div>




                                                    <?php } ?>
                                              
                                                    <br><br>
                                                    <div class="col text-right">
                                                        <input class="btn btn-secondary btn-lg " type="submit" value="ส่งคำตอบ" style="background-color:212124;">
                                                    </div>

                                                </form>

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


