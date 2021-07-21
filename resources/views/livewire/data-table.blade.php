



<div>
  <div class="d-flex justify-content-between">
  </div>
  <table class="table table-bordered table-left">
      <thead>
          <tr>
              <th>#</th>
              @foreach ($tableColumnsName as $column)
              <th> {{$column}} </th>    
              @endforeach
              <th>Actions</th>
          </tr>
      </thead>
      <tbody>
          
          @foreach ($tableRows as $key => $row)
          <tr>
              <td>{{$key+1}}</td>
              @foreach ($tableColumns as $column)
              <td> 
                  @if ($column == "alert_stock")
                      @if ($row['alert_stock'] >= $row['quantity']) 
                          <span class="badge badge-danger">Low Stock: must be > {{$row['alert_stock']}}</span>
                      @else
                          <span class="badge badge-success">{{$row['alert_stock']}}</span>
                      @endif
                  @elseif($column == "is_admin")    
                      @if ($row['is_admin'] == 1) Admin
                      @else Cashier
                      @endif 
                  @else
                  {{$row[$column]}} 
                  @endif

              </td>    
              @endforeach
              <td>
                  <div class="btn-group">
                      <a href="#" class="btn btn-info btnt-sm"
                      data-toggle="modal" 
                      data-target="#editproduct{{$row['id']}}">
                          <i class="fas fa-edit"> Edit</i></a>
                          <a href="#"  data-toggle="modal" 
                          data-target="#deleteItem{{$row['id']}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
                  </div>
              </td>
          </tr>

        <div class="modal right fade" id="deleteItem{{$row['id']}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="staticBackdropLabel">Delete User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
              {{$row['id']}}   
            </div>
            <div class="modal-body">
              <form action="{{$deleteRoute.$row['id'] }} " method="POST">
            
                @csrf
                @method('delete')
            <p>Are you sure you want to delete this {{$row[$rowNameRepresentative]}} ?</p>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger"> Delete </button>
                </div>
            </form>
              
            </div>
            
          </div>
            </div>
        </div>  
          @endforeach
          @if (sizeof($tableRows) == 0)
              <tr>
                  <td class="text-center text-danger" colspan=" {{ sizeof($tableColumns) + 2 }} ">No Result Found</td>
              </tr>
          @endif
      </tbody>
  </table>
</div>
