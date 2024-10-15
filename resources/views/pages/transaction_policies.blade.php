@extends('default')

@section('content')

    <div class="flex w-full py-24 shadow-md" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728489524/header-4_l1fnvw.png'); background-size: cover; background-position: center;">
        <div class="max-w-7xl">
            <div class="flex flex-col ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
                <h3 class="text-3xl text-sky-600 font-extrabold">Transaction Policies</h3>
                <span class="w-14 border-2 border-sky-600 mt-1"></span>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-9/12 px-12 pt-16 pb-24 m-auto">

        <div class="flex flex-col pl-3">

            <div class="bg-sky-50 border-2 border-sky-400 p-4 rounded-md shadow-lg shadow-sky-200">
                
                <div class="mt-2 px-10 py-6 text-gray-600 space-y-6">

                    <h2 class="font-semibold text-2xl">Flexible and Customisable Transaction Policies</h2>
                    
                    <p>Sentinel enforces strict transaction policies that govern how assets are transferred within the ecosystem. These policies define rules that ensure compliant transactions and allow the KYC Controller admin to configure transfer permissions tailored to various regulatory requirements.</p>

                    <p class="font-semibold">Sentinel Transaction Policy Highlights:</p>

                    <ul class="list-disc pl-5 space-y-2">
                        <li><strong>Country Restrictions:</strong>  Transactions are blocked if either the sender or receiver's country is blacklisted.</li>
                        <li><strong>Permission-Based Transfers:</strong> Sentinel allows for precise control over who can send and receive tokens based on a given user's identity (comprising their country and investor status)</li>
                        <li><strong>Transaction Velocity (Size and Frequency Limits):</strong> The system can impose limits on transaction amounts and restrict the number of transactions within a given timeframe, ensuring regulatory compliance and mitigating risk.</li>
                        
                    </ul>

                    <p>These transaction policies are enforced every time a transfer or balance modification occurs. The policies uphold compliance with local regulations and maintain the integrity of the tokenized assets on the blockchain.</p>

                    <h3 class="font-semibold text-lg">Sample Transaction Policies</h3>

                    <div class="transaction_table_container overflow-x-auto">

                        <table class="min-w-full border-2 border-blue-200 text-xs rounded-lg">
                            <thead>
                                <tr class="bg-blue-100">
                                    <th class="py-2 px-4 border-b">Country</th>
                                    <th class="py-2 px-4 border-b">Investor Status</th>
                                    <th class="py-2 px-4 border-b">Can Send</th>
                                    <th class="py-2 px-4 border-b">Can Receive</th>
                                    <th class="py-2 px-4 border-b">Max Transaction Amount</th>
                                    <th class="py-2 px-4 border-b">Blacklist Countries</th>
                                    <th class="py-2 px-4 border-b min-w-32">Apply Transaction Count Velocity</th>
                                    <th class="py-2 px-4 border-b min-w-32">Transaction Count Velocity Timeframe (s)</th>
                                    <th class="py-2 px-4 border-b min-w-32">Transaction Count Velocity Max</th>
                                    <th class="py-2 px-4 border-b min-w-32">Apply Transaction Amount Velocity</th>
                                    <th class="py-2 px-4 border-b min-w-32">Transaction Amount Velocity Timeframe (s)</th>
                                    <th class="py-2 px-4 border-b min-w-32">Transaction Amount Velocity Max</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">USA</td>
                                    <td class="py-2 px-4">Standard</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$10,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">5</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">$10,000</td>
                                </tr>
                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">USA</td>
                                    <td class="py-2 px-4">Accredited</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$50,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">604,800</td>
                                    <td class="py-2 px-4">25</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">604,800</td>
                                    <td class="py-2 px-4">$100,000</td>
                                </tr>
                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">Germany</td>
                                    <td class="py-2 px-4">Standard</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$10,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">5</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">$10,000</td>
                                </tr>
                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">Germany</td>
                                    <td class="py-2 px-4">Accredited</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$40,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">25</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">604,800</td>
                                    <td class="py-2 px-4">$100,000</td>
                                </tr>
                                
                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">France</td>
                                    <td class="py-2 px-4">Standard</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$12,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">5</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">$15,000</td>
                                </tr>
                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">France</td>
                                    <td class="py-2 px-4">Accredited</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$60,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">20</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">604,800</td>
                                    <td class="py-2 px-4">$80,000</td>
                                </tr>

                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">Japan</td>
                                    <td class="py-2 px-4">Standard</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$8,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">5</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">$7,000</td>
                                </tr>
                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">Japan</td>
                                    <td class="py-2 px-4">Accredited</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$35,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">20</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">604,800</td>
                                    <td class="py-2 px-4">$75,000</td>
                                </tr>

                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">Singapore</td>
                                    <td class="py-2 px-4">Standard</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$12,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">5</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">$10,000</td>
                                </tr>
                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">Singapore</td>
                                    <td class="py-2 px-4">Accredited</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$55,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">25</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">604,800</td>
                                    <td class="py-2 px-4">$100,000</td>
                                </tr>

                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">Malaysia</td>
                                    <td class="py-2 px-4">Standard</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$8,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">5</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">$8,000</td>
                                </tr>
                                <tr class="bg-white text-center border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">Malaysia</td>
                                    <td class="py-2 px-4">Accredited</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">Yes</td>
                                    <td class="py-2 px-4">$35,000</td>
                                    <td class="py-2 px-4">N/A</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">86,400</td>
                                    <td class="py-2 px-4">20</td>
                                    <td class="py-2 px-4">No</td>
                                    <td class="py-2 px-4">604,800</td>
                                    <td class="py-2 px-4">$50,000</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    
                </div>

            </div>
            

        </div>

    </div>

@endsection
