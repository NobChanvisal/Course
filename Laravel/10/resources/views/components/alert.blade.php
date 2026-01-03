@if (session('success') || session('error') || $errors->any())
<div>
    <div id="auto-remove-alert"
        class="mb-4 p-4 rounded border transition-opacity duration-500
        {{ session('success')
            ? 'bg-green-100 text-green-800 border-green-200'
            : 'bg-red-100 text-red-800 border-red-200' }}"
    >

        {{-- success message --}}
        @if (session('success'))
            {{ session('success') }}
        @endif

        {{-- error message --}}
        @if (session('error'))
            {{ session('error') }}
        @endif

        {{-- validation errors --}}
        @if ($errors->any())
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

<script>
    setTimeout(() => {
        const alert = document.getElementById('auto-remove-alert');
        if (alert) {
            alert.classList.add('opacity-0');
            setTimeout(() => alert.remove(), 500);
        }
    }, 3000);
</script>
@endif
