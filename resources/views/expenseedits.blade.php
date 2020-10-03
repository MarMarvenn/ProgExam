<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie'edge">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Update Expense</title>
</head>
<body>
    
        <div class="container">
        <div class="jumbotron">
        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                    @endif

        <h2> UPDATE EXPENSE </h2>
        <br>

        <form action ="/update/{{ $expense[0]->id}}" method="post">
            {{csrf_field()}}

                <div class="form-group">
                    <label> Expense Category </label>
                <input type="text" class="form-control" name="expense_name" id="name" value="{{ $expense[0]->expense_name }}" aria-describedby="emailHelp"
                     placeholder="Enter Data">
                </div>

                <div class="form-group">
                    <label> Expense Amount </label>
                <input type="text" class="form-control" name="expense_price" id="amount" value="{{ $expense[0]->expense_price }}" aria-describedby="emailHelp"
                     placeholder="Enter Amount">
                </div>

                <div class="form-group">
                    <label> Item </label>
                <input type="text" class="form-control" name="expense_purchase" id="item" value="{{ $expense[0]->expense_purchase }}" aria-describedby="emailHelp"
                     placeholder="Enter Item">
                </div>

                <button type="submit" name="submit" class="btn btn-primary" style="width: 50%;"> Update Data</button>
       
        </form>

                
                

        </div>
        </div>

</body>
</html>
