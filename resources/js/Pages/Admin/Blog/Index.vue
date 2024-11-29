<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>
<script>
import AdminNavbar from '@/Components/AdminNavbar.vue'
</script>
<template>
    <Head title="Dashboard Blog" />
        <div class="lg:flex">
            <AdminNavbar></AdminNavbar>
            <div class="w-full max-lg:mt-[80px]">
                <div
                    class="overflow-hidden bg-gray-200"
                >

                    <div class="p-6 text-gray-900">
                        <h3 class="text-3xl mb-3">
                            <b>Blog</b>
                        </h3>
                        <p class="text-center my-4">Under Construction</p>

                    </div>
                </div>
            </div>
        </div>
</template>
