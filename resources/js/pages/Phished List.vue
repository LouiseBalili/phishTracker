<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Phished List',
        href: '/phishedlist',
    },
];

const props = defineProps({
    clicks: Object,
})
</script>

<template>
  <Head title="Phished List" />

    <AppLayout :breadcrumbs="breadcrumbs">

        <div class="mx-10 my-10 ">
            <div class="div flex items-end justify-between mb-4">
                <div class="div">
                    <div class="h2 font-semibold text-xl text-gray-800 leading-tight">Phished Employees</div>
                    <div class="p text-sm text-gray-500">List of employees who clicked on the url of the phishing simulation.</div>
                </div>
            </div>

            <!-- Table that display the list of employees who clicked on the link of the phishing simulation -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                               Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                IP Address
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Timestamp
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="click in clicks" :key="click.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{ click.email }}
                            </th>
                            <td class="px-6 py-4">
                                {{ click.ip_address }}
                            </td>
                            <td class="px-6 py-4">
                                {{ click.clicked_at }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <pagination :data="clicks" />

        </div>
        
    </AppLayout>
</template>