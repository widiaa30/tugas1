<?php 
session_start();
  if(!isset($_SESSION['login'])){

  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="5.css">
  </head>
  
  <body>
    <section class="vh-100" style="background-color:;">
        <div class="container py-5 h-100 responsive">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 2rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="image/1.png" alt="" style="border-radius: 2rem;">
                   
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                            <img src="image/logo1.jpg" alt="">

                      <form  action="vendor/validasi.php" method="post">
      
                        <div class="d-flex align-items-center mb-4 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0">Login</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                        <?php
                          @session_start();
                          if (isset($_SESSION['info'])) {

                          

                        ?>
                       <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          
                       
                             <?php
                                echo $_SESSION['info'];
                            ?>
                       </div>
                       <?php 
                       unset($_SESSION['info']);
                      }
                       ?>
      
                        <div class="form-outline mb-4">
                          <label class="form-label text-center" for="form2Example17">username</label>
                          <input type="text" name="usernamediweb" id="form2Example17" class="form-control form-control-lg" placeholder="Username/Email/No tlpn"/>
                          
                        </div>
      
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example27">Password</label>
                          <input type="password" name="passworddiweb" id="form2Example27" class="form-control form-control-lg" placeholder="Please enter your password!"/>
                          
                        </div>
      
                          <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block" type="submit">sign up</button>
                          </div>
      
                        <a class="small text-muted" href="#!">Forgot password?</a>
                          <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                            style="color: #393f81;">Register here</a></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}else{
  header("location: index.php");
  exit();

}
?>

