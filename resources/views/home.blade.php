@extends('default')

@section('content')

    <div class="flex flex-col w-full px-10 mt-24">

        <div class="section_one flex flex-col sm:flex-row w-full">

            <div class="flex flex-col items-start justify-center w-full sm:w-1/2 sm:pr-16 sm:pl-20 pb-10 pt-10 sm:pt-16">

                <h1 class="text-5xl text-sky-600 font-extrabold">Sentinel</h1>
                <span class="w-20 border-2 border-sky-600 mt-2"></span>
               
                <h3 class="text-md mt-2 font-semibold italic">KYC-RWA Tokenisation Framework on Aptos Move</h3>

                <p class="text-base mt-8">Tokenise real-world assets and adopt a modular Know-Your-Customer approach with flexible and customisable transaction policies</p>

                <div class="flex flex-row mt-10 space-x-4">
                    <a href="{{ route('guide') }}">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                            Learn More
                        </button>
                    </a>

                </div>

                <span class="w-10 border border-sky-600 mt-24"></span>
                <p class="text-sm mt-2 italic">Adapted for use on Aptos from the <a class="font-semibold hover:underline" target="_blank" href="https://medici-docs.bridgesplit.com/">Medici Framework</a> on Solana</p>

            </div>

            <div class="flex flex-col relative items-center justify-center w-full sm:w-1/2 sm:px-6 py-6 pb-10 sm:pb-0">

                <img class="max-w-full w-[85%] sm:absolute sm:-top-14" src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728471611/home-2_htj6u1.png" alt="kyc tokenised rwa aptos" />

            </div>

        </div>

        @include('pages.partials.bento_grid')

        @include('pages.partials.faq')

    </div>

@endsection

@section('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
          const faqButtons = document.querySelectorAll('[aria-controls^="faq-"]');
      
          faqButtons.forEach(button => {
            button.addEventListener('click', () => {
              const contentId = button.getAttribute('aria-controls');
              const content = document.getElementById(contentId);
      
              const isExpanded = button.getAttribute('aria-expanded') === 'true';
              button.setAttribute('aria-expanded', !isExpanded);
      
              // Toggle the visibility of the answer
              content.classList.toggle('hidden', isExpanded);
      
              // Toggle the icons
              const icons = button.querySelectorAll('[data-slot="icon"]');
              icons[0].classList.toggle('hidden', !isExpanded); // + icon
              icons[1].classList.toggle('hidden', isExpanded); // - icon
            });
          });
        });
      </script>
    
@endsection 