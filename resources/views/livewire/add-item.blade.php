<div class="modal right fade" id="addsupplier" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="staticBackdropLabel">Add Supplier</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>   
  </div>
  <div class="modal-body">
    
    <form action="{{$saveRoute}}" method="POST">
  
      @csrf
      @foreach ($formInputs as $input)
        <div class="form-group">
          <label for="{{$input['name']}}"> {{$input['label']}} </label>
          <input type="{{$input['type']}}" name="{{$input['name']}}" id="{{$input['name']}}" class="form-control @if(session('fromAdd')) @error( $input['name'] ) border border-danger @enderror @endif" value=" {{$input['value']}}">
          @if(session('fromAdd'))
          @error(  $input['name']  )
              <strong class="text-danger">{{ $message }}</strong>
          @enderror  
          @endif
      </div>
      @endforeach
      
      <div class="modal-footer">
          <button class="btn btn-primary btn-block">Save {{$formName}}</button>
      </div>
  </form>
    
  </div>
  
</div>