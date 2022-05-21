@extends('layouts.app')

@section('content')
	<div>
		<div class="flex justify-between">
			<h1 class="text-2xl font-bold">{{ __('My projects') }}</h1>
			<a href="{{ route('project.create') }}" class="text-xl font-bold bg-indigo-500 rounded-lg px-3 py-1 text-white cursor-pointer hover:bg-indigo-700">
				{{ __('Create a project') }}
			</a>
		</div>
		@if (session('success'))
			<x-alert type="success" :message="session('success')"/>
		@endif
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-5">
			@forelse ($projects as $project)
				<a href="{{ route('project.show', $project) }}">
					<div class="flex flex-col bg-white rounded-lg p-3 hover:scale-105 hover:bg-indigo-100 transition-all">
						<h2 class="font-bold">{{ $project->name }}</h2>
						<span>{{ $project->getDescription(50) }}</span>
						<span>{{ __('Start date:') }} {{ $project->getStartDate() }}</span>
						@if ($project->getEndDate())
							<span>{{ __('End date:') }} {{ $project->getEndDate() }}</span>
						@endif
					</div>
				</a>
			@empty
				{{ __('You do not have any project.') }}
			@endforelse
		</div>
		@if ($projects->isNotEmpty())
			<div class="mt-5">
				{{ $projects->links() }}
			</div>
		@endif
	</div>
@endsection