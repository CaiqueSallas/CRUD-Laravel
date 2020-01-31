		@extends('corpo')
		@section('conteudo')
		<nav class="navbar navbar-expand-lg navbar-light bg-success">
		  <a class="navbar-brand" href="../">Animais</a>		  
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item ">
		        <a class="nav-link" href="{{route('animale.create')}}">Cadastrar</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="{{route('animale.index')}}">Listar</a>
		      </li>
		    </ul>
		  </div>
		</nav>	    

		<table class="table table-warning  mt-auto">
			<center><h4 >Total de animais: {{$total}}</h4></center>
		  <thead class="thead-dark">
		    <tr>
		      <th></th>	
		      <th></th>	
		      <th scope="col">ID</th>
		      <th scope="col">Nome</th>
		      <th scope="col">Característica</th>
		      <th scope="col">Espécie</th>
		      <th scope="col">Habitat</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($animais as $animal)
	    		<tr>
			      <td><a href="{{route('animale.edit', $animal->id)}}" data-toggle="tooltip">Editar</a></td>

		      	  <td><form style="display: inline-block;" method="POST" 
                  action="{{route('animale.destroy', $animal->id)}}"                                       data-toggle="tooltip" data-placement="top"
                  title="Excluir" 
                  onsubmit="return confirm('Confirma exclusão?')">
                  {{method_field('DELETE')}}
                  {{ csrf_field()}}                                                
                  <button type="submit">                                  
                  	<a>Excluir</a>                                                            
                  </button>
                  </form>
              	  </td>	
			      <td>{{$animal->id}}</td>
			      <td>{{$animal->nome_animal}}</td>
			      <td>{{$animal->caracteristicas_animal}}</td>
			      @foreach($especies as $especie)
									@switch($especie->id)
										@case($animal->id_especie)
										<td>{{$especie->nome_especie}}</td>										
									@endswitch
				  @endforeach
				  @foreach($habitats as $habitat)
									@switch($habitat->id)
										@case($animal->id_habitat)
										<td>{{$habitat->nome_habitat}}</td>										
									@endswitch
				  @endforeach			      
			    </tr>
			@endforeach					
		  </tbody>
		</table>
		@endsection