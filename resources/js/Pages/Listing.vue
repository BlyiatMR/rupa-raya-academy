<script setup>
import Navbar from '@/Components/Navbar.vue';
import Videos from '@/Components/Videos.vue';
import WhyChooseMe from '@/Components/WhyChooseMe.vue';
import CtaHome from '@/Components/CtaHome.vue';
import Footer from '@/Components/Footer.vue';

</script>
<script>
export default {
  data() {
    return {
      kelasList: [
        {
          nama: "Flutter Mobile Apps",
          tanggal: "9 November 2024",
          harga: "649.000",
          iconPath:
            "M5 8c.01-2.644.108-4.059 1.024-4.975C7.049 2 8.699 2 11.999 2s4.95 0 5.975 1.025c.916.916 1.013 2.33 1.023 4.975M5 16c.01 2.644.108 4.059 1.024 4.975C7.049 22 8.699 22 11.999 22s4.95 0 5.975-1.025c.916-.916 1.013-2.33 1.023-4.975M11 19h2m3-9l1.227 1.057c.515.445.773.667.773.943s-.258.498-.773.943L16 14m-8-4l-1.227 1.057C6.258 11.502 6 11.724 6 12s.258.498.773.943L8 14m5-5l-2 6",
        },
        {
          nama: "Fullstack Web Development",
          tanggal: "9 November 2024",
          harga: "699.000",
          iconPath:
            "M14 2h-4c-3.28 0-4.919 0-6.081.814a4.5 4.5 0 0 0-1.105 1.105C2 5.08 2 6.72 2 10s0 4.919.814 6.081a4.5 4.5 0 0 0 1.105 1.105C5.08 18 6.72 18 10 18h4c3.28 0 4.919 0 6.081-.814a4.5 4.5 0 0 0 1.105-1.105C22 14.92 22 13.28 22 10s0-4.919-.814-6.081a4.5 4.5 0 0 0-1.105-1.105C18.92 2 17.28 2 14 2",
        },
        {
          nama: "UI/UX Design Mobile App",
          tanggal: "9 November 2024",
          harga: "649.000",
          iconPath:
            "M2.5 12c0-4.478 0-6.718 1.391-8.109S7.521 2.5 12 2.5c4.478 0 6.718 0 8.109 1.391S21.5 7.521 21.5 12c0 4.478 0 6.718-1.391 8.109S16.479 21.5 12 21.5c-4.478 0-6.718 0-8.109-1.391S2.5 16.479 2.5 12m0-3h19M13 13h4m-4 4h2M7 6h.009M11 6h.009M9 9v12.5",
        },
      ],
    };
  },
};

