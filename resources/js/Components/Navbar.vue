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
    <nav class="fixed w-full shadow-2xl shadow-slate-950 bg-gray-950 bg-opacity-80 backdrop-blur-md z-[999]">
      <div class="max-w-[1440px] mx-auto flex justify-between items-center py-5 px-5 lg:px-10 border-b border-gray-700">
        <!-- Logo -->
        <div>
          <img class="w-40" src="/images/admin_assets/rralogo.jpg" alt="Logo">
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex gap-10 border py-3 px-5 rounded-3xl border-gray-700 text-gray-400">
          <a href="#" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Beranda</a>
          <a href="#" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Kelas/Kursus</a>
          <a href="#" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Tentang Kami</a>
          <a href="#" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Galeri</a>
          <a href="#" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Berita</a>
        </div>

        <!-- Contact Button (Always Visible) -->
        <div class="hidden lg:block text-gray-400">
          <a href="#" class="font-semibold tracking-wide border py-3 px-5 rounded-3xl border-gray-700 hover:text-gray-300 duration-300">Hubungi Kami</a>
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
          <a href="#" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Beranda</a>
          <a href="#" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Kelas/Kursus</a>
          <a href="#" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Tentang Kami</a>
          <a href="#" class="font-semibold tracking-wide hover:text-gray-300 duration-300">Berita</a>
          <a href="#" class="font-semibold tracking-wide border py-3 px-5 rounded-3xl border-gray-700 hover:text-gray-300 duration-300">Hubungi Kami</a>
        </div>
      </div>
    </nav>
  </template>
