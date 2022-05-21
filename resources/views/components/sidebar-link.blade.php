<a
    href="{{ $href }}"
    class="flex flex-row items-center h-10 px-3 rounded-lg hover:bg-gray-100 hover:text-gray-700 transition-all {{ $isActive ? 'bg-gray-100 text-gray-700' : 'text-gray-300' }}"
>
    <span class="flex items-center justify-center text-lg text-gray-400">
    <svg
        fill="none"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        viewBox="0 0 24 24"
        stroke="currentColor"
        class="h-6 w-6"
    >
        <path
        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
        />
    </svg>
    </span>
    <span class="ml-3">{{ $text }}</span>
    @if (!empty($badge))
        <span
            class="flex items-center justify-center text-xs text-red-500 font-semibold bg-red-100 h-6 px-2 rounded-full ml-auto"
        >
            {{ $badge }}
        </span>
    @endif
</a>