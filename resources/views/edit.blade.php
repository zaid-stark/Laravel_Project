<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Micro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <div class="row d-flex justify-content-center my-5 mx-0">
        <div class="col-lg-6 ">


            <div class="container">

                @if (session('status'))
                    <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
                @endif
                <form action="{{ url('update/'.$key) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>
                        <h1 style="color: rgb(0, 89, 255)">Edit Processor Details</h1>
                    </div>
                    <div class="mb-3">
                        <select value="{{$editdata['Device_Model']}}" name="device_model" class="form-select" aria-label="Default select example" >
                            <option selected>Device Model</option>
                            <option value="Intel">Intel</option>
                            <option value="Rizen">Rizen</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label  for="" class="form-label">DEVICE NAME:</label>
                        <input value="{{$editdata['Device_Name']}}" name="device_name" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> NO OF PINS:</label>
                        <input value="{{$editdata['No_Of_Pins']}}" name="no_of_pins" type="text" class="form-control " required>
                    </div>
                    <div class="mb-3">
                        <select value="{{$editdata['Status']}}" name="status" class="form-select" aria-label="Default select example" required>
                            <option selected>Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">In Active</option>

                        </select>
                    </div>
                    <div>

                        <button class="btn btn-sm btn-danger">
                            Update
                        </button>

                    </div>
                </form>
            </div>
            <div>
                <a href="{{url('/show')}}">
                    <button class="btn btn-sm btn-success float-end">
                        Show Data
                    </button>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>

