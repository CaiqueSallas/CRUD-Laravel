				@extends('corpo')
				@section('conteudo')
				<nav class="navbar navbar-expand-lg navbar-light bg-success">
				  <a class="navbar-brand" href="../">Animais</a>		  
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav">
				      <li class="nav-item active">
				        <a class="nav-link" href="{{route('animale.create')}}">Cadastrar</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="{{route('animale.index')}}">Listar</a>
				      </li>
				    </ul>
				  </div>
				</nav>
				<div class="container col-lg-8  mt-4">
					<h3>
						Cadastrar animal:
					</h3>
					<form method="post" action="{{route('animale.store')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="nome_animal">
								Nome:
							</label>
							<input type="text" name="nome_animal" class="form-control" placeholder="nome do animal" required>
						</div>

						<div class="form-group">
							<label for="caracteristicas_animal">
								Caracteristicas:
							</label>
							<input type="text" name="caracteristicas_animal" class="form-control" placeholder="caracteristicas do animal" required>
						</div>

						<div class="form-group">
							<label for="id_especie">
								Especie:
							</label>
							<select name="id_especie" class="form-control" required>
								@foreach($especies as $especie)
									<option value="{{$especie->id}}"> {{$especie->nome_especie}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="id_habitat">
								Habitat:
							</label>
							<select name="id_habitat" class="form-control" required>
								@foreach($habitats as $habitat)
									<option value="{{$habitat->id}}"> {{$habitat->nome_habitat}}</option>
								@endforeach
							</select>
						</div>

						<br><br>

						<button type="submit" class="btn btn-warning" id="black">
							Cadastrar
		       			</button>													
					</form>
				</div>
				@endsection