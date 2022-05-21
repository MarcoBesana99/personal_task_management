@extends('layouts.app')

@section('content')
	<div>
		<h1 class="text-2xl font-bold">{{ __('Create a project') }}</h1>
		<form class="mt-5 flex-col" action="{{ route('project.store') }}" method="POST">
			@csrf
			<div class="flex flex-col">
				<label for="name">{{ __('Name') }}</label>
				<input class="rounded-lg" type="text" name="name" value="{{ old('name') }}">
				@error('name')
					<div class="text-red-500">{{ $message }}</div>
				@enderror
			</div>
			<div class="flex flex-col mt-5">
				<label for="description">{{ __('Description') }}</label>
				<textarea class="rounded-lg" name="description" cols="30" rows="5">{{ old('description') }}</textarea>
				@error('description')
					<div class="text-red-500">{{ $message }}</div>
				@enderror
			</div>
			<div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
				<div class="flex flex-col">
					<label for="start_date">{{ __('Start date') }}</label>
					<input class="rounded-lg" type="text" id="startdate" name="start_date" value="{{ old('start_date') }}">
					@error('start_date')
						<div class="text-red-500">{{ $message }}</div>
					@enderror	
				</div>
				<div class="flex flex-col">
					<label for="end_date">{{ __('End date') }}</label>
					<input class="rounded-lg" type="text" id="enddate" name="end_date" value="{{ old('end_date') }}">
					@error('end_date')
						<div class="text-red-500">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<button type="submit" class="mt-5 text-lg font-bold bg-indigo-500 rounded-lg px-3 py-1 text-white cursor-pointer hover:bg-indigo-700">{{ __('Create') }}</button>
		</form>
	</div>
@endsection

@push('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript">
		$(document).ready(() => {
			$('#startdate').datepicker()
			$('#enddate').datepicker()
		})
	</script>
@endpush

@push('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush