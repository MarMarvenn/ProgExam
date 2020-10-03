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
                      <th>Expense Category </th>
                      <th>Amount </th>
                      <th>Item</th>
                      <th>Add Expense</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Transpo</td>
                        <td>350</td>
                        <td>Pamasahe</td>

                        <td>
                            <a href="expense" class="btn btn-success">Add Expense</a>
                        </td>

                        <td>
                          <form action="" method="post">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                          </form>
                          </td>
                      </tr>
                     
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