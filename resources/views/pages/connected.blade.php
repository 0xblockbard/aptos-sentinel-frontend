@extends('default')

@section('content')

    <div class="bg-gray-50 overflow-hidden w-full">
        <div class="relative max-w-7xl mx-auto py-8 sm:py-10 px-4 sm:px-6 lg:px-8">

            <div class="mx-auto text-base max-w-full mt-4">
                <div class="flex flex-col items-center w-full">
                    <h2 class="text-base text-sky-400 font-semibold tracking-wide uppercase">Welcome</h2>
                    <div>
                        <h3 class="mt-2 text-3xl leading-8 font-roboto font-extrabold tracking-tight text-sky-600 sm:text-4xl">Get started with Sentinel</h3>
                        <div class="w-40 sm:w-48 border border-sky-400 mt-2 mb-2 ml-auto pr-4"></div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row mt-8 px-20 sm:px-0 sm:space-x-12">
                    
                    <a class="flex w-full sm:w-1/3"  href="{{ route('kyc') }}">
                        <div class="flex flex-col rounded-md shadow-md border border-sky-200 px-8 py-6 hover:shadow-xl shadow-sky-400 hover:border-sky-300 transition duration-300 ease-in-out hover:scale-[1.05] hover:cursor-pointer hover:border-2"> 
                            <h2 class="font-roboto font-bold text-xl text-center">KYC Process</h2>
                            <div class="w-20 border border-sky-400 mt-1 mb-4 mx-auto"></div>
                            <img class="rounded-sm shadow-md border border-sky-500 shadow-sky-500" src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728490951/concept-4_orpyfu.png" />
                            <p class="font-merriweather mt-6 sm:px-6 text-center text-sm font-medium">Learn about KYC Registrars and how KYC verification works</p>
                            <button class="mt-6 mb-2 text-sm leading-4 font-medium mx-auto py-2 px-4 bg-sky-600 text-white rounded-md hover:bg-sky-500 transition duration-300 font-sans">Learn More</button>
                        </div>
                    </a>

                    <a class="flex w-full sm:w-1/3 mt-10 sm:mt-0" href="{{ route('transaction_policies') }}">
                        <div class="flex flex-col rounded-md shadow-md border border-sky-200 px-8 py-6 hover:shadow-xl shadow-sky-400 hover:border-sky-300 transition duration-300 ease-in-out hover:scale-[1.05] hover:cursor-pointer hover:border-2"> 
                            <h2 class="font-roboto font-bold text-xl text-center">Transaction Policies</h2>
                            <div class="w-14 border border-sky-400 mt-1 mb-4 mx-auto"></div>
                            <img class="rounded-sm shadow-md border border-sky-500 shadow-sky-500" src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728490163/concept-1_djjzus.png" />
                            <p class="font-merriweather mt-6 text-center text-sm font-medium">Discover how transaction policies work and ensure compliance</p>
                            <button class="mt-6 mb-2 text-sm leading-4 font-medium mx-auto py-2 px-4 bg-sky-600 text-white rounded-md hover:bg-sky-500 transition duration-300 font-sans">Learn More</button>
                        </div>
                    </a>

                    <a class="flex w-full sm:w-1/3 mt-10 sm:mt-0" href="{{ route('guide') }}">
                        <div class="flex flex-col rounded-md shadow-md border border-sky-200 px-8 py-6 hover:shadow-xl shadow-sky-400 hover:border-sky-300 transition duration-300ease-in-out hover:scale-[1.05] hover:cursor-pointer hover:border-2"> 
                            <h2 class="font-roboto font-bold text-xl text-center">Technical Dive</h2>
                            <div class="w-14 border border-sky-400 mt-1 mb-4 mx-auto"></div>
                            <img class="rounded-sm shadow-md border border-sky-500 shadow-sky-500 " src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728490794/concept-3_bh3rj4.png" />
                            <p class="font-merriweather mt-6 sm:px-4 text-center text-sm font-medium">Get an in-depth look at the technical framework supporting Sentinel</p>
                            <button class="mt-6 mb-2 text-sm leading-4 font-medium mx-auto py-2 px-4 bg-sky-600 text-white rounded-md hover:bg-sky-500 transition duration-300 font-sans">Learn More</button>
                        </div>
                    </a>
                    
                </div>
            </div>
            
            
        </div>
    </div>


@endsection