@extends('default')

@section('content')

    <div class="flex w-full py-24 shadow-md" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728489524/header-4_l1fnvw.png'); background-size: cover; background-position: center;">
        <div class="max-w-7xl">
            <div class="flex flex-col ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
                <h3 class="text-3xl text-sky-600 font-extrabold">Know-Your-Customer (KYC)</h3>
                <span class="w-14 border-2 border-sky-600 mt-1"></span>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-9/12 px-12 pt-16 pb-24 m-auto">

        <div class="flex flex-col pl-3">

            <div class="bg-sky-50 border-2 border-sky-400 p-4 rounded-md shadow-lg shadow-sky-200">
                
                <div class="mt-2 px-10 py-6 text-gray-600 space-y-6">

                    <h2 class="font-semibold text-2xl">KYC Compliance with Sentinel</h2>
                    
                    <p>In the rapidly evolving world of blockchain and real-world asset tokenization, regulatory compliance is paramount. Sentinel’s KYC system ensures that only verified users can participate in the tokenized ecosystem.</p>

                    <p>Through a streamlined process, the Sentinel KYC Controller verifies user identities in adherence to regulatory standards, using a combination of country codes and investor statuses.</p>

                    <p class="font-semibold">Key Features of Sentinel KYC:</p>

                    <ul class="list-disc pl-5 space-y-2">
                        <li><strong>Identity Verification:</strong> Sentinel supports country and investor status checks, ensuring that only verified users participate.</li>
                        <li><strong>Appointed KYC Registrars:</strong> Trusted entities may verify users based on their valid criteria, allowing related tokenised RWA businesses and startups to tap on a growing number of KYC-ed users from a network of KYC Registrars</li>
                        <li><strong>Customizable Access Controls:</strong> KYC Registrars can only use the administrator-approved countries and investor statuses, maintaining flexible yet strict compliance with regulatory requirements.</li>
                        
                    </ul>

                    <p>The KYC module ensures that all user information aligns with Sentinel's established rules, offering a reliable framework for integrating RWAs into the blockchain while maintaining a high standard of security and compliance.</p>

                    {{-- @include('partials.flash_messages')

                    <h3 class="font-semibold text-lg">Admin KYC Actions</h3>

                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-yellow-700">
                                    Notice: Actions will need to be taken on a local deployment
                                </p>
                            </div>
                        </div>
                    </div> --}}
                    
                </div>

            </div>

        </div>

    </div>

@endsection
