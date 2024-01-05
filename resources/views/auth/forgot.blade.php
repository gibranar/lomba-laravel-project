<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Bootstrap 5 Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="https://lomba.uny.ac.id/lip3d/lip3d-nobg.png" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5" id="inputEmail">
                            <h1 class="fs-4 card-title fw-bold mb-4">Forgot Password</h1>
                            <form method="POST" action="{{ route('forgot.password.send') }}" class="needs-validation"
                                novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary ms-auto" id="submit">
                                        Send Link
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex flex-column align-items-center w-100" id="loading" style="visibility: hidden; max-height: 0;">
							<div class="spinner-border text-primary" role="status">
								<span class="visually-hidden">Loading...</span>
							</div>
							<p class="fs-6 mt-2">Loading...</p>
						</div>						
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Remember your password? <a href="{{ route('login') }}" class="text-dark">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        Copyright &copy; 2023-Current &mdash; Gibran Website
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/login.js"></script>
    <script>
        const inputEmail = document.getElementById('inputEmail');
        const loading = document.getElementById('loading');
        const submit = document.getElementById('submit');

        submit.addEventListener('click', function() {
            inputEmail.style.display = 'none';

            loading.style.visibility = 'visible';
			loading.style.maxHeight = '100%';
            loading.style.padding = '5%';
        });
    </script>
</body>

</html>
