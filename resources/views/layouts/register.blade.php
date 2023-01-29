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

    <div class="container w-50">
        <form method="POST" action="">
            @csrf
            <h1>Customer Details</h1>
            <div class="form-group">
                <label for="my-input">Customer Name</label> <br>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
                <input id="my-input" class="form-control" type="text" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="my-input">Customer Email</label>
                <br>
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
                <input id="my-input" class="form-control" type="text" name="email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="my-input">Customer Gender</label>
                <br>
                <span class="text-danger">
                    @error('gender')
                    {{$message}}
                    @enderror
                </span>
                <select class="form-control" name="gender">
                    <option value="">Select The Gender</option>
                    <option value="male" {{{old('gender')=="male" ? "selected" : '' }}}>Male</option>
                    <option value="female" {{{old('gender')=="female" ? "selected" : '' }}}>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="my-textarea">Customer Address</label>
                <br>
                <span class="text-danger">
                    @error('address')
                    {{$message}}
                    @enderror
                </span>
                <textarea id="my-textarea" class="form-control" name="address" rows="3">{{old('address')}}</textarea>
            </div>
            <div class="form-group">
                <label for="my-input">Customer Date</label>
                <br>
                <span class="text-danger">
                    @error('date')
                    {{$message}}
                    @enderror
                </span>
                <input id="my-input" class="form-control" type="date" name="date" value="{{old('date')}}">
            </div>
            <button class="btn btn-warning">Customer Add</button>
        </form>
    </div>
</body>

</html>