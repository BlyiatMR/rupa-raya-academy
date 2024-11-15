<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

        <template>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Course
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        This is course index 
                        <br>
                        <br>
                        <a href="/class/create">create</a><br>
                        

                        <form class="bg-red-200 mt-2 p-4">
                            <input type="text" :value="$page.props.course.title">
                            <br><br>
                            <input type="text" :value="$page.props.course.type">
                            <br><br>
                            <input type="text" :value="$page.props.course.start_date">
                            <br><br>
                            <input type="text" :value="$page.props.course.price">
                            <br><br>
                            <input type="text" :value="$page.props.course.description">
                            <br><br>
                            <button class="bg-gray-300 p-3">Done</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
</template>
