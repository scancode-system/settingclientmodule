	{{ Form::model($event_setting->configurable, ['route' => ['settingclient.update', $event_setting->configurable], 'method' => 'put']) }}

	<div class="form-group">
		{{ Form::label('client_start', 'Número inicial de cadastro') }}
		{{ Form::number('client_start', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group row">
		{{ Form::label('corporate_name', 'Razão Social', ['class' => 'col-sm-2 col-form-label']) }}
		<div class="col-sm-10">
			<label class="switch switch-primary switch-lg mb-0 ml-3">
				{{ Form::hidden('corporate_name', 0) }}
				{{ Form::checkbox('corporate_name', 1, null,['class' => 'switch-input']) }}
				<span class="switch-slider"></span>
			</label>
		</div>
	</div>
	<div class="form-group row">
		{{ Form::label('cpf_cnpj', 'CPF/CNPJ', ['class' => 'col-sm-2 col-form-label']) }}
		<div class="col-sm-10">
			<label class="switch switch-primary switch-lg mb-0 ml-3">
				{{ Form::hidden('cpf_cnpj', 0) }}
				{{ Form::checkbox('cpf_cnpj', 1, null,['class' => 'switch-input']) }}
				<span class="switch-slider"></span>
			</label>
		</div>
	</div>
	<div class="form-group row">
		{{ Form::label('buyer', 'Comprador', ['class' => 'col-sm-2 col-form-label']) }}
		<div class="col-sm-10">
			<label class="switch switch-primary switch-lg mb-0 ml-3">
				{{ Form::hidden('buyer', 0) }}
				{{ Form::checkbox('buyer', 1, null,['class' => 'switch-input']) }}
				<span class="switch-slider"></span>
			</label>
		</div>
	</div>
	<div class="form-group row">
		{{ Form::label('email', 'Email', ['class' => 'col-sm-2 col-form-label']) }}
		<div class="col-sm-10">
			<label class="switch switch-primary switch-lg mb-0 ml-3">
				{{ Form::hidden('email', 0) }}
				{{ Form::checkbox('email', 1, null,['class' => 'switch-input']) }}
				<span class="switch-slider"></span>
			</label>
		</div>
	</div>
	<div class="form-group row">
		{{ Form::label('phone', 'Telefone', ['class' => 'col-sm-2 col-form-label']) }}
		<div class="col-sm-10">
			<label class="switch switch-primary switch-lg mb-0 ml-3">
				{{ Form::hidden('phone', 0) }}
				{{ Form::checkbox('phone', 1, null,['class' => 'switch-input']) }}
				<span class="switch-slider"></span>
			</label>
		</div>
	</div>


	{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
	{{ Form::close() }}
