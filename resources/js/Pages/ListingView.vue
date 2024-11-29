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
      classSpecial: [
        {
          name: "3D Architectural Rendering",
          link: "/listing/3darchitectural",
          list: "https://docs.google.com/forms/d/e/1FAIpQLScWQS2TQw8ZG3zEOZ57wRKU5pg-BVj5zT-NS4kae-MesmSRlg/viewform",
          price: "Rp. 1.800.000",
          discount: "Rp. 899.000",
          iconPath: "m12 3l7.794 4.5v7.845a2 2 0 0 1-1 1.732L13 20.423a2 2 0 0 1-2 0l-5.794-3.346a2 2 0 0 1-1-1.732V7.5z M12 7v5l-4.33 2.5M12 12l4.33 2.5",
        },
        {
          name: "3D Modelling",
          link: "/listing/3dmodelling",
          list: "https://docs.google.com/forms/d/e/1FAIpQLScF7Cyw5eU8TNZtHaftDjNqaKhY7BJMC2OuAlV3_1JSGiUl9A/viewform",
          price: "Rp. 1.000.000",
          discount: "Rp. 499.000",
          iconPath: "M10.55 2.876L4.595 6.182a2.98 2.98 0 0 0-1.529 2.611v6.414a2.98 2.98 0 0 0 1.529 2.61l5.957 3.307a2.98 2.98 0 0 0 2.898 0l5.957-3.306a2.98 2.98 0 0 0 1.529-2.611V8.793a2.98 2.98 0 0 0-1.529-2.61L13.45 2.876a2.98 2.98 0 0 0-2.898 0Z M20.33 6.996L12 12L3.67 6.996M12 21.49V12",
        },
      ],
      classGeneral: [
        {
          name: "Flutter Mobile Apps",
          date: "14-12-2024",
          link: "/listing/flutter",
          list: "https://docs.google.com/forms/d/e/1FAIpQLSexJlmu983IOzuRT7EJrGB2wpkc7tqkV5REFz73a05nLcuALA/viewform",
          img: "/images/bg-course.jpg",
          price: "Rp. 1.498.000",
          discount: "Rp. 749.000",
        },
        {
          name: "Fullstack Web Development",
          date: "08-12-2024",
          link: "/listing/fullstack",
          list: "https://docs.google.com/forms/d/e/1FAIpQLScjeqPgSSOUUw6M8SmVACmREDgPg8t99sXK_G1xJaEpfoh08Q/viewform",
          img: "/images/bg-fullstack.jpg",
          price: "Rp. 1.398.000",
          discount: "Rp. 699.000",
        },
        {
          name: "UI/UX Design Mobile App",
          date: "09-12-2024",
          link: "/listing/uiux",
          list: "https://docs.google.com/forms/d/e/1FAIpQLSd36nibWMNiLXB5bgJcQGRnM9EL3bhDWJgeDrzuqb8g5B4gsw/viewform",
          img: "/images/bg-uiux.jpg",
          price: "Rp. 1.298.000",
          discount: "Rp. 649.000",
        },
      ],
    };
  },
};
</script>
<template>
    <Head title="Welcome" />
    <div class="relative overflow-x-hidden z-50">
      <Navbar />

      <div class="absolute max-sm:hidden -top-52 -left-52 blur-[200px] dark:opacity-20 opacity-30 -z-10 w-[40rem] h-[40rem] bg-blue-500 rounded-full"></div>
      <div class="absolute max-sm:hidden -top-52 -right-52 blur-[200px] dark:opacity-20 opacity-30 -z-10 w-[35rem] h-[35rem] bg-yellow-500 rounded-full"></div>
  
      <!-- Section Header -->
      <section>
        <div class="max-w-[1440px] sm:mx-auto sm:pt-40 pt-20 pb-20 mx-5">
          <div class="mx-auto pt-10">
            <h3 class="font-semibold text-center text-xl text-blue-500">
              Daftar Kelas/Kursus
            </h3>
            <h1 class="sm:text-5xl text-3xl text-center tracking-wide font-extrabold my-5 dark:bg-gradient-to-r dark:from-gray-500 dark:via-white dark:to-gray-500 bg-gradient-to-r from-gray-500 via-slate-800 to-gray-500 bg-clip-text text-transparent">
              .   .   .Kelas Pilihan untuk Masa Depan Anda.   .   .
            </h1>
            <p class="text-lg dark:text-gray-300 text-slate-600 dark:font-normal font-semibold text-center tracking-wide">
              Pilih Kelas Yang Anda Butuhkan Untuk Belajar
            </p>
          </div>
  
          <!-- Kelas Umum -->
          <div class="mt-20">
            <h1 class="text-3xl text-center tracking-wide font-extrabold mb-2 dark:bg-gradient-to-r dark:from-gray-500 dark:via-white dark:to-gray-500 bg-gradient-to-r from-gray-500 via-slate-800 to-gray-500 bg-clip-text text-transparent">
              Kelas Umum <span class="border border-gray-300 px-2 rounded-full">3</span>
            </h1>
  
            <div class="relative flex flex-wrap gap-10 justify-center mt-10 mb-20">
              <div
                v-for="(special, index) in classSpecial"
                :key="index"
                class="w-[348px] relative overflow-hidden dark:bg-blue-600 bg-blue-500 px-5 py-6 rounded-xl shadow-2xl shadow-gray-400 dark:shadow-blue-950 hover:-translate-y-2 duration-300 z-50"
              >
                <svg
                  class="absolute -top-4 -right-14 opacity-10 rotate-12 w-64 -z-50"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" :d="special.iconPath" />
                </svg>
  
                <div class="mb-4">
                  <svg
                    class="w-10 h-10"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                  >
                    <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" :d="special.iconPath" />
                  </svg>
                </div>
                <a :href="special.link" class="text-xl font-semibold text-white tracking-wide mb-1">{{ special.name }}</a>
  
                <div class="flex gap-x-2">
                  <p class="border-r text-white pr-2">Jumlah Pendaftar</p>
                  <p class="text-white">5 <i class="fa-solid fa-person"></i></p>
                </div>
  
                <div class="flex items-center gap-x-5 mt-5 z-50">
                  <a :href="special.list" target="_blank" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                  <div class="flex flex-col">
                    <p class="text-gray-300 font-extrabold text-base"><s>{{ special.price }}</s></p>
                    <p class="text-white font-extrabold text-xl">{{ special.discount }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Kelas Khusus -->
          <div>
            <h1 class="text-3xl text-center tracking-wide font-extrabold mb-2 dark:bg-gradient-to-r dark:from-gray-500 dark:via-white dark:to-gray-500 bg-gradient-to-r from-gray-500 via-slate-800 to-gray-500 bg-clip-text text-transparent">
              Kelas Khusus <span class="border border-gray-300 px-2 rounded-full">3</span>
            </h1>
  
            <div class="flex gap-10 justify-center mt-10 flex-wrap">
              <div
                v-for="(general, index) in classGeneral"
                :key="index"
                class="w-[348px] relative overflow-hidden dark:bg-blue-600 bg-blue-500 px-5 py-6 rounded-lg shadow-2xl shadow-gray-400 dark:shadow-blue-950 hover:-translate-y-2 duration-300 z-50"
              >
                <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>
                <div class="absolute -left-7 -rotate-[37deg]">
                  <p class="text-white font-semibold bg-red-600 py-1 px-10">Limited Seat!!</p>
                </div>
  
                <div class="mb-5">
                  <img class="rounded-lg" :src="general.img" :alt="general.name" />
                </div>
                <a :href="general.link" class="text-xl font-semibold text-white tracking-wide mb-1">{{ general.name }}</a>

                <div class="flex gap-x-2">
                  <p class="border-r text-white pr-2">Jadwal Kelas</p>
                  <p class="text-white">{{ general.date }}</p>
                </div>

                <div class="flex items-center gap-x-5 mt-5 z-50">
                  <a :href="general.list" target="_blank" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                  <div class="flex flex-col">
                    <p class="text-gray-300 font-extrabold text-base"><s>{{ general.price }}</s></p>
                    <p class="text-white font-extrabold text-xl">{{ general.discount }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- CTA Section -->
      <CtaHome />
  
      <!-- Footer -->
      <Footer />
    </div>
</template>
<style>
html.dark {
  color-scheme: dark;
}
body {
  @apply bg-gradient-to-br dark:from-[#0F0F0F] dark:to-[#0D1B2A] bg-gray-100;
}
</style>