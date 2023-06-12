<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap');
    body {
        font-family: 'Noto Sans Thai', sans-serif;
    }
</style>
<link rel="stylesheet" href="css/style.css">


<div style="background-color:DFE9EC;">
    <div class="container" style="background-color:DFE9EC;">
        <div class="row">
            <div class="col-md-12"></div>
            <div class="mx-auto">

                <section class="vh-100" style="background-color: #DFE9EC;">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                    <div class="card-body p-5 text-center">

                                        <h2 class="mb-5">Administator</h2>

                                        <form action="<?php echo site_url('Administator/check'); ?>" method="post">
                                            <div class="txt_field">
                                                <label>Username</label>
                                                <input type="text" name="username" required class="form-control" placeholder="Username">
                                                <span></span>
                                                
                                            </div>
                                            <div class="txt_field">
                                                <label>Password</label>
                                                <input type="password" name="password" required class="form-control" placeholder="Password">
                                                <span></span>
                                                
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>




                                            <!-- <h3 class="mb-5">Administator</h3>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="typeEmailX-2">Username</label>
                                                <input type="text" name="username" id="typeEmailX-2" class="form-control form-control-lg" />
                                            </div>


                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="typePasswordX-2">Password</label>
                                                <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" />
                                            </div>      

                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button> -->

                                        </form>

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