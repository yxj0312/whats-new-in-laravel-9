
<x-app-layout>
    <x-slot name="header">
    </x-slot>

<header class="bg-white shadow">
  <div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="md:flex md:items-center md:justify-between">
      <div class="flex-1 min-w-0">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
          Features
        </h2>
      </div>
      <div class="mt-4 flex md:mt-0 md:ml-4">
        <span class="shadow-sm rounded-md">
          <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-gray-800 active:bg-gray-50 transition duration-150 ease-in-out">
            New feature
          </button>
        </span>
      </div>
    </div>
  </div>
</header>

<main class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-12">
  <div class="mb-12 grid grid-cols-3 gap-8">
      <div class="bg-orange-400 shadow rounded-lg flex items-center justify-between px-8 py-5">
          <div class="flex items-center">
              <svg class="text-white fill-current w-8 h-8" viewBox="0 0 20 20">
                  <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
              </svg>
              <div class="ml-3 text-white font-medium">Requested</div>
          </div>
          <div class="text-white ml-3 text-2xl font-medium">{{ $statuses->requested }}</div>
      </div>
      <div class="bg-blue-500 shadow rounded-lg flex items-center justify-between px-8 py-5">
          <div class="flex items-center">
              <svg class="text-white fill-current w-7 h-7" viewBox="0 0 20 20">
                  <path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z" />
              </svg>
              <div class="ml-3 text-white font-medium">Planned</div>
          </div>
          <div class="text-white ml-3 text-2xl font-medium">{{ $statuses->planned }}</div>
      </div>
      <div class="bg-green-400 shadow rounded-lg flex items-center justify-between px-8 py-5">
          <div class="flex items-center">
              <svg class="text-white fill-current w-8 h-8" viewBox="0 0 20 20">
                  <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
              </svg>
              <div class="ml-3 text-white font-medium">Completed</div>
          </div>
          <div class="text-white ml-3 text-2xl font-medium">{{ $statuses->completed }}</div>
      </div>
  </div>

  <div class="flex flex-col">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg">
        <table class="min-w-full">
          <thead>
            <tr>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Comments
              </th>
              <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($features as $feature)
              <tr class="bg-white">
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium text-gray-900">
                  {{ $feature->title }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                  @if ($feature->status === 'Requested')
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-700">
                          Requested
                      </span>
                  @elseif ($feature->status === 'Planned')
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-700">
                          Planned
                      </span>
                  @elseif ($feature->status === 'Completed')
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          Completed
                      </span>
                  @endif
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                  {{ $feature->comments_count }} {{ Str::plural('comment', $feature->comments_count) }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                  <a href="/features/{{ $feature->id }}" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Edit</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $features->links() }}
      </div>
    </div>
  </div>
</main>

</x-app-layout>