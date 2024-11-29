<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm, usePage} from '@inertiajs/vue3';
const date = new Date().toLocaleDateString('en-IN', { timeZone: 'Asia/Makassar' })
</script>

<script>
import AdminNavbar from '@/Components/ADminNavbar.vue';
export default {
        data() {
            return {
            isMenuOpen: false,
            dateTime: ''
            };
        },
        mounted() {
            setInterval(()=>{
                    this.dateTime = new Date().toLocaleTimeString('en-US', { timeZone: 'Asia/Makassar', hour12: false})
                }, 300)
        },
        methods: {
            toggleMenu() {
            this.isMenuOpen = !this.isMenuOpen;
            }
        }
    };
</script>

<template>
    <Head title="Dashboard" />

    <div class="flex">
        <AdminNavbar></AdminNavbar>
        <div class="w-full bg-gray-200 max-lg:mt-[80px]">
            <div class="text-center my-10">
                <span class="text-6xl text-gray-700">
                    {{ dateTime }}
                </span>
                <br>
                <span class="anu1 text-xl text-gray-700">
                    {{ date }}
                </span>
            </div>
            <div class="flex flex-wrap w-full py-6 gap-y-4">
                <div class="lg:flex-[33.3333%] flex-[50%] lg:grow-0 grow px-2">
                    <div class="flex p-6 bg-white rounded-xl border text-gray-700 items-center">
                        <div class="pr-4 ">
                            <i class="fa-solid fa-graduation-cap text-3xl"></i>
                        </div>
                        <div class="grow">
                            <h3 class="text-2xl font-bold">{{ $page.props.totalClass }}</h3>
                            <p class="sm:text-sm text-xs opacity-70">Kelas yang Aktif</p>
                        </div>
                    </div>
                </div>
                <div class="lg:flex-[33.3333%] flex-[50%] lg:grow-0 grow px-2">
                    <div class="flex p-6 bg-white rounded-xl border text-gray-700 items-center">
                        <div class="pr-4 ">
                            <i class="fa-solid fa-building text-3xl"></i>
                        </div>
                        <div class="grow">
                            <h3 class="text-2xl font-bold">2</h3>
                            <p class="sm:text-sm text-xs opacity-70">Blog</p>
                        </div>
                    </div>
                </div>
                <div class="lg:flex-[33.3333%] flex-[50%] lg:grow-0 grow px-2">
                    <div class="flex p-6 bg-white rounded-xl border text-gray-700 items-center">
                        <div class="pr-4 ">
                            <i class="fa-solid fa-users text-3xl"></i>
                        </div>
                        <div class="grow">
                            <h3 class="text-2xl font-bold">4</h3>
                            <p class="sm:text-sm text-xs opacity-70">Galeri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
/*.anu1 {
    @apply font-bold text-2xl
}*/
</style>
