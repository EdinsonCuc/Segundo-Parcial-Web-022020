
<div class="form-group">
<label form="Codigo" class="control-label">{{'Código'}}</label>
<input type="text" class="form-control {{$errors->has('Codigo')? 'is-invalid':''}}"  name="Codigo" id="Codigo"
value="{{ isset($productos->Codigo)?$productos->Codigo:old('Codigo')}}">
{!! $errors->first('Codigo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label form="Descripcion" class="control-label">{{'Descripción'}}</label>
<input type="text" class="form-control {{$errors->has('Descripcion')? 'is-invalid':''}}" name="Descripcion" id="Descripcion" 
value="{{ isset($productos->Descripcion)?$productos->Descripcion:old('Descripcion')}}">
{!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
<label form="Precio_compra" class="control-label">{{'Precio de compra'}}</label>
<input type="text" class="form-control {{$errors->has('Precio_compra')? 'is-invalid':''}}" name="Precio_compra" id="Precio_compra" 
value="{{ isset($productos->Precio_compra)?$productos->Precio_compra:old('Precio_compra')}}">
{!! $errors->first('Precio_compra','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label form="Precio_venta"class="control-label">{{'Precio de venta'}}</label>
<input type="text" class="form-control {{$errors->has('Precio_venta')? 'is-invalid':''}}" name="Precio_venta" id="Precio_venta" 
value="{{ isset($productos->Precio_venta)?$productos->Precio_venta:old('Precio_venta')}}">
{!! $errors->first('Precio_venta','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label form="Ganancia"class="control-label">{{'Ganancia'}}</label>
<input type="text" class="form-control {{$errors->has('Ganancia')? 'is-invalid':''}}" name="Ganancia" id="Ganancia" 
value="{{ isset($productos->Ganancia)?$productos->Ganancia:old('Ganancia')}}">
{!! $errors->first('Ganancia','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label form="Existencia"class="control-label">{{'Existencia'}}</label>
<input type="text" class="form-control {{$errors->has('Existencia')? 'is-invalid':''}}" name="Existencia" id="Existencia" 
value="{{ isset($productos->Existencia)?$productos->Existencia:old('Existencia')}}">
{!! $errors->first('Existencia','<div class="invalid-feedback">:message</div>') !!}
</div>

<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">

<a class="btn btn-primary" href="{{url('productos')}}">Regresar</a>