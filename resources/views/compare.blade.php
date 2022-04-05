<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enerig vergelijker') }}
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
                    <div class="bg-gray-50">
                        <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                            <h2 class="sr-only">Checkout</h2>

                            <form method="post" class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
                                <div>
                                    <div>
                                        <h2 class="text-lg font-medium text-gray-900">Kantgegevens</h2>

                                        <div class="mt-4">
                                            <label for="email-address" class="block text-sm font-medium text-gray-700">Email adres</label>
                                            <div class="mt-1">
                                                <input type="email" name="email" id="email-address" name="email-address" autocomplete="email" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>
                                        </div>
                                        <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                                            <div>
                                                <label for="first-name" class="block text-sm font-medium text-gray-700">Voornaam</label>
                                                <div class="mt-1">
                                                    <input type="text" name="voornaam" id="first-name" name="first-name" autocomplete="given-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="last-name" class="block text-sm font-medium text-gray-700">Achternaam</label>
                                                <div class="mt-1">
                                                    <input type="text" name="achternaam" id="last-name" name="last-name" autocomplete="family-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                </div>
                                            </div>


                                            <div class="sm:col-span-2">
                                                <label for="address" class="block text-sm font-medium text-gray-700">Adres</label>
                                                <div class="mt-1">
                                                    <input type="text" name="adres" id="address" autocomplete="street-address" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                </div>
                                            </div>



                                            <div>
                                                <label for="city" class="block text-sm font-medium text-gray-700">Stad</label>
                                                <div class="mt-1">
                                                    <input type="text" name="plaats" id="city" autocomplete="address-level2" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="postal-code" class="block text-sm font-medium text-gray-700">Postcode</label>
                                                <div class="mt-1">
                                                    <input type="text" name="postcode" id="postal-code" autocomplete="postal-code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <label for="phone" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                                                <div class="mt-1">
                                                    <input type="text" name="telnr" id="phone" autocomplete="tel" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-10 border-t border-gray-200 pt-10">
                                        <h2 class="text-lg font-medium text-gray-900">Energieproducten</h2>

                                        <fieldset class="mt-4">
                                            <legend class="sr-only">Energie Producten</legend>
                                            <div class="space-y-4 ">
                                                @foreach($products as $product)
                                                <div class="flex items-center">
                                                    <input id="rd{{$product->id}}" name="energy_id" value="{{$product->id}}" type="radio" required class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                    <label for="rd{{$product->id}}" class="ml-3 block text-sm font-medium text-gray-700">
                                                        {{$product->naam}} </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </fieldset>
                                        <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                                        <div>
                                            <label for="city" class="block text-sm font-medium text-gray-700">Gas verbruik</label>
                                            <div class="mt-1">
                                                <input type="text" name="verbruik_g" id="city" autocomplete="address-level2" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>
                                        </div>

                                        <div>
                                            <label for="postal-code" class="block text-sm font-medium text-gray-700">Energie verbruik</label>
                                            <div class="mt-1">
                                                <input type="text" name="verbruik_e" id="postal-code" autocomplete="postal-code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <!-- Payment -->
                                    <div class="mt-10 border-t border-gray-200 pt-10">
                                        <h2 class="text-lg font-medium text-gray-900">Betaling</h2>


                                        <div class="mt-6 grid grid-cols-4 gap-y-6 gap-x-4">
                                            <div class="col-span-4">
                                                <label for="card-number" class="block text-sm font-medium text-gray-700">IBAN</label>
                                                <div class="mt-1">
                                                    <input type="text" required name="iban" id="card-number" name="card-number" autocomplete="cc-number" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Order summary -->
                                <div class="mt-10 lg:mt-0">

                                    <div class="mt-4 bg-white border border-gray-200 rounded-lg shadow-sm">

                                        <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                                            <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Aanvraag indienen</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
