<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styles/login.css" />
    <title>Login Admin - Layanan Kementrian Perdagangan</title>
  </head>
  <body>
    
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-sm-4">
            <form action="/postlogin" method="post" class="bg-form">
              {{csrf_field()}}
              <img src="../asset/logo-kemendag.png" alt="" class="img-login" />
              <div class="mb-3 input-email">
                <input type="email" class="form-control" name="email" placeholder="Email address" />
              </div>
              <div class="mb-3 input-password">
                <input type="password" class="form-control" name="password" placeholder="Password" />
              </div>
              <button type="submit" class="btn btn-primary btn-login">Login</button>
            </form>
          </div>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>