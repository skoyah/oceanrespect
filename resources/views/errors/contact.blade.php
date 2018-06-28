@if( count($errors) )

<div class="flex items-center text-red-light bg-red-lightest px-4 py-2 sm:self-start mb-8 rounded border border-red-lighter">
    <i class="fas fa-exclamation-triangle mr-4 text-3xl"></i>

    <ul class="list-reset block text-sm">

        @foreach($errors->all() as $error)
            <li class="my-2">
                {{ $error }}
            </li>
        @endforeach
    </ul>
</div>

@endif
