<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie'edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Add Expense </title>
</head>
<body
>@if(\Session::has('success'))
                            <div class="alert alert-success">
                            <h4>{{ \Session::get('success') }}</h4>
                            </div>
                            <hr>
                   @endif
    <form action="/add_data" method="post">
         {{ csrf_field() }}

    <div class= "container">
        <div class="jumbotron" style="margin-top: 5%;">

                
            <h1> ADD EXPENSE </h1>
            <hr>
    <div class="form-group">
            <label> Expense Category </label>
            <input type="text" class="form-control" name="expense_name" placeholder="Enter Category">
    </div>
    <div class="form-group">
            <label> Amount </label>
            <input type="text" class="form-control" name="expense_price" placeholder="Enter Amount">
    </div>
    <div class="form-group">
            <label> Item </label>
            <input type="text" class="form-control" name="expense_purchase" placeholder="Enter Item">
    </div>
    <div class="form-group">
            <label> Purchase Location </label>
            <input type="text" class="form-control" name="expense_location" placeholder="Enter location">
    </div>

  <input type="submit" name="submit" class="btn btn-success" value="Save/Insert Expense">
  <a href="expenseviews" class="btn btn-success">Done</a>
    </form>
    </div>
</div>

</body> 
</html>