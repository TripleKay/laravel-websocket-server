<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import {defineProps} from "vue";
const props = defineProps({
    notifications: {
        type: Array,
        required: true,
    }
})
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div
                        v-for="notification in notifications"
                        :key="notification.id"
                        class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3">
                        <p v-text="notification.data.text"/>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
