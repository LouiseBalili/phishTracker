<script setup lang="ts">
    import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome to Sprout"></Head>

    <div class="max-w-full h-max-full flex">
        <div class="w-265 h-screen bg-ecru hidden md:block">

           Hello World
        </div>

        <div class="flex h-screen w-full">
            <div class="m-auto">
                <div class="m-auto space-y-5 flex-direction-col ">
                    <div class="flex flex-col justify-center items-center space-y-5">
                        <img src="/images/Sprout-New-Logo-Black-v2.svg" class="w-12 h-12" alt="sproutLogo">
                        <label class="font-black text-2xl text-center">Sprout HR</label>
                    </div>
                    
                    <div class="flex flex-col space-y-5 ">
                        <label class="font-bold text-lg">Log In</label>
                        <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username or email" required />
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password" required />
                        <Link class="text-white bg-green-600 hover:bg-green-500 transition ease-in-out duration-300 cursor-pointer focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-sm text-sm w-full sm:w-auto p-3.5 text-center font-black dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="/phished">Login</Link>
                        <a href="/phished" class="text-green-600 hover:underline font-bold text-sm text-center -mt-2">Forgot Password?</a>
                        <label class="text-slate-500 text-sm">© 2025 Sprout Solutions Phil., Inc. All Rights Reserved</label>
                    </div>
                </div>  
            </div>
                   
        </div>
        
    </div>
</template>
