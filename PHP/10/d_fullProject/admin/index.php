<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50">
    <?php include_once './include/sidebar.php' ?>
    <?php include_once './include/header.php' ?>
    <main class=" ml-72 pt-24 mr-10">
        <div class="report-card mb-5 flex flex-wrap gap-10">
            <div class="sale-report flex-1 bg-linear-to-r from-slate-100 to-slate-500 p-6 rounded-xl shadow-lg">
                <div class="flex justify-between">
                    <svg class="w-6 h-6 text-slate-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z" clip-rule="evenodd"/>
                    </svg>
                    <p class="font-medium">+2.6%</p>
                </div>
                <p class="text-lg mt-2">Weekly Sales</p>
                <p class="text-2xl font-bold">200k</p>
            </div>
            <div class="sale-report flex-1 bg-linear-to-r from-orange-100 to-orange-500 p-6 rounded-xl shadow-lg">
                <div class="flex justify-between">
                    <svg class="w-6 h-6 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                    </svg>

                    <p>+2.6%</p>
                </div>
                 <p class="text-lg mt-2">New user</p>
                <p class="text-2xl font-bold">2k</p>
            </div>
            <div class="sale-report flex-1 bg-linear-to-r from-pink-100 to-fuchsia-500 p-6 rounded-xl shadow-lg">
                <div class="flex justify-between">
                    <svg class="w-6 h-6 text-fuchsia-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m8-2h3m-3 3h3m-4 3v6m4-3H8M19 4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1ZM8 12v6h8v-6H8Z"/>
                    </svg>

                    <p>+2.6%</p>
                </div>
                 <p class="text-lg mt-2">Puchase order</p>
                <p class="text-2xl font-bold">50k</p>
            </div>
            <div class="sale-report flex-1 bg-linear-to-r from-yellow-100 to-yellow-500 p-6 rounded-xl shadow-lg">
                <div class="flex justify-between">
                    <svg class="w-6 h-6 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8"/>
                    </svg>

                    <p>+2.6%</p>
                </div>
                 <p class="text-lg mt-2">Message</p>
                <p class="text-2xl font-bold">200k</p>
            </div>
        </div>
        <div class=" w-full flex flex-row gap-10">
            <div class=" w-1/3 shadow bg-white p-5 rounded">
                <?php include_once './charts/radial.php' ?>
            </div>
            <div class=" w-2/3 shadow bg-white p-5 rounded">
                <?php include_once './charts/line.php' ?>
            </div>
        </div>
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>