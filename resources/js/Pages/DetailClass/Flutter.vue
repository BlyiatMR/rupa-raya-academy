<script setup>
import Navbar from '@/Components/Navbar.vue';
import CtaHome from '@/Components/CtaHome.vue';
import Footer from '@/Components/Footer.vue';
import { ref, computed, onMounted } from 'vue';

const activeSection = ref('penjelasan');

// const openingDate = new Date('2024-12-01T00:00:00Z');
// const countdown = ref({ days: 0, hours: 0, minutes: 0, seconds: 0 });

// const updateCountdown = () => {
//   const now = new Date();
//   const timeLeft = openingDate - now;

//   if (timeLeft > 0) {
//     countdown.value.days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
//     countdown.value.hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//     countdown.value.minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
//     countdown.value.seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
//   } else {
//     countdown.value = { days: 0, hours: 0, minutes: 0, seconds: 0 };
//   }
// };

// onMounted(() => {
//   updateCountdown();
//   setInterval(updateCountdown, 1000);
// });
</script>
<style>
.scale-150 {
    --tw-scale-x: 2.5;
    --tw-scale-y: 2.5;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
</style>
<template>
    <Head title="Welcome" />
    <div class="font-['Urbanist'] relative overflow-x-hidden bg-gradient-to-br from-[#0F0F0F] to-[#0D1B2A] z-50">

        <Navbar></Navbar>

        <section class="">
            <div class="relative max-w-[1440px] sm:mx-auto sm:pt-40 pt-20 pb-20 mx-5">
                <div class="relative mx-auto py-10 z-50">

                    <div class="absolute -top-52 -left-52 blur-[200px] opacity-20 -z-10 w-[40rem] h-[40rem] bg-blue-500 rounded-full"></div>
                    <div class="absolute -top-52 -right-52 blur-[200px] opacity-20 -z-10 w-[35rem] h-[35rem] bg-yellow-500 rounded-full"></div>

                    <p class="w-fit mx-auto flex gap-3 items-center text-gray-300 font-bold text-lg border border-gray-300 py-2 px-5 rounded-3xl mb-2">Batch 1 Dibuka</p>
                    <h1 class="sm:text-5xl text-3xl text-center tracking-wide font-extrabold bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text text-transparent mt-5">Flutter Mobile Apps Development</h1>
                    <!-- <div class="text-white font-bold mt-5 text-3xl text-center">
                        <span>{{ countdown.days }} Hari</span> : 
                        <span>{{ countdown.hours }} Jam</span> : 
                        <span>{{ countdown.minutes }} Menit</span> : 
                        <span>{{ countdown.seconds }} Detik</span>
                    </div> -->
                </div>
                <div class="flex flex-wrap gap-5 justify-center items-stretch mt-10">
                    <div class="relative overflow-hidden max-w-4xl border border-gray-600 bg-gray-600 bg-opacity-5 backdrop-blur-3xl shadow-2xl rounded-lg py-7 px-8 z-50 h-fit">
                        <div class="text-white flex flex-wrap max-sm:justify-center gap-5 text-lg mb-10">
                            <button @click="activeSection = 'penjelasan'" href="#" :class="{
                                'w-32 max-[360px]:w-28 max-[320px]:w-full text-center border font-semibold bg-blue-600 text-white border-blue-600 rounded-lg py-2 px-3': activeSection === 'penjelasan',
                                'w-32 max-[360px]:w-28 max-[320px]:w-full text-center border font-semibold border-gray-300 rounded-lg py-2 px-3 hover:bg-blue-600 hover:text-white hover:border-blue-600 duration-300': activeSection !== 'penjelasan'}">Penjelasan</button>
                            <button @click="activeSection = 'mentor'" :class="{
                                'w-32 max-[360px]:w-28 max-[320px]:w-24 text-center border font-semibold bg-blue-600 text-white border-blue-600 rounded-lg py-2 px-3': activeSection === 'mentor',
                                'w-32 max-[360px]:w-28 max-[320px]:w-24 text-center border font-semibold border-gray-300 rounded-lg py-2 px-3 hover:bg-blue-600 hover:text-white hover:border-blue-600 duration-300': activeSection !== 'mentor'}">Mentor</button>
                            <button @click="activeSection = 'suasana'" :class="{
                                'w-32 max-[360px]:w-28 max-[320px]:w-24 text-center border font-semibold bg-blue-600 text-white border-blue-600 rounded-lg py-2 px-3': activeSection === 'suasana',
                                'w-32 max-[360px]:w-28 max-[320px]:w-24 text-center border font-semibold border-gray-300 rounded-lg py-2 px-3 hover:bg-blue-600 hover:text-white hover:border-blue-600 duration-300': activeSection !== 'suasana'}">Suasana</button>
                            <button @click="activeSection = 'jadwal'" :class="{
                                'w-32 max-[360px]:w-28 max-[320px]:w-full text-center border font-semibold bg-blue-600 text-white border-blue-600 rounded-lg py-2 px-3': activeSection === 'jadwal',
                                'w-32 max-[360px]:w-28 max-[320px]:w-full text-center border font-semibold border-gray-300 rounded-lg py-2 px-3 hover:bg-blue-600 hover:text-white hover:border-blue-600 duration-300': activeSection !== 'jadwal'}">Jadwal</button>
                        </div>
                        <div v-if="activeSection === 'penjelasan'" class="space-y-7">
                            <h1 class="text-3xl tracking-wide text-white font-semibold">Kelas Flutter Mobile Apps Development</h1>
                            <hr class="h-px my-8 border-0 bg-gray-600">
                            <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Kuasai kemampuan membangun aplikasi mobile modern berbasis Flutter. Kelas ini dirancang untuk Pemula Maupun Profesional yang ingin meningkatkan skill melalui studi kasus nyata dan bimbingan mentor berpengalaman.</p>
                            <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Belajar lebih mudah dengan Materi yang Terstruktur, Praktik Langsung, dan fokus pada kebutuhan industri. Mulai dari desain UI responsif, integrasi API, hingga publikasi aplikasi di Play Store dan App Store, semua dipandu langkah demi langkah.</p>
                            <p class="tracking-wider leading-normal text-white font-bold sm:text-lg text-base">Kami Akan Menyediakan Fasilitas Selama Sesi Pembelajaran Berupa Personal Computer dengan Spesiffikasi Tinggi Untuk Tiap Peserta Selama Masa Pembelajaran.</p>
                            <div class="flex sm:gap-20 gap-3 flex-wrap">
                                <div>
                                    <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base"><i class="fa-solid fa-check text-gray-300 mr-2"></i> Pembelajaran dari Ahli</p>
                                    <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base"><i class="fa-solid fa-check text-gray-300 mr-2"></i> Membuat aplikasi Android</p>
                                    <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base"><i class="fa-solid fa-check text-gray-300 mr-2"></i> Pengalaman Baru</p>
                                    <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base"><i class="fa-solid fa-check text-gray-300 mr-2"></i> Fundamental Flutter & Dart</p>
                                </div>
                                <div>
                                    <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base"><i class="fa-solid fa-check text-gray-300 mr-2"></i> Voucher Discount Kelas Lain</p>
                                    <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base"><i class="fa-solid fa-check text-gray-300 mr-2"></i> Bebas Konsultasi Setelah Kelas</p>
                                    <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base"><i class="fa-solid fa-check text-gray-300 mr-2"></i> Sertifikat Kelas</p>
                                    <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base"><i class="fa-solid fa-check text-gray-300 mr-2"></i> Kesempatan Magang</p>
                                </div>
                            </div>
                            <div class="">
                                <h3 class="tracking-wider leading-normal text-gray-300 sm:text-lg text-lg">Tools yang Digunakan:</h3>
                                <div class="flex gap-5 pt-3">
                                    <div class="flex flex-col gap-2 items-center">
                                        <img class="w-20" src="/images/vscode.jpg" alt="">
                                        <p class="text-gray-300">Visual Studio Code</p>
                                    </div>
                                    <div class="flex flex-col gap-2 items-center">
                                        <img class="w-20" src="/images/flutter-class/android-studio.jpg" alt="">
                                        <p class="text-gray-300">Android Studio</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="tracking-wider leading-normal text-gray-300 sm:text-lg text-lg">Lokasi Kelas:</h3>
                                <div class="flex relative flex-col flex-wrap gap-1.5 items-start self-stretch mt-3 text-base text-white rounded-md min-h-[477px] max-md:px-5 max-md:pt-24">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.467545816472!2d119.42170527426846!3d-5.143194652003857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee30045e23b87%3A0xb428b7d955e91c29!2sPT%20Rupa%20Raya%20Indonesia!5e1!3m2!1sid!2sid!4v1724295033623!5m2!1sid!2sid" class="object-cover absolute inset-0 size-full rounded-2xl shadow-inner-md  " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7474d593853be44913854e05e4d5857087c17491bd8fb7a5c8ba0f9ff0cde1c5?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" class="object-contain shrink-0 mt-1 w-3.5 aspect-[0.78]" alt="Location pin icon" />
                                </div>
                            </div>
                        </div>
                        <div v-if="activeSection === 'mentor'" class="space-y-7">
                            <div class="flex items-center gap-5">
                                <div class="relative overflow-hidden rounded-full">
                                    <img class="object-cover w-20 scale-150" src="/images/flutter-class/instructor-flutter.jpg" alt="">
                                </div>
                                <div>
                                    <h1 class="text-3xl tracking-wide text-white font-semibold">Muhammad Fadli Jaya</h1>
                                    <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Mobile Flutter Enginer Disdik Sulsel</p>
                                </div>
                            </div>
                            <hr class="h-px my-8 border-0 bg-gray-600">
                            <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Muhammad Fadli Jaya adalah seorang Flutter Engineer berbakat yang mengembangkan solusi mobile untuk Dinas Pendidikan Sulawesi Selatan. Dengan keahlian tinggi dalam membangun aplikasi lintas platform, Fadli mengintegrasikan teknologi modern untuk menciptakan pengalaman pengguna yang responsif dan efisien.</p>
                            <div class="space-y-3">
                                <h3 class="tracking-wider leading-normal text-gray-300 sm:text-lg text-lg">Sosial Media:</h3>
                                <div class="flex gap-5">
                                    <a target="_blank" href="https://www.instagram.com/ruparaya.academy/"><i class="fa-brands fa-instagram text-gray-300 text-2xl hover:text-blue-500 duration-300"></i></a>
                                    <a target="_blank" href="https://www.tiktok.com/@ruparaya.academy"><i class="fa-brands fa-tiktok text-gray-300 text-2xl hover:text-blue-500 duration-300"></i></a>
                                    <a target="_blank" href="https://www.youtube.com/@RupaRayaAcademy?app=desktop"><i class="fa-brands fa-youtube text-gray-300 text-2xl hover:text-blue-500 duration-300"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/p/Rupa-Raya-Academy-61559498048422/?_rdr"><i class="fa-brands fa-facebook text-gray-300 text-2xl hover:text-blue-500 duration-300"></i></a>
                                </div>
                            </div>
                        </div>
                        <div v-if="activeSection === 'suasana'" class="space-y-7">
                            <h1 class="text-3xl tracking-wide text-white font-semibold">Suasana Kelas</h1>
                            <hr class="h-px my-8 border-0 bg-gray-600">
                            <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Dengan suasana yang kolaboratif, peserta diajak untuk berinteraksi, berbagi ide, dan memecahkan masalah bersama.</p>
                            <div class="flex flex-wrap justify-center gap-5">
                                <div class="relative overflow-hidden w-64 h-60 rounded-lg">
                                    <img class="object-cover scale-150" src="/images/flutter-class/flutter-img-1.jpg" alt="">
                                </div>
                                <div class="relative overflow-hidden w-64 h-60 rounded-lg">
                                    <img class="object-cover scale-150" src="/images/flutter-class/flutter-img-4.jpg" alt="">
                                </div>
                                <div class="relative overflow-hidden w-64 h-60 rounded-lg">
                                    <img class="object-cover scale-125" src="/images/flutter-class/flutter-img-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div v-if="activeSection === 'jadwal'" class="space-y-7">
                            <h1 class="text-3xl tracking-wide text-white font-semibold">Jadwal Kelas</h1>
                            <hr class="h-px my-8 border-0 bg-gray-600">
                            <img class="w-full rounded-lg" src="/images/flutter-class/schedule-flutter.jpg" alt="">
                        </div>
                    </div>

                    <div class="flex flex-col gap-5">
                        <div class="border border-gray-600 bg-gray-600 bg-opacity-5 backdrop-blur-3xl shadow-2xl rounded-lg py-7 px-5 z-50 space-y-7">       
                            <table class="mx-auto">
                                <tr class="text-gray-300 text-lg">
                                    <td>Pertemuan</td>
                                    <td class="text-end">8x</td>
                                </tr>
                                <tr class="text-gray-300 text-lg">
                                    <td>Durasi Kelas</td>
                                    <td class="text-end">3 Jam</td>
                                </tr>
                                <tr class="text-gray-300 text-lg">
                                    <td class="w-40 max-sm:w-36" colspan="1">Mulai</td>
                                    <td class="text-end">14 Desember 2024</td>
                                </tr>
                                <tr class="text-gray-300 text-lg">
                                    <td class="w-40 max-sm:w-36" colspan="1">Selesai</td>
                                    <td class="text-end">5 Januari 2025</td>
                                </tr>
                            </table>
                        </div>
                        <div class="border border-gray-600 bg-gray-600 bg-opacity-5 backdrop-blur-3xl shadow-2xl rounded-lg py-7 px-5 z-50 space-y-7">
                            <div class="w-fit mx-auto">
                                <p class="text-gray-300 font-extrabold text-base"><s>Rp. 1.498.000</s></p>
                                <h1 class="text-white font-bold sm:text-5xl text-4xl text-center">Rp. 749.000</h1>
                            </div>
                            <div class="flex justify-center gap-3">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSexJlmu983IOzuRT7EJrGB2wpkc7tqkV5REFz73a05nLcuALA/viewform" target="_blank" class="sm:w-36 w-28 text-center bg-blue-600 text-white sm:text-lg text-base font-semibold py-2 px-4 rounded-lg hover:-translate-y-1 duration-300">Daftar</a>
                                <a href="https://api.whatsapp.com/send?phone=+6289526791153&text=https://api.whatsapp.com/send?phone=+6289526791153&text=Halo Kak. Saya tertarik untuk mengetahui lebih lanjut tentang kelas Flutter Mobile Apps Development. Apakah saya bisa mendapatkan informasi lengkapnya? Terima kasih" target="_blank" class="sm:w-36 w-28 text-center bg-blue-600 text-white sm:text-lg text-base font-semibold py-2 px-4 rounded-lg hover:-translate-y-1 duration-300">Hubungi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <CtaHome />

        <Footer />

    </div>
</template>