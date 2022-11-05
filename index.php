<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email send on Gamil php Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0b185ee620.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    

    <div class="section">
      <div class="cltr">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h2 class="headline">Contact with us</h2>
              <hr>
              <ul>
                <li><i class="fa-solid fa-phone"></i> <span>+880 1373932***</span></li>
                <li><i class="fa-solid fa-envelope"></i> <span>nirjon570@gmail.com</span></li>
                <li><i class="fa-solid fa-house"></i> <span>Mirpur 10 Roundabout, Dhaka Bangladesh</span></li>
              </ul>
            </div>
            <div class="col-sm-6">
              <form action="contacthandle.php" method="post">
                <div class="mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                  <textarea type="text" name="message" class="form-control" placeholder="Type Your message here..." id="exampleInputPassword1" rows="6"></textarea>
                </div>
                <button type="submit" class="btn"><i class="fa-solid fa-paper-plane"></i> Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

     