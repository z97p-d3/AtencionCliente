@extends( 'Layout.admin' )

@section( 'contenido' )
<h3>Nuevo Cliente</h3>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Identificacion</label>
    <input type="" class="form-control" id="exampleFormControlInput1" placeholder="123456789">
  </div>
	  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="" class="form-control" id="exampleFormControlInput1" placeholder="Javier Pilacuan">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlSelect2">Cola 1</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>darkajsdkfhdk</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Cola 2</label>
   <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<div class="row">
	<div class="col-lg-6 col md-6 col-sm-12 col-xs-12 col-xl-12">
		 @if (count($errors)>0)
		
		
		

		</div>
		<div class="alert alert-danger">
			<ul>

				@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>

			@endif
		</div>
	



</div>





@stop