<x-app-layout>
    <div>
        @livewire('nav')
        <!--profile data-->
        <div class="bg-gray-100 h-auto px-48">

            <hr class="border-gray-500 mt-6" />
            <hr class="w-20 border-t-1 ml-64 border-gray-800" />

            <!--post icon and title-->
            <div class="flex flex-row mt-4 justify-center mr-16">
                <div class="flex text-gray-700 text-center py-2 m-2 pr-5">
                    <div class="inline-flex">
                        <button
                            class="border-transparent text-gray-800 rounded-full hover:text-blue-600 focus:outline-none focus:text-gray-600"
                            aria-label="Notifications">
                            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                            </svg>
                        </button>
                    </div>
                    <div class="inline-flex ml-2 mt-1">
                        <h3 class="text-sm font-bold text-gray-800 mr-2">POSTS</h3>
                    </div>
                </div>
            </div>

            <!--post images-->
            @livewire('show-posts',['posts' => $viewModel->posts ])
    </div>
</x-app-layout>
