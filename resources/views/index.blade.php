<!doctype html>
<html>
    <head>
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Payments</title>
    </head>
    
    <body>
        <div class = "container">
            <h1 style = "padding-bottom: 20px;">Payments</h1>
            <div class = "row">
                <div class = "col-10">
                 <a href="add.php" class="btn btn-primary float-end">Add Payment</a>
                    <table class = "table table-bordered table-striped">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Payment Date</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Actions</th>
                        </tr>
                    @foreach($payment as $p)
                        <tr>
                            <th scope="row">{{$p->id}}</th>
                            <td>{{$p->order_id}}</td>
                            <td>{{$p->customer_id}}</td>
                            <td>{{$p->payment_method}}</td>
                            <td>{{$p->payment_date}}</td>
                            <td>{{$p->total_amount}}</td>
                            <td>
                            @csrf
                                <a href="" class="btn btn-success btn-sm" name="edit">Edit</a>
                                <a href = "" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger btn-sm" name="delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>