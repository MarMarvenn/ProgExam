@extends('layouts.master')

@section('title')
    Expense Manager | Mar's Web
@endsection


@section('content')

<div class="row">
                  
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              @if(\Session::has('success'))
                            <div class="alert alert-success">
                            <h4>{{ \Session::get('success') }}</h4>
                            </div>
                            <hr>
                   @endif

                  
                <h4 class="card-title">Expenses</h4>

                   
                            
                   
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <td>
                            <a href="expense" class="btn btn-success">Add Expense</a>
                        </td> 
                    <tr>
                     <th>ID </th>
                      <th>Expense Category </th>
                      <th>Amount </th>
                      <th>Item</th>
                      <th>UPDATE</th>
                      <th>DELETE</th>
                    </tr>                  
                    <tbody>
                    </thead>
                     @foreach ($expense as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->expense_name }}</td>
                        <td>{{ $row->expense_price }}</td>
                        <td>{{ $row->expense_purchase }}</td>
                        
                        <td>
                           <a href="click_edit/{{ $row->id }}" class="btn btn-success"> Update </a> 
                        </td>

                        <td>
                          <a href="/click_delete/{{ $row->id }}" class="btn btn-danger"> Delete </a>
                          </td>
                          
                      </tr>
                     
                      @endforeach
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