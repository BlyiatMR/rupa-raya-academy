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
                        

                        <div class="bg-red-200 mt-2 p-4" v-for="(item, index) in $page.props.course" :key="index">
                            {{ index + 1 }}
                            <h4>{{ item.title }}</h4>
                            <h4>{{ item.type }}</h4>
                            <h4>{{ item.start_date }}</h4>
                            <h4>{{ item.price }}</h4>
                            <h4>{{ item.description }}</h4>
                            <a class="text-blue-600 underline" :href="'/class/edit/' + item.id">edit</a><br>
                            <a class="text-blue-600 underline" :href="'/class/delete/' + item.id">delete</a><br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</template>
