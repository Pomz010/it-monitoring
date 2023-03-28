<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../src/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Login</title>
</head>
<body class="bg-body-secondary">
    <div class="container ">
        <div class="form_login container w-auto position-absolute top-50 start-50 translate-middle">
            <div>
                <div class="text-center mb-5">
                    <img class="rounded-circle mb-1" src="../src/img/logo.png" alt="Agripacific logo" width="120" height="120">
                    <p class="h1 fs-4">IT Asset Monitoring</p>
                </div>
                
                <div class="w-100">
                    <form action="#">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control rounded-pill" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-pill" id="password" placeholder="Enter password">
                          </div>
                          <div class="mb-3 form-check d-flex justify-content-between">
                            <div>
                                <input type="radio" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <p class="text-end"><a href="#">Forgot password?</a></p>
                          </div>
                          <button type="submit" class="btn btn-dark rounded-pill w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>