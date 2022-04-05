<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
                    <!--
                      This example requires updating your template:

                      ```
                      <html class="h-full bg-gray-100">
                      <body class="h-full">
                      ```
                    -->
                    <form method="post">
                        @csrf
                    <div class="min-h-full">
                        <main class="py-10">
                            <!-- Page header -->
                            <div class="max-w-3xl mx-auto px-4 sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">
                                <div class="flex items-center space-x-5">

                                    <div>
                                        <h1 class="text-2xl font-bold text-gray-900">{{$prod->naam}}</h1>
                                    </div>
                                </div>
                                <div class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">
                                    <a href="/prod/{{$prod->id}}/delete" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm">Delete</a>
                                    <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">Sla Op</button>
                                </div>
                            </div>

                            <div class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
                                <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                                    <!-- Description list-->
                                    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
                                        <div class="md:grid md:grid-cols-3 md:gap-6">
                                            <div class="md:col-span-1">
                                                <h3 class="text-lg font-medium leading-6 text-gray-900">Data</h3>
                                            </div>
                                            <div class="mt-5 md:mt-0 md:col-span-2">
                                                <form action="#" method="POST">
                                                    <div class="grid grid-cols-6 gap-6">
                                                        <div class="col-span-6">
                                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Username</label>
                                                            <input type="text" name="name" value="{{$prod->naam}}" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
