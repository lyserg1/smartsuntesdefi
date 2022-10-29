@include('layouts.navheader2')


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Climas</h1>
@stop

@section('content')
    <p>Registros de Temperatura y Humedad.</p>



    <div class="table w-full p-2">
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">
                    <th class="border-r p-2">
                        <input type="checkbox">
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            ID
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Temperatura
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Humedad
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Fecha
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>

                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Mes
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>



                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-50 text-center">
                    <td class="p-2 border-r">

                    </td>
                    <td class="p-2 border-r">
                        <input type="text" class="border p-1">
                    </td>
                    <td class="p-2 border-r">
                        <input type="text" class="border p-1">
                    </td>
                    <td class="p-2 border-r">
                        <input type="text" class="border p-1">
                    </td>
                    <td class="p-2 border-r">
                        <input type="text" class="border p-1">
                    </td>
                    <td class="p-2">
                        <input type="text" class="border p-1">
                    </td>


                </tr>
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    <td class="p-2 border-r">
                        <input type="checkbox">
                    </td>
                    <td class="p-2 border-r">1</td>
                    <td class="p-2 border-r">John Doe</td>
                    <td class="p-2 border-r"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c262324220c2b212d2520622f2321">[email&#160;protected]</a></td>
                    <td class="p-2 border-r">Sydney, Australia</td>

                </tr>
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    <td class="p-2 border-r">
                        <input type="checkbox">
                    </td>
                    <td class="p-2 border-r">2</td>
                    <td class="p-2 border-r">Adam Smith</td>
                    <td class="p-2 border-r"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ceafaaafa38ea9a3afa7a2e0ada1a3">[email&#160;protected]</a></td>
                    <td class="p-2 border-r">Sydney, Australia</td>

                </tr>
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    <td class="p-2 border-r">
                        <input type="checkbox">
                    </td>
                    <td class="p-2 border-r">3</td>
                    <td class="p-2 border-r">Jean Doe</td>
                    <td class="p-2 border-r"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b515e5a557b5c565a525715585456">[email&#160;protected]</a></td>
                    <td class="p-2 border-r">Sydney, Australia</td>

                </tr>
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    <td class="p-2 border-r">
                        <input type="checkbox">
                    </td>
                    <td class="p-2 border-r">3</td>
                    <td class="p-2 border-r">Jean Doe</td>
                    <td class="p-2 border-r"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87ede2e6e9c7e0eae6eeeba9e4e8ea">[email&#160;protected]</a></td>
                    <td class="p-2 border-r">Sydney, Australia</td>

                </tr>
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    <td class="p-2 border-r">
                        <input type="checkbox">
                    </td>
                    <td class="p-2 border-r">3</td>
                    <td class="p-2 border-r">Jean Doe</td>
                    <td class="p-2 border-r"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96fcf3f7f8d6f1fbf7fffab8f5f9fb">[email&#160;protected]</a></td>
                    <td class="p-2 border-r">Sydney, Australia</td>

                </tr>
            </tbody>
        </table>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
