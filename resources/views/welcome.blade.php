<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ trans('global.site_title') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    .navbar {
        background-color: #007bff;
    }
</style>

<body style="background-color: aliceblue">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-md-auto gap-2">
                    <li class="nav-item rounded">
                        <a class="nav-link active btn btn-primary" aria-current="page" href="{{ route('login') }}"><i
                                class="bi bi-house-fill me-2"></i>Login</a>
                    </li>
                    <li class="nav-item rounded">
                        <a class="nav-link btn btn-primary" href="{{ route('register') }}"><i
                                class="bi bi-people-fill me-2"></i>Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>All Active Advertisements</h2>
        @foreach($advertisements as $advertisement)
        <div class="card mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        {{ $advertisement->advertisement_num }}
                    </div>
                    <div class="col">
                        {{ $advertisement->category->title }}
                    </div>
                    <div class="col">
                        {{ $advertisement->group->title }}
                    </div>
                    <div class="col">
                        {{ $advertisement->subGroup->title }}
                    </div>
                    <div class="col">
                        {{ $advertisement->level->title }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</body>

</html>