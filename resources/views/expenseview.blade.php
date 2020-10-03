@extends('layouts.master')

@section('title')
    Registered Roles | Mar's Web
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Roles</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID </th>
                      <th>Expense Category </th>
                      <th>Amount </th>
                      <th>Item</th>
                      <th>Add Expense</th>
                      <th>DELETE</th>
                    
                    <tbody>
                    </thead>
                @foreach ($expense as $row)
                    <tr style="background:white;">
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->expense_name }}</td>
                        <td>{{ $row->expense_price }}</td>
                        <td>{{ $row->expense_purchase }}</td>
                        
                        <td>
                            <a href="expense" class="btn btn-success">Add Expense</a>
                        </td>

                        <td>
                          <form action="" method="post">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                          </form>
                          </td>
                      </tr>
                      @foreach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>



@endsection


@section('scripts')

@endsection