</script>
<template>
    <Head title="Welcome" />
    <div class="font-['Urbanist'] relative overflow-x-hidden bg-[#0F0F0F] z-50">

        <Navbar></Navbar>

        <section class="h-screen">
            <div class="max-w-[1440px] sm:mx-auto mx-5 sm:py-40 py-10">
                <div class="mb-10">
                    <h1 class="sm:text-5xl text-3xl text-center tracking-wide font-extrabold mb-2 bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text text-transparent">Daftar Kursus/Kelas</h1>
                    <p class="text-base text-gray-300 text-center tracking-wide">Pilih Kelas Yang Anda Butuhkan Untuk Belajar</p>
                </div>

                <div class="mt-20">
                    <h1 class="text-3xl text-center tracking-wide font-extrabold mb-2 bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text text-transparent">Kelas Khusus</h1>

                    <div class="relative flex gap-10 justify-center mt-10 mb-20">


                        <!-- Permanent Class -->
                        <div v-for="(kelas, index) in kelasList" :key="index" class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-xl shadow-2xl shadow-blue-950 hover:-translate-y-2 duration-300">

                            <svg class="absolute -top-4 -right-14 opacity-10 rotate-12 w-64" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" :d="kelas.iconPath" color="white"/></svg>
        
                            <div class="mb-4">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" :d="kelas.iconPath" color="white"/></svg>
                            </div>
                            <h1 class="text-xl font-semibold text-white tracking-wide mb-1">{{ kelas.nama }}</h1>

                            <div class="flex gap-x-2">
                                <p class="border-r text-white pr-2">Kelas Offline</p>
                                <p class="text-white">{{ kelas.tanggal }}</p>
                            </div>

                            <div class="flex items-center gap-x-5 mt-5 z-50">
                                <a href="#" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                                <p class="text-white font-extrabold text-xl">Rp. {{ kelas.harga }}</p>
                            </div>
        
                        </div>


                    </div>
                </div>
    
                <div class="">
                    <h1 class="text-3xl text-center tracking-wide font-extrabold mb-2 bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text text-transparent">Kelas Umum</h1>

                    <div class="flex gap-10 justify-center mt-10 flex-wrap">

                        <div class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-lg shadow-2xl shadow-blue-700 hover:-translate-y-2 duration-300 z-50">
        
                            <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>
        
                            <div class="absolute -left-7 -rotate-[37deg]">
                                <p class="text-white font-semibold bg-red-600 py-1 px-10">Limited Seat!!</p>
                            </div>
                            
                            <div class="mb-5">
                                <img class="rounded-lg z-50" src="/images/bg-course.jpg" alt="">
                            </div>
                            <h1 class="text-xl font-semibold text-white tracking-wide mb-1">Flutter Mobile Apps</h1>
                            <div class="flex gap-x-2">
                                <p class="border-r text-white pr-2">Kelas Offline</p>
                                <p class="text-white">9 November 2024</p>
                            </div>
        
                            <div class="flex items-center gap-x-5 mt-5 z-50">
                                <a href="#" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                                <p class="text-white font-extrabold text-xl">Free</p>
                            </div>
        
                        </div>
                        
                        <div class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-lg shadow-2xl shadow-blue-950 hover:-translate-y-2 duration-300 z-50">
        
                            <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>
                            
                            <div class="mb-5">
                                <img class="rounded-lg z-50" src="/images/bg-course.jpg" alt="">
                            </div>
                            <h1 class="text-xl font-semibold text-white tracking-wide mb-1">Fullstack Web Development</h1>
                            <div class="flex gap-x-2">
                                <p class="border-r text-white pr-2">Kelas Offline</p>
                                <p class="text-white">9 November 2024</p>
                            </div>
        
                            <div class="flex items-center gap-x-5 mt-5 z-50">
                                <a href="#" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                                <p class="text-white font-extrabold text-xl">Rp. 699.000</p>
                            </div>
        
                        </div>

                        <div class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-lg shadow-2xl shadow-blue-950 hover:-translate-y-2 duration-300 z-50">
        
                            <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>
                            
                            <div class="mb-5">
                                <img class="rounded-lg z-50" src="/images/bg-course.jpg" alt="">
                            </div>
                            <h1 class="text-xl font-semibold text-white tracking-wide mb-1">UI/UX Design Mobile App</h1>
                            <div class="flex gap-x-2">
                                <p class="border-r text-white pr-2">Kelas Offline</p>
                                <p class="text-white">9 November 2024</p>
                            </div>
        
                            <div class="flex items-center gap-x-5 mt-5 z-50">
                                <a href="#" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                                <p class="text-white font-extrabold text-xl">Rp. 649.000</p>
                            </div>
        
                        </div>

                        <div class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-lg shadow-2xl shadow-blue-950 hover:-translate-y-2 duration-300 z-50">
        
                            <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>
                            
                            <div class="mb-5">
                                <img class="rounded-lg z-50" src="/images/bg-course.jpg" alt="">
                            </div>
                            <h1 class="text-xl font-semibold text-white tracking-wide mb-1">3D Architectural Rendering Class</h1>
                            <div class="flex gap-x-2">
                                <p class="border-r text-white pr-2">Kelas Offline</p>
                                <p class="text-white">9 November 2024</p>
                            </div>
        
                            <div class="flex items-center gap-x-5 mt-5 z-50">
                                <a href="#" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                                <p class="text-white font-extrabold text-xl">Rp. 899.000</p>
                            </div>
        
                        </div>

                        <div class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-lg shadow-2xl shadow-blue-950 hover:-translate-y-2 duration-300 z-50">
        
                            <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>
                            
                            <div class="mb-5">
                                <img class="rounded-lg z-50" src="/images/bg-course.jpg" alt="">
                            </div>
                            <h1 class="text-xl font-semibold text-white tracking-wide mb-1">SketchUp 3D Modelling</h1>
                            <div class="flex gap-x-2">
                                <p class="border-r text-white pr-2">Kelas Offline</p>
                                <p class="text-white">9 November 2024</p>
                            </div>
        
                            <div class="flex items-center gap-x-5 mt-5 z-50">
                                <a href="#" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                                <p class="text-white font-extrabold text-xl">Rp. 499.000</p>
                            </div>
        
                        </div>

                        <div class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-lg shadow-2xl shadow-blue-950 hover:-translate-y-2 duration-300 z-50">
        
                            <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>
                            
                            <div class="mb-5">
                                <img class="rounded-lg z-50" src="/images/bg-course.jpg" alt="">
                            </div>
                            <h1 class="text-xl font-semibold text-white tracking-wide mb-1">3D Model Product & Photoshoot</h1>
                            <div class="flex gap-x-2">
                                <p class="border-r text-white pr-2">Kelas Offline</p>
                                <p class="text-white">9 November 2024</p>
                            </div>
        
                            <div class="flex items-center gap-x-5 mt-5 z-50">
                                <a href="#" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                                <p class="text-white font-extrabold text-xl">Rp. 500.000</p>
                            </div>
        
                        </div>

                        <div class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-lg shadow-2xl shadow-blue-950 hover:-translate-y-2 duration-300 z-50">
        
                            <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>
                            
                            <div class="mb-5">
                                <img class="rounded-lg z-50" src="/images/bg-course.jpg" alt="">
                            </div>
                            <h1 class="text-xl font-semibold text-white tracking-wide mb-1">Speaking English</h1>
                            <div class="flex gap-x-2">
                                <p class="border-r text-white pr-2">Kelas Offline</p>
                                <p class="text-white">9 November 2024</p>
                            </div>
        
                            <div class="flex items-center gap-x-5 mt-5 z-50">
                                <a href="#" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                                <p class="text-white font-extrabold text-xl">Rp. 349.000</p>
                            </div>
        
                        </div>

                        <div class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-lg shadow-2xl shadow-blue-950 hover:-translate-y-2 duration-300 z-50">
        
                            <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>
                            
                            <div class="mb-5">
                                <img class="rounded-lg z-50" src="/images/bg-course.jpg" alt="">
                            </div>
                            <h1 class="text-xl font-semibold text-white tracking-wide mb-1">SketchUp: Basic Modelling</h1>
                            <div class="flex gap-x-2">
                                <p class="border-r text-white pr-2">Kelas Offline</p>
                                <p class="text-white">9 November 2024</p>
                            </div>
        
                            <div class="flex items-center gap-x-5 mt-5 z-50">
                                <a href="#" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                                <p class="text-white font-extrabold text-xl">Free</p>
                            </div>
        
                        </div>

                        <div class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-lg shadow-2xl shadow-blue-950 hover:-translate-y-2 duration-300 z-50">
        
                            <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>
                            
                            <div class="mb-5">
                                <img class="rounded-lg z-50" src="/images/bg-course.jpg" alt="">
                            </div>
                            <h1 class="text-xl font-semibold text-white tracking-wide mb-1">Blender: Basic Modelling</h1>
                            <div class="flex gap-x-2">
                                <p class="border-r text-white pr-2">Kelas Offline</p>
                                <p class="text-white">9 November 2024</p>
                            </div>
        
                            <div class="flex items-center gap-x-5 mt-5 z-50">
                                <a href="#" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                                <p class="text-white font-extrabold text-xl">Free</p>
                            </div>
        
                        </div>

                    </div>
                </div>
            </div>
        </section>
        
    </div>    
</template>