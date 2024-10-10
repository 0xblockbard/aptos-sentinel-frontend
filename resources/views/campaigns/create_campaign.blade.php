@extends('default')

@section('content')

    <div class="flex w-full py-24" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728199270/header-3.png'); background-size: cover; background-position: center;">
        <div class="max-w-7xl">
            <div class="flex flex-col ml-16 sm:ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
                <h3 class="text-3xl text-sky-600 font-extrabold">Start Campaign</h3>
                <span class="w-14 border-2 border-sky-600 mt-1"></span>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-full sm:w-8/12 px-12 py-6 m-auto">

        <div class="flex flex-col pl-3">

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-yellow-700">
                            Notice: Campaign will be created on Aptos Testnet
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="create_campaign_form" class="w-full mt-6 mb-32 create_campaign_form">
            <div class="flex flex-col sm:flex-row mb-8">

                <div class="flex flex-col w-full pr-1">

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                            Name
                        </label>
                        <input id="name" autocomplete="off" class="name appearance-none shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full px-2 py-2 sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="Project title">
                    </div>

                    <div class="w-full px-3 sm:mt-6">
                        <label class="block mb-2" for="description">
                            <span class="uppercase tracking-wide text-gray-700 text-xs font-bold">About</span>
                            {{-- <span class="pl-2 italic text-gray-500 text-xs">*You can add more text and multimedia in Step 2</span> --}}
                        </label>
                        <textarea id="description" name="description" rows="3" class="description appearance-none shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full px-2 py-2  sm:text-sm border border-gray-300 rounded-md" placeholder="Tell us about your project"></textarea>
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0 mt-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="start_imagedate">
                            Featured Image (URL or IPFS)
                        </label>
                            <input id="image_url" autocomplete="off" class="image_url appearance-none shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full px-2 py-2 sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="Full url or ipfs://">
                    </div>

                </div>

                <div class="flex flex-col w-full pl-1">

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="crowdfund_type">
                            Crowdfunding Type
                        </label>
                        <div class="mt-1 sm:mt-0 w-full relative">
                            <select id="crowdfund_type" name="crowdfund_type" class="crowdfund_type appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                                <option value="KIA" {{ old('crowdfund_type') == 'KIA' ? 'selected' :''  }}>Flexible (Keep-it-all Model)</option>
                                <option value="AON" {{ old('crowdfund_type') == 'AON' ? 'selected' :''  }}>Fixed (All-or-nothing Model)</option>
                            </select>
                            <!-- Dropdown arrow -->
                            <div class="pointer-events-none absolute inset-y-0 right-0 top-1 flex items-center pr-2">
                                <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707 1.707L6.414 9.707a1 1 0 01-1.414 0L.293 4.707A1 1 0 111.707 3.293l4 4 4-4A1 1 0 0110 3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0 sm:mt-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="funding_goal">
                            Funding Goal
                        </label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="funding_goal" id="funding_goal" class="funding_goal px-2 py-2 focus:ring-sky-500 focus:border-sky-500 block w-full  pr-12 sm:text-sm border border-gray-300 rounded-md" placeholder="Your crowdfunding target">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                             <span class="text-gray-500 sm:text-sm font-semibold">
                                APT
                             </span>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0 sm:mt-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="crowdfund_type">
                            Duration
                        </label>
                        <div class="mt-1 sm:mt-0 w-full relative">
                            <select id="duration" name="duration" class="duration appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                                <option value="3" {{ old('duration') == '3' ? 'selected' :''  }}>3 days</option>
                                <option value="7" {{ old('duration') == '7' ? 'selected' :''  }}>7 days</option>
                                <option value="14" {{ old('duration') == '14' ? 'selected' :''  }}>14 days</option>
                                <option value="30" {{ old('duration') == '30' ? 'selected' :''  }}>30 days</option>
                            </select>
                            <!-- Dropdown arrow -->
                            <div class="pointer-events-none absolute inset-y-0 right-0 top-1 flex items-center pr-2">
                                <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707 1.707L6.414 9.707a1 1 0 01-1.414 0L.293 4.707A1 1 0 111.707 3.293l4 4 4-4A1 1 0 0110 3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div id="create_campaign_form_submit"></div>

        </div>
    </div>

@endsection
