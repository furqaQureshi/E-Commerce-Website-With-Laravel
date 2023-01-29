<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SuccessFull! </strong> {{ Session::get('success')}}  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if (Session::has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>SuccessFull! </strong> {{ Session::get('delete')}}  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <a href="{{url('customer/register')}}" class="btn btn-info float-right my-4">Add Customer</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Email</th>
                    <th scope="col">Customer Address</th>
                    <th scope="col">Customer Gender</th>
                    <th scope="col">Customer date-of-dirth</th>
                    <th scope="col">Customer Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $item)

                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <th scope="row">{{$item->name}}</th>
                    <th scope="row">{{$item->email}}</th>
                    <th scope="row">{{$item->gender}}</th>
                    <th scope="row">{{$item->address}}</th>
                    <th scope="row">{{$item['date-of-birth']}}</th>
                    <th>
                        <a href="{{url('customer/edit', ['id' => $item->id])}}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{url('customer/delete', ['id' => $item->id]) }}"
                            class="btn btn-danger btn-sm">Delete</a>
                    </th>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

</body>

</html>

 