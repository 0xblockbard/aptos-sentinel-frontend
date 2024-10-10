@extends('default')

@section('content')

    <div class="flex max-w-7xl w-full px-6 py-6 mx-auto">

        <div class="flex flex-col h-full w-full mt-6 ml-4">

            <h3 class="text-3xl text-sky-600 font-extrabold">Top Supporters</h3>
            <span class="w-14 border-2 border-sky-600 mt-2"></span>

            <div class="flex flex-col mt-8">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-sky-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-sky-200">
                                <thead class="bg-sky-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-extrabold text-sky-500 uppercase tracking-wider">
                                        Address
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-extrabold text-sky-500 uppercase tracking-wider">
                                        Campaigns Supported
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-extrabold text-sky-500 uppercase tracking-wider">
                                        Total Supported
                                    </th>
                                </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-sky-200">

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-sky-900">
                                            tz1LCPqDXvXJFT1CEVQ7mqkXBExHngnW5WP5
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-sky-500">
                                            3
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-sky-500">
                                            60 XTZ
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-sky-900">
                                            tz1MbczYpXD4pWELt1WEfm4Nyibapi1ipi51
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-sky-500">
                                            2
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-sky-500">
                                            20 XTZ
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-sky-900">
                                            tz1LJhLRVc5wXjvQzir5ccTWKfKaCPi459F3
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-sky-500">
                                            5
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-sky-500">
                                            30 XTZ
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
