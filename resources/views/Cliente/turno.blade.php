<x-guest-layout>
	<div class="md:container md:mx-auto">
		<div class="mt-20">
				<div class="mt-4">
					<x-jet-label for="operation" value="{{ __('Email') }}" />
					<h1>Hola</h1>
					<h2>Hola</h2>
					<h3>Hola</h3>
					<select class="block mt-1 w-full appearance-none">
							<option>Retiro</option>
							<option>Transferencia</option>
							<option>Deposito</option>
					</select>
				</div>

				<div class="mt-4">
					<x-jet-label for="FolioTurn" value="{{ __('Folio') }}" />
					<x-jet-input id="Folio" class="block mt-1 w-full" type="text" name="Folio" />
				</div>
		</div>
	</div>
</x-guest-layout>