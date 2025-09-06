<div class="py-4 px-5 gap-2">
    <flux:heading size="lg" class="py-3">Cookie Consent Records</flux:heading>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Guid
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Accepted at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Expires at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Version
                    </th>
                </tr>
            </thead>
            <tbody>
                @if($cookies->isNotEmpty())
                    @foreach ($cookies as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$item->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$item->accepted_at}}
                            </td>
                            <td class="px-6 py-4">
                                {{$item->expires_at}}
                            </td>
                            <td class="px-6 py-4">
                                {{$item->version}}
                            </td>
                        </tr>
                    @endforeach
                @else
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-full text-center" colspan="4">
                                Empty
                            </th>

                        </tr>
                @endif

            </tbody>
        </table>
    </div>

    {{-- </div> --}}
</div>
