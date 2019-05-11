@extends('templates.master')

@section('content')


    <h2>Ajouter un formateur</h2>
    <hr/>
    <a class="btn btn-primary" href="/formateurs" style="margin-bottom: 15px;">Revenir à la liste</a>
    
    

    
    <form method="post" action="{{route('formateurs.store')}}" enctype="multipart/form-data" style="width:350px; text-align:center; margin-left:430px;">

  {{csrf_field()}}
   <div class="form-group" >
        {!! Form::label('prenom', 'Prenom'); !!}  
        {!! Form::text('prenom', null, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('nom', 'Nom'); !!}
        {!! Form::text('nom', null, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('age', 'Age'); !!}
        {!! Form::number('age', null, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('mobile', 'Telephone'); !!}
        {!! Form::text('mobile', null, [ 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']); !!}
    </div>
    

   {{-- {{ count($formateurs) }} --}}
   <div class="form-group">
        {!! Form::label('specialite', 'Specialité'); !!}
       
    <select class="form-control m-bot15" name="specialite">
        
      <option >Stylisme</option> 
      <option >Couture</option>  
      <option >Creation de mode</option> 
      <option >Manager mode</option>  
      
     </select>
    </div>
    <div class="form-group">
        {!! Form::label('region', 'Région'); !!}
       
    <select class="form-control m-bot15" name="region">
        
      <option >Dakar</option> 
      <option >Thies</option>  
      <option >Louga</option> 
      <option >Saint-louis</option>  
      <option >Fatick</option>
      <option >Kaolack</option>
      <option >Ziguinchor</option>
     </select>
</div>
<div class="form-group">
        {!! Form::label('ville', 'Ville') !!}
        {!! Form::text('ville', null, ['class' => 'form-control']); !!}
    </div>
    
{{-- {{ count($formateurs) }} --}}
   <div class="form-group">
        {!! Form::label('diplome', 'Diplôme'); !!}
       
    <select class="form-control m-bot15" name="diplome">
        
      <option>BFEM</option> 
      <option>BAC + 1</option>  
      <option>BAC + 2</option> 
      <option>BAC + 3</option>  
      <option>BAC + 4</option>  
      <option>BAC + 5</option>
         

     </select>
</div>
<div class="form-group" >
        {!! Form::label('diplomem', 'Diplôme en mode'); !!}
       
    <select class="form-control m-bot15" name="diplomem">
        
      <option>Pas de diplôme</option> 
      <option>CAP</option>  
      <option>BT</option> 
      <option>BTS</option>  
      <option>Licence</option>  
      <option>Master</option>
         

     </select>
</div>

    <div class="form-group" >
{!! Form::label('Carte d’identité', 'Carte d’identité'); !!}

<input type="file" name="file[]" class="myfrm form-control"><br>


</div>

<div class="form-group">
        {!! Form::label('Dernier diplôme ou attestation de formation', 'Dernier diplôme ou attestation de formation') !!}
        <input type="file" name="carte" class="myfrm form-control">
    </div>

<div class="clone hide">

<div class="hdtuto control-group lst input-group" id="removed" style="margin-top:10px">

  <input type="file" name="file[]" class="myfrm form-control">

  <div class="input-group-btn"> 

    <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>

  </div>

</div>

</div>

    

   
   <button type="submit" class="btn btn-success" style="margin-top:10px">S'inscrire</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script>


  $(".btn-success").click(function(){ 

      var lsthmtl = $(".clone").html();

      $(".increment").after(lsthmtl);  

  });

  $("body").on("click",".btn-danger",function(){ 

     
      $('#removed').remove();

  });


</script>
@endsection()
	
	
	
