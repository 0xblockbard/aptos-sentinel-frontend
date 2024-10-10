@extends('default')

@section('content')

    <div class="flex w-full py-24" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728199270/header-3.png'); background-size: cover; background-position: center;">
        <div class="max-w-7xl">
            <div class="flex flex-col ml-16 sm:ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
                <h3 class="text-3xl text-sky-600 font-extrabold">Edit Campaign</h3>
                <span class="w-14 border-2 border-sky-600 mt-1"></span>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-full sm:w-8/12 px-12 py-6 m-auto">

        <div id="update_campaign_form" class="w-full mt-6 mb-32 update_campaign_form">
            <div class="flex flex-row mb-8">

                <div class="flex flex-col w-full pr-1">

                    <input id="campaignId" class="campaign_id hidden" name="campaign_id" data-campaign-id="{{ $id }}" value="{{ $id }}" />

                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                            Name
                        </label>
                        <input id="name" autocomplete="off" class="name appearance-none shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full px-2 py-2 sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="Campaign title">
                    </div>

                    <div class="w-full px-3 mt-4 sm:mt-6">
                        <label class="block mb-2" for="description">
                            <span class="uppercase tracking-wide text-gray-700 text-xs font-bold">About</span>
                        </label>
                        <textarea id="description" name="description" rows="3" class="description appearance-none shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full px-2 py-2  sm:text-sm border border-gray-300 rounded-md" placeholder="Tell us about your project"></textarea>
                    </div>

                    <div class="w-full px-3 mt-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="start_imagedate">
                            Featured Image (URL or IPFS)
                        </label>
                            <input id="image_url" autocomplete="off" class="image_url appearance-none shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full px-2 py-2 sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="Full url or ipfs://">
                    </div>

                </div>

            </div>

            <div id="update_campaign_form_submit"></div>

        </div>

    </div>

@endsection

@section('scripts')

    <script>
        window.campaignId = {{ $id }};
    </script>

@endsection