<nav class="fixed w-full bg-white shadow z-20 border-b border-transparent">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14">
            <div class="flex sm:w-3/5">
                <div class="flex-shrink-0 flex items-center">

                    <a href="{{ route('home') }}" class="inline-flex items-center py-2 ml-2 relative top-0.5">
                        <span class=" text-lg font-extrabold text-sky-600 hover:text-sky-800">Sentinel</span>
                    </a>

                </div>

                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    
                    <a href="{{ route('about') }}" class="{{ \Request::route()->getName() == 'about' ? 'border-sky-500 text-sky-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-sky-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium hover:border-sky-500">
                        About
                    </a>

                    <a href="{{ route('kyc') }}" class="{{ \Request::route()->getName() == 'kyc' || \Request::route()->getName() == 'show_campaign' ? 'border-sky-500 text-sky-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-sky-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium hover:border-sky-500">
                        KYC
                    </a>

                    <a href="{{ route('transaction_policies') }}" class="{{ \Request::route()->getName() == 'transaction_policies' || \Request::route()->getName() == 'show_campaign' ? 'border-sky-500 text-sky-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-sky-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium hover:border-sky-500">
                        Transaction Policies
                    </a>

                    <a href="{{ route('guide') }}" class="{{ \Request::route()->getName() == 'guide' ? 'border-sky-500 text-sky-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-sky-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium hover:border-sky-500">
                        Guide
                    </a>

                </div>

            </div>

        <div class="ml-6 flex items-center">

            {{-- <a href="{{ route('create_campaign') }}" class="mr-4">
                <button type="button" class="nav_start_campaign_button invisible items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 transition duration-300">
                    Start Campaign
                </button>
            </a> --}}

            <div id="connect-wallet" class="connect_wallet cursor-pointer text-sm font-semibold">
                connect
            </div>

        </div>

</nav>
