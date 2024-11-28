<script setup>
import { useDark, useToggle } from "@vueuse/core";

const isDark = useDark()
const toggleDark = useToggle(isDark)
</script>
<script>
    export default {
    data() {
        return {
        isMenuOpen: false
        };
    },
    methods: {
        toggleMenu() {
        this.isMenuOpen = !this.isMenuOpen;
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
            <button @click="toggleDark()" class="px-4 py-2">
              <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="dark:fill-gray-400 fill-slate-600" d="M12 19a1 1 0 0 1 .993.883L13 20v1a1 1 0 0 1-1.993.117L11 21v-1a1 1 0 0 1 1-1m6.313-2.09l.094.083l.7.7a1 1 0 0 1-1.32 1.497l-.094-.083l-.7-.7a1 1 0 0 1 1.218-1.567zm-11.306.083a1 1 0 0 1 .083 1.32l-.083.094l-.7.7a1 1 0 0 1-1.497-1.32l.083-.094l.7-.7a1 1 0 0 1 1.414 0M4 11a1 1 0 0 1 .117 1.993L4 13H3a1 1 0 0 1-.117-1.993L3 11zm17 0a1 1 0 0 1 .117 1.993L21 13h-1a1 1 0 0 1-.117-1.993L20 11zM6.213 4.81l.094.083l.7.7a1 1 0 0 1-1.32 1.497l-.094-.083l-.7-.7A1 1 0 0 1 6.11 4.74zm12.894.083a1 1 0 0 1 .083 1.32l-.083.094l-.7.7a1 1 0 0 1-1.497-1.32l.083-.094l.7-.7a1 1 0 0 1 1.414 0M12 2a1 1 0 0 1 .993.883L13 3v1a1 1 0 0 1-1.993.117L11 4V3a1 1 0 0 1 1-1m0 5a5 5 0 1 1-4.995 5.217L7 12l.005-.217A5 5 0 0 1 12 7"/></svg>
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