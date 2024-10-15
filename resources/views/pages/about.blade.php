@extends('default')

@section('content')

    <div class="bg-gray-50 overflow-hidden w-full">
        <div class="relative max-w-7xl mx-auto py-8 sm:py-16 px-12 sm:px-6 lg:px-8">
            <div class="hidden lg:block bg-sky-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
            <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
                <div>
                    <h2 class="text-base text-gray-700 font-semibold tracking-wide">0xBlockBard</h2>
                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-sky-600 sm:text-4xl font-roboto">About Sentinel</h3>
                    <p class="mt-4 text-md text-gray-500 italic font-merriweather">KYC-RWA Tokenisation Framework on Aptos Move</p>
                </div>
            </div>
            <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="relative lg:row-start-1 lg:col-start-2">
                    <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                        <defs>
                            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-sky-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                    </svg>
                    <div id="about_image" class="relative text-base mx-auto max-w-prose lg:max-w-none sm:pl-20">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center" src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728488221/about-1_mzk17j.png" alt="Crowdfunding the future, one idea at a time">
                            </div>
                            <figcaption class="mt-3 flex text-sm text-gray-500">
                                <svg class="flex-none w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">Enhancing regulatory compliance of real-world assets on Aptos Move</span>
                            </figcaption>
                        </figure>
                    </div>

                </div>
                
                <div class="mt-8 lg:mt-0">

                    <div class="mt-2 prose prose-sky text-gray-600 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1 text-justify pr-5 space-y-6">
                        
                        <p><span class="font-semibold text-sky-600">Sentinel</span></p>

                        <p>The <span class="text-sky-600 font-semibold">Sentinel KYC-RWA Tokenization Framework</span> brings a structured and composable approach to the tokenization of Real-World Assets (RWAs) and regulatory Know-Your-Customer (KYC) compliance on Aptos using the Move language.</p>

                        <p>As web3 blockchain technology becomes more widely adopted, it’s increasingly important to facilitate the integration of assets such as property and securities onto the blockchain in a way that adheres to regulatory requirements across different jurisdictions.</p>

                        <p>Inspired by the <a class="text-sky-600 hover:underline" href="https://medici-docs.bridgesplit.com/" target="_blank">Medici RWA Asset Framework</a> on Solana, <span class="text-sky-600 font-semibold">Sentinel</span> provides an unopinionated, flexible, and composable solution to represent tangible and intangible assets with property rights enforced by legal systems.</p>

                        <p>At its core, <span class="text-sky-600 font-semibold">Sentinel</span> comprises a Dispatchable Fungible Asset and KYC Controller module. Any transaction that modifies the distribution of tokens (deposit, withdraw, mint, burn, transfer) will undergo a transaction approval check with the KYC Controller based on the user’s identity.</p>

                        <p>These are facilitated by transaction policies which manage transfer permissions, setting rules on who can send or receive assets and imposing restrictions on transaction size, frequency, and country eligibility. These policies rely on a Transaction Policy Key, which reflects a user’s identity attributes (e.g., country and investor status).</p>

                        <p>The KYC Controller admin can configure and update these transaction policies and appoint KYC Registrars to verify users based on valid pre-approved countries and investor statuses.</p>

                        <p>By maintaining this modular and adaptable structure, <span class="text-sky-600 font-semibold">Sentinel</span> can be applied to a broad range of tokenized real-world assets, offering a framework that aligns with regulatory needs while supporting blockchain integration on Aptos.</p>

                        <p class="font-semibold italic">By 0xBlockBard</p>

                        <p><span class="font-semibold">Twitter / X:</span> <a class="text-sky-600 hover:underline hover:text-sky-700" target="_blank" href="https://x.com/0xblockbard">https://x.com/0xblockbard</a></p>

                        <p><span class="font-semibold">Substack Newsletter:</span> <a class="text-sky-600  hover:underline hover:text-sky-700" target="_blank" href="https://www.0xblockbard.com/">https://www.0xblockbard.com</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection