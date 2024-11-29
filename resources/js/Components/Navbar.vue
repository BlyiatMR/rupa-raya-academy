<script setup>
import { useDark, useToggle } from "@vueuse/core";

const isDark = useDark()
const toggleDark = useToggle(isDark)
</script>
<script>
    export default {
    data() {
        return {
        isMenuOpen: false,
        isDarkMode: true
        };
    },
    methods: {
        toggleMenu() {
        this.isMenuOpen = !this.isMenuOpen;
        },
        toggleDarkMode() {
          this.isDarkMode = !this.isDarkMode;
          if (this.isDarkMode) {
            document.documentElement.classList.add('dark');
          } else {
            document.documentElement.classList.remove('dark');
          }
        }
    }
    };
</script>
<template>
    <nav class="fixed w-full shadow-2xl dark:shadow-slate-950 dark:bg-gray-950 shadow-slate-300 bg-gray-200 bg-opacity-80 backdrop-blur-md z-[999]">
      <div class="max-w-[1440px] mx-auto flex justify-between items-center py-5 px-5 lg:px-10 border-b dark:border-gray-700 border-gray-300">
        <!-- Logo -->
        <div>
          <img class="w-40" src="/images/rralogo.jpg" alt="Logo">
        </div>
  
        <!-- Desktop Menu -->
        <div class="hidden lg:flex gap-10 border py-3 px-5 rounded-3xl dark:border-gray-700 border-gray-300 dark:text-gray-400 text-slate-600">
          <a href="/" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Beranda</a>
          <a href="/listing" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Kelas/Kursus</a>
          <a href="/about" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Tentang Kami</a>
          <a href="/gallery" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Galeri</a>
          <a href="/news" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Berita</a>
        </div>
  
        <!-- Contact Button (Always Visible) -->
        <div class="hidden lg:flex dark:text-gray-400 text-slate-600">
          <a href="https://api.whatsapp.com/send?phone=+6289526791153&text=Halo Kak. Saya tertarik untuk mengetahui lebih lanjut tentang program di Rupa Raya Academy.
              Bisakah saya mendapatkan informasi lengkapnya? Terima kasih" target="_blank" class="font-semibold tracking-wide border py-3 px-5 rounded-3xl dark:border-gray-700 border-gray-300 hover:text-gray-300 duration-300">Hubungi Kami</a>
              <button @click="toggleDarkMode()" class="px-4 py-2">

                <svg v-if="isDarkMode" class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M18 12a6 6 0 1 1-12 0a6 6 0 0 1 12 0"/>
                  <path fill="currentColor" fill-rule="evenodd" d="M12 1.25a.75.75 0 0 1 .75.75v1a.75.75 0 0 1-1.5 0V2a.75.75 0 0 1 .75-.75M4.399 4.399a.75.75 0 0 1 1.06 0l.393.392a.75.75 0 0 1-1.06 1.061l-.393-.393a.75.75 0 0 1 0-1.06m15.202 0a.75.75 0 0 1 0 1.06l-.393.393a.75.75 0 0 1-1.06-1.06l.393-.393a.75.75 0 0 1 1.06 0M1.25 12a.75.75 0 0 1 .75-.75h1a.75.75 0 0 1 0 1.5H2a.75.75 0 0 1-.75-.75m19 0a.75.75 0 0 1 .75-.75h1a.75.75 0 0 1 0 1.5h-1a.75.75 0 0 1-.75-.75m-2.102 6.148a.75.75 0 0 1 1.06 0l.393.393a.75.75 0 1 1-1.06 1.06l-.393-.393a.75.75 0 0 1 0-1.06m-12.296 0a.75.75 0 0 1 0 1.06l-.393.393a.75.75 0 1 1-1.06-1.06l.392-.393a.75.75 0 0 1 1.061 0M12 20.25a.75.75 0 0 1 .75.75v1a.75.75 0 0 1-1.5 0v-1a.75.75 0 0 1 .75-.75" clip-rule="evenodd"/>
                </svg>
                <!-- Moon icon (shown in dark mode) -->
                <svg v-else class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M12 11.807A9 9 0 0 1 10.049 2a9.94 9.94 0 0 0-5.12 2.735c-3.905 3.905-3.905 10.237 0 14.142c3.906 3.906 10.237 3.905 14.143 0a9.95 9.95 0 0 0 2.735-5.119A9 9 0 0 1 12 11.807"/>
                </svg>
            
                <!-- Sun icon (shown in light mode) -->
                
              </button>
        </div>
  
        <!-- Mobile Menu Icon -->
        <div class="lg:hidden text-gray-400" @click="toggleMenu">
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
  
      <!-- Mobile Menu -->
      <div v-if="isMenuOpen" class="lg:hidden bg-gray-950 bg-opacity-80 backdrop-blur-md shadow-2xl shadow-slate-950 border-t border-gray-700">
        <div class="flex flex-col items-center gap-4 py-5 text-gray-400">
          <a href="/" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Beranda</a>
          <a href="/listing" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Kelas/Kursus</a>
          <a href="/about" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Tentang Kami</a>
          <a href="/gallery" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Galeri</a>
          <a href="/news" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Berita</a>
          <a href="https://api.whatsapp.com/send?phone=+6289526791153&text=Halo Kak. Saya tertarik untuk mengetahui lebih lanjut tentang program di Rupa Raya Academy.
              Bisakah saya mendapatkan informasi lengkapnya? Terima kasih" class="font-semibold tracking-wide border py-3 px-5 rounded-3xl border-gray-700 hover:text-gray-300 duration-300">Hubungi Kami</a>
        </div>
      </div>
    </nav>
  </template>