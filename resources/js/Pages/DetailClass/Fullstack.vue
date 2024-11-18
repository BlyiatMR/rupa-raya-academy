<script setup>
import Navbar from '@/Components/Navbar.vue';
import { ref } from 'vue';

const activeSection = ref('penjelasan');
</script>
<template>
    <Head title="Welcome" />
    <div class="font-['Urbanist'] relative overflow-x-hidden bg-[#0F0F0F] z-50">

        <Navbar></Navbar>

        <section class="h-screen">
            <div class="relative max-w-[1440px] sm:mx-auto mx-5 sm:pt-40 sm:pb-30 py-10 z-50">
                <div class="absolute top-0 -left-80 w-[80rem] h-[22rem] rotate-45 bg-blue-600 rounded-full blur-3xl opacity-10 -z-50"></div>

                <div class="mb-10">
                    <h1 class="sm:text-5xl text-3xl text-center tracking-wide font-extrabold mb-2 bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text text-transparent">Fullstack Web Development</h1>
                </div>
                <div>
                    <div class="relative overflow-hidden max-w-4xl mt-20 border border-gray-600 bg-gray-600 bg-opacity-5 backdrop-blur-3xl shadow-2xl rounded-lg py-7 px-8 z-50">
                        <!-- <div class="text-white flex flex-wrap max-sm:justify-center gap-5 text-lg mb-10">
                            <button @click="activeSection = 'penjelasan'" href="#" :class="{
                                'w-32 text-center border-2 font-semibold bg-white text-blue-600 border-white rounded-lg py-2 px-3': activeSection === 'penjelasan',
                                'w-32 text-center border-2 font-semibold border-white rounded-lg py-2 px-3 hover:bg-white hover:text-blue-600 duration-300': activeSection !== 'penjelasan'}">Penjelasan</button>
                            <button @click="activeSection = 'benefit'" :class="{
                                'w-32 text-center border-2 font-semibold bg-white text-blue-600 border-white rounded-lg py-2 px-3': activeSection === 'benefit',
                                'w-32 text-center border-2 font-semibold border-white rounded-lg py-2 px-3 hover:bg-white hover:text-blue-600 duration-300': activeSection !== 'benefit'}">Benefit</button>
                            <button @click="activeSection = 'tools'" :class="{
                                'w-32 text-center border-2 font-semibold bg-white text-blue-600 border-white rounded-lg py-2 px-3': activeSection === 'tools',
                                'w-32 text-center border-2 font-semibold border-white rounded-lg py-2 px-3 hover:bg-white hover:text-blue-600 duration-300': activeSection !== 'tools'}">Tools</button>
                            <button @click="activeSection = 'mentor'" :class="{
                                'w-32 text-center border-2 font-semibold bg-white text-blue-600 border-white rounded-lg py-2 px-3': activeSection === 'mentor',
                                'w-32 text-center border-2 font-semibold border-white rounded-lg py-2 px-3 hover:bg-white hover:text-blue-600 duration-300': activeSection !== 'mentor'}">Mentor</button>
                            <button @click="activeSection = 'review'" :class="{
                                'w-32 text-center border-2 font-semibold bg-white text-blue-600 border-white rounded-lg py-2 px-3': activeSection === 'review',
                                'w-32 text-center border-2 font-semibold border-white rounded-lg py-2 px-3 hover:bg-white hover:text-blue-600 duration-300': activeSection !== 'review'}">Review</button>
                        </div> -->
                        
                        <div v-if="activeSection === 'penjelasan'" class="max-w-3xl space-y-3">
                            <h1 class="text-3xl tracking-wide text-white font-semibold">Kelas Fullstack Web Development</h1>
                            <hr/>
                            <p class="tracking-wider leading-normal text-white sm:text-lg text-base">Kuasai kemampuan membangun website modern dari backend hingga frontend dengan Laravel. Kelas ini <span class="font-bold">Dirancang Untuk Pemula Maupun Profesional yang Ingin Meningkatkan Skill</span> dengan studi kasus nyata dan bimbingan mentor berpengalaman.</p>
                            <p class="tracking-wider leading-normal text-white sm:text-lg text-base">Belajar lebih mudah <span class="font-bold">dengan Materi yang Terstruktur, Praktik Langsung, dan Fokus Pada Kebutuhan Industri.</span> Mulai dari autentikasi pengguna, integrasi API, hingga deploy aplikasi, semua dipandu langkah demi langkah. Daftar sekarang dan jadilah developer yang siap bersaing di dunia kerja</p>
                            <div class="flex sm:gap-20 gap-3 flex-wrap pt-3">
                                <div>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base"><i class="fa-solid fa-check text-white mr-2"></i> Pembelajaran dari Ahli</p>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base"><i class="fa-solid fa-check text-white mr-2"></i> Proyek Akhir Portfolio</p>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base"><i class="fa-solid fa-check text-white mr-2"></i> Pengalaman Baru</p>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base"><i class="fa-solid fa-check text-white mr-2"></i> Kelas Interaktif</p>
                                </div>
                                <div>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base"><i class="fa-solid fa-check text-white mr-2"></i> Voucher Discount Kelas Lain</p>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base"><i class="fa-solid fa-check text-white mr-2"></i> Bebas Konsultasi Setelah Kelas</p>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base"><i class="fa-solid fa-check text-white mr-2"></i> Sertifikat Kelas</p>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base"><i class="fa-solid fa-check text-white mr-2"></i> Kesempatan Magang</p>
                                </div>
                            </div>
                            <div class="pt-3">
                                <img class="w-20" src="/images/vscode.jpg" alt="">
                            </div>
                        </div>

                        <!-- <div v-if="activeSection === 'benefit'" class="max-w-3xl space-y-3">
                            <h1 class="text-3xl tracking-wide text-white font-semibold">Benefit</h1>
                            <hr />
                            <div class="space-y-3">
                                <div>
                                    <h3 class="tracking-wider leading-normal font-bold text-white sm:text-lg text-base">Voucher Discount</h3>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base">Nikmati diskon spesial untuk kelas tambahan, perluas keterampilan dengan biaya terjangkau</p>
                                </div>
                                <div>
                                    <h3 class="tracking-wider leading-normal font-bold text-white sm:text-lg text-base">Tergabung dengan kami</h3>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base">Nikmati diskon spesial untuk kelas tambahan, perluas keterampilan dengan biaya terjangkau</p>
                                </div>
                                <div>
                                    <h3 class="tracking-wider leading-normal font-bold text-white sm:text-lg text-base">Sertifikat Kelas</h3>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base">Nikmati diskon spesial untuk kelas tambahan, perluas keterampilan dengan biaya terjangkau</p>
                                </div>
                                <div>
                                    <h3 class="tracking-wider leading-normal font-bold text-white sm:text-lg text-base">Kesempatan Magang</h3>
                                    <p class="tracking-wider leading-normal text-white sm:text-lg text-base">Nikmati diskon spesial untuk kelas tambahan, perluas keterampilan dengan biaya terjangkau</p>
                                </div>
                            </div>
                        </div>

                        <div v-if="activeSection === 'tools'" class="max-w-3xl space-y-3">
                            <h1 class="text-3xl tracking-wide text-white font-semibold">Tools</h1>
                            <hr />
                            <p class="text-white">Ini adalah bagian tools...</p>
                        </div>

                        <div v-if="activeSection === 'mentor'" class="max-w-3xl space-y-3">
                            <h1 class="text-3xl tracking-wide text-white font-semibold">Mentor</h1>
                            <hr />
                            <p class="text-white">Ini adalah bagian mentor...</p>
                        </div>

                        <div v-if="activeSection === 'review'" class="max-w-3xl space-y-3">
                            <h1 class="text-3xl tracking-wide text-white font-semibold">Review</h1>
                            <hr />
                            <p class="text-white">Ini adalah bagian review...</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>