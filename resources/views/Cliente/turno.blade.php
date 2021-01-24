<x-guest-layout >
<div class="md:container md:mx-auto box-border h-100 w-32 p-4 border-4 static">
	
		<div class="grid grid-rows-3 grid-flow-col gap-4">
			
			<div class="col-span-2 border-4">2</div>
			<div class="row-span-2 col-span-2 border-4">
				<form method="POST" action="{{ route('turno') }}">
				@csrf
						<div class="mt-2">
							<div class="mt-4">
							<x-jet-label for="operation" value="{{ __('Email') }}" />
							<select id="operation" name="operation" class="block mt-1 w-full appearance-none">
							@foreach ($operations as $operation)
									<option value="{{$operation->id}}">{{$operation ->description}}</option>
									@endforeach
							</select>
							</div>

							<div class="group border-indigo-500 hover:bg-white mt-4">
								<p class="text-indigo-600  ...">Turno Siguiente</p>
								<input id="folio" name="folio" type="text" class="text-indigo-500 " value="{{$folio[0]->Folio}}"  readonly="readonly"></input>
							</div>
													
							<div class="mt-10">
							<button class="w-full uppercase px-8 py-2 border border-blue-600 text-blue-600 shadow-sm hover:shadow-lg">button
							</button>
							</div>
						</div>
				</form>
			</div>
		</div>
</div>
</x-guest-layout>