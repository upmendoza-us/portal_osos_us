@extends('Website.main')

@section('main-content')

<div class="back2">

	<div class="row" style="margin: 1%">

		<div class="col-md-6">

			<div class="row">

				<div class="col-md-12">
					
					<h1 class="text-white">Por favor,</h1>
					<h1 class="text-white">Brindanos tu información</h1>
					
				</div>
				
				<div class="col-md-12">
					
					<img src="{{asset('img/temple/osos_alfa.png')}}" class="osos_alfa">
					
				</div>
				
			</div>
			
		</div>

		<div class="col-md-6">

			<div class="card card-custom">

				<div class="card-header text-center">

					<h3>Se parte de nosotros</h3>

				</div>

				<form action="">

					<div class="card-body">

						<div class="row">

							<div class="col-md-6">
								
			                 	<div class="input-group mb-3">

								  	<label class="field a-field a-field_a2">

									    <input class="field__input a-field__input" placeholder="Nombre(s)" required>

									    <span class="a-field__label-wrap">

									        <span class="a-field__label">Nombre</span>

									    </span>

									</label> 

								</div>

								<div class="input-group mb-3">

								  	<label class="field a-field a-field_a2">

									    <input class="field__input a-field__input" placeholder="Ingrese su direccion" required>

									    <span class="a-field__label-wrap">

									        <span class="a-field__label">Direccion</span>

									    </span>

									</label> 

								</div>

								<div class="input-group mb-3">

								  	<label class="field a-field a-field_a2">

									    <input class="field__input a-field__input" placeholder="ej. example@example.com" required>

									    <span class="a-field__label-wrap">

									        <span class="a-field__label">E-mail</span>

									    </span>

									</label> 

								</div>

				            </div>

				            <div class="col-md-6">

				            	<div class="input-group mb-3">

								  	<label class="field a-field a-field_a2">

									    <input class="field__input a-field__input" placeholder="Ingrese sus apellidos" required>

									    <span class="a-field__label-wrap">

									        <span class="a-field__label">Apellidos</span>

									    </span>

									</label> 

								</div>

								<div class="input-group mb-3">

								  	<label class="field a-field a-field_a2">

									    <input class="field__input a-field__input" placeholder="¿cual fue su preparetoria?" required>

									    <span class="a-field__label-wrap">

									        <span class="a-field__label">Preparetoria</span>

									    </span>

									</label> 

								</div>

								<div class="input-group mb-3">

								  	<label class="field a-field a-field_a2">

									    <input type="password" class="field__input a-field__input" placeholder="Ingrese un password" required>

									    <span class="a-field__label-wrap">

									        <span class="a-field__label">password</span>

									    </span>

									</label> 

								</div>

				            </div>

				            <div class="col-md-12">

				            	<div class="select">

									<select class="select-text" required>
										<option value="" disabled selected></option>
									</select>

									<span class="select-highlight"></span>
									<span class="select-bar"></span>
									<label class="select-label">¿Qué carrera quisiera estudiar?</label>

								</div>

				            </div>

						</div>

					</div>
						
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-warning button-custom">Ser aspirante</button>
							</div>
						</div>
					</div>

				</form>

			</div>

		</div>

	</div>

</div>

@stop