<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Phished"></Head>

    <div class="h-screen flex flex-col items-center justify-center space-y-8">
        <h1 class="text-4xl font-extrabold font-black">You've Been Phished!</h1>
        <p>Don't worry, this is just an internal cybersecurity test. Don't tell anyone!
            Learn how we phished you with our interactive training below.</p>
        <button class="cursor-pointer text-blue font-medium hover:before:bg-blueborder-blue-500 relative overflow-hidden border bg-blue-500 border-blue-500 bg-white px-8 py-2 rounded-lg text-blue-500 shadow-2xl transition-all before:absolute before:bottom-0 before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-blue-500 before:transition-all before:duration-500 hover:text-white hover:shadow-blue-500 hover:before:left-0 hover:before:w-full"><span class="relative z-10">->&emsp; See What You Missed!</span></button>
    </div>
</template>