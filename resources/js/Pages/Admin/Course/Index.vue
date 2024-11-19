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
                    class="overflow-hidden bg-gray-100 shadow sm:rounded-lg"
                >

                    <div class="p-6 text-gray-900">
                        <h3 class="text-3xl mb-3">
                            <b>Kelas</b>
                        </h3>
                        <!-- Success message -->
                        <div v-if="$page.props.flash.success" class="bg-[#d4edda] mb-4 p-4">
                            <b class="text-[#155724]">
                                {{ $page.props.flash.success }}
                            </b>
                        </div>
                        <div v-if="$page.props.flash.error" class="bg-red-200 mb-4 p-4">
                            <b class="text-[#cc315d]">
                                {{ $page.props.flash.error }}
                            </b>
                        </div>
                        <!-- Success message end -->
                        <p class="mb-3 text-right">
                            <a class="py-1 px-3 bg-gray-300 rounded" href="/class/create">Buat kelas</a>
                        </p>
                        
                        <div class="flex">
                            <div class="flex-[0_0_33%] p-2" v-for="(item, index) in $page.props.course" :key="index">
                                <div class="bg-gray-300 mt-2 px-4 py-2 rounded shadow">
                                    No : {{ index + 1 }}
                                    <img :src="'/storage/'+item.banner_img" height="300" class="mb-3 h-[300px] w-full object-cover">
                                    <div class="flex justify-between mb-1">
                                        <p>{{ item.type }}</p>
                                        <p>{{ item.start_date }}</p>
                                    </div>
                                    <h3 class="text-xl">{{ item.title }}</h3>
                                    <p>{{ item.slug }}</p>
                                    <p>{{ item.description }}</p>
                                    <p>{{ item.price }}</p>
                                    <div class="space-x-2">
                                        <a class="text-blue-600 underline" :href="'/class/edit/' + item.id">edit</a>
                                        <a class="text-blue-600 underline" :href="'/class/delete/' + item.id">delete</a>
                                        <a class="text-blue-600 underline" :href="'/class/detail/' + item.slug">detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p v-if="$page.props.course.length < 1 " class="text-center my-4">Tidak ada data yang dapat ditampilkan</p>

                    </div>
                </div>
            </div>
        </div>
</template>
