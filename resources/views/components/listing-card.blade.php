@props(['listing'])

<x-card>

    <div class="flex">
        <img class="mr-6 hidden w-48 md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
            alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listing/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="mb-4 text-xl font-bold">{{ $listing->company }}
            </div>
            <ul class="flex">
                <x-listing-tags :tagsCsv="$listing->tags" />
            </ul>
            <div class="mt-4 text-lg">
                <i class="fa-solid fa-location-dot"></i>
                {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
