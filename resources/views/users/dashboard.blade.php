<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Document</title>

    <style>
        body {
            background-color: #352F44;
        }
    </style>
</head>

<body>
    @if (session('loginSuccess'))
        <div class="alert alert-success alert-dismissible position-absolute top-0 end-0 mt-5 me-3"
            style="z-index: 9999;" role="alert" id="successAlert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session('loginSuccess') }}
        </div>
    @endif
    <div class="container-fluid d-flex flex-column w-50 h-50 mt-5">
        <div class="container d-flex flex-column align-items-center text-nowrap">
            <h2 class="text-light mb-3 fs-3">Selamat datang {{ auth()->user()->name }}</h2>
            <div class="d-flex gap-5">
                <button type="button" class="btn btn-primary position-relative" id="profileBtn">
                    Profile
                    <span
                        class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </button>
                <a href="{{ route('logout') }}">
                    <button type="button" class="btn btn-danger">Logout</button>
                </a>
            </div>
        </div>
    </div>

    <div class="modal" id="profileModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profile Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{ auth()->user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ auth()->user()->email }}</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#successAlert").delay(5000).fadeOut("slow");
        });
        document.addEventListener("DOMContentLoaded", function() {
            var myModal = new bootstrap.Modal(document.getElementById('profileModal'));

            document.getElementById('profileBtn').addEventListener('click', function() {
                myModal.show();
            });
        });
    </script>

</body>

</html>
