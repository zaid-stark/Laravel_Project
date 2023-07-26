<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">

        @if (session('status'))
        <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
    @endif
        <div style="text-align: center">
            <h1>
                Details Of Processor
            </h1>
        </div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th>Id</th>
                <th>Device Token</th>
                <th>Device Model</th>
                <th>Device Name</th>
                <th>Numbers Of Pin</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @forelse ($data as $key=>$item)


              <tr>
                <td>{{$i++}}</td>


                <td>{{$key}}</td>
                <td>{{$item['Device_Model']}}</td>
                <td>{{$item['Device_Name']}}</td>
                <td>{{$item['No_Of_Pins']}}</td>
                <td>{{$item['Status']}}</td>
                <td><a href="{{'edit/'.$key}}"><button class="btn btn-success btn-sm">Edit</button></td></a>
                <td><a href=""><button class="btn btn-danger btn-sm">Delete</button></td></a>




              </tr>
              @empty

              @endforelse

            </tbody>
          </table>
          <div>
            <a class="float-end" href="{{ url('/') }}">
                <button type="button" class="btn btn-primary">
                    Add Processor
                </button>
            </a>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
