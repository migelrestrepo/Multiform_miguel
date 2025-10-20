<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> MultiForm | Tailwind CSS form Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive section which can be used to form" name="description" />
    <meta content="Techzaa" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">

    <!-- Style css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-gray-50">

    <section class="py-20 px-4 md:h-screen flex items-center justify-center">
        <div class="container">
            <img src="assets/images/logo-dark.png" class="h-6 mx-auto" alt="">

            <div class="max-w-md mx-auto p-6 bg-white rounded-xl shadow-lg mt-10">
                <h2 class="text-lg font-bold text-gray-700 text-center">Store Details</h2>
                <div class="mt-5">
                    <div class="form">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                            <div>
                                <label class="text-sm font-semibold text-gray-700">Company Name</label>
                                <input placeholder="Company Name" class="block mt-2 w-full py-1.5 px-4 rounded-lg text-sm font-medium border border-gray-200 text-gray-500 focus:border-gray-300 focus:ring-transparent" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                <p class="text-red text-xs hidden">Please fill out this field.</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold text-gray-700">Company Mail</label>
                                <input placeholder="Email ID" class="block mt-2 w-full py-1.5 px-4 rounded-lg text-sm font-medium border border-gray-200 text-gray-500 focus:border-gray-300 focus:ring-transparent" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                            </div>

                            <div class="w-full flex flex-col mb-3">
                                <label class="text-sm font-semibold text-gray-700">Company Address</label>
                                <input placeholder="Address" class="block mt-2 py-1.5 px-4 w-full rounded-lg text-sm font-medium text-grey-700 border-gray-200 focus:border-gray-300 focus:ring-transparent" type="text" name="integration[street_address]" id="integration_street_address">
                            </div>
                            <div class="w-full flex flex-col mb-3">
                                <label class="text-sm font-semibold text-gray-700">Location</label>
                                <select class="py-1.5 px-4 mt-2 block w-full rounded-lg text-sm font-medium text-grey-700 border-gray-200 focus:border-gray-300 focus:ring-transparent" required="required" name="integration[city_id]" id="integration_city_id">
                                    <option value="">Seleted location</option>
                                    <option value="">Cochin,KL</option>
                                    <option value="">Mumbai,MH</option>
                                    <option value="">Bangalore,KA</option>
                                </select>
                                <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this field.</p>
                            </div>

                            <div class="md:col-span-2">
                                <label class="text-sm font-semibold text-gray-700 py-2">Description</label>
                                <textarea required="" name="message" class="w-full h-28 mt-2 block bg-grey-lighter text-grey-darker border border-gray-200 rounded-lg py-4 px-4 focus:border-gray-300 focus:ring-transparent" placeholder="Enter your comapny info" spellcheck="false"></textarea>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block mb-2 text-sm font-semibold text-gray-700">Company Website</label>
                                <div class="flex flex-wrap items-stretch w-full relative">
                                    <div class="flex">
                                        <span class="flex items-center rounded-e-none px-3 text-sm w-12 h-10 bg-black justify-center rounded-lg text-white">
                                            <i class="ti ti-world text-2xl"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="flex-shrink flex-grow border border-s-0 1.5 text-sm font-medium border-gray-200 rounded-lg rounded-s-none px-3 relative focus:border-gray-300 focus:ring-transparent" placeholder="https://">
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <div class="py-6 flex items-center justify-center rounded-lg border-2 border-dashed">
                                    <label class="cursor-pointer text-center">
                                        <i class="ti ti-cloud-download text-2xl"></i>
                                        <input type="file" class="hidden">
                                        <p class="text-sm font-medium text-gray-500">Company Logo</p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 flex items-center justify-end gap-3">
                            <button class="px-5 py-2 text-sm font-medium rounded-md text-gray-600 bg-gray-50 hover:bg-gray-100 transition-all duration-500"> Cancel </button>
                            <button class="px-5 py-2 text-sm font-medium rounded-md text-white bg-blue-400 hover:bg-blue-500 transition-all duration-500">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/libs/preline/preline.js"></script>

</body>

</html